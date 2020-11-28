<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;

class SendEmailActivationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('send:activation:email')
            ->setDescription('Activation email')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $em = $this->getContainer()->get('doctrine')->getManager();
      $notificationService = $this->getContainer()->get('app.notifications');
      if($input->getArgument('id'))
      {
        $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
        $notificationService->sendEmail('email/registration.html.twig','African Partner Pool',$company->getRegisteredBy()->getEmail(),['confirmationUrl' => $this->getContainer()->getParameter('base_url').'email-confirmation?token='.$company->getRegisteredBy()->getUser()->getConfirmationToken().'&email='.$company->getRegisteredBy()->getEmail(),'name' => $company->getRegisteredBy()->getFirstName()]);
        $output->writeln($company->getRegisteredBy()->getEmail());
      }
      else
      {
        $c = $em->createQueryBuilder();
        $c->select('c')->from('AppBundle:Company','c')->join('c.registeredBy','m')->join('m.user','u')->where('c.createdAt > \'2017-09-10\' AND u.enabled = 0');
        $companies = $c->getQuery()->getResult();

        foreach($companies as $company)
        {
          $notificationService->sendEmail('email/registration.html.twig','African Partner Pool',$company->getRegisteredBy()->getEmail(),['confirmationUrl' => $this->getContainer()->getParameter('base_url').'email-confirmation?token='.$company->getRegisteredBy()->getUser()->getConfirmationToken().'&email='.$company->getRegisteredBy()->getEmail(),'name' => $company->getRegisteredBy()->getFirstName()]);
          $output->writeln('ID: '.$company->getId().' Name: '.$company->getName());
        }
      }
    }
}
