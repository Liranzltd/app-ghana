<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;

class SubscriptionReminderCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('subscription:reminder')
            ->setDescription('Subscription Reminder')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $em = $this->getContainer()->get('doctrine')->getManager();
      if($input->getArgument('id'))
      {
        $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
        $this->performAction($company,$em);
      }
      else {
        $q = $em->createQueryBuilder();
        $q->select('c')->from('AppBundle:Company','c')->join('c.subscription','s')->where('s.isActive = 1')->andWhere('s.expiryDate < :expiry');
        $q->setParameter('expiry',new \DateTime('-2 week'), \Doctrine\DBAL\Types\Type::DATETIME);
        $companies = $q->getQuery()->getResult();

        foreach ($companies as $company) {
            $output->writeln("Name: ". $company->getName() .' Subscription status: '.$company->getCurrentSubscriptionStatus().' Expiry:'.$company->getAccountRenewal()->format('d/m/Y'));
            $this->performAction($company,$em);
        }
      }
    }
    public function performAction($company,$em)
    {
      $subscription = $em->getRepository('AppBundle:Company')->checkActiveSubscription($company->getId())[0];
      $now = new \DateTime();
      $week2 = new \DateTime('-2 week');
      $week1 = new \DateTime('-1 week');
      if($company->getAccountRenewal() < $now)
      {
        $subscription->setIsActive(false);
        $company->setIsFullyPaidUp(false);
        $company->setCurrentSubscriptionStatus('Expired');
      }
      if($subscription->getExpiryReminder() < 2 && ($company->getAccountRenewal() == $week2 || $company->getAccountRenewal() == $week1))
      {
        $notification = $this->getContainer()->get('app.notifications');
        $notification->sendEmail('email/renewal_notification.html.twig','African Partner Pool - Subscription Renewal Reminder',$company->getRegisteredBy()->getEmail(),$options = ['company' => $company, 'expiryDate' => $subscription->getExpiryDate()->format('d/m/Y H:i') ],$cc = []);
        $subscription->setExpiryReminder($subscription->getExpiryReminder()+1);
      }
      $em->persist($subscription);
      $em->persist($company);
      $em->flush();
    }
}
