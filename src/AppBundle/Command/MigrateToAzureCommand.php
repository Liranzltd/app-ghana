<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\Transaction;
use AppBundle\Entity\Member;
use AppBundle\Entity\TransactionSync;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;

class MigrateToAzureCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('company:to:azure')
            ->setDescription('Add to Azure')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        if($input->getArgument('id'))
        {
          $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
          $output->writeLn('Company: '.$company->getId().' Status: '.$company->getCurrentSubscriptionStatus());
          $this->addToAzure($em,$company->getRegisteredBy(),$output);
        }
        else {
          $q = $em->createQueryBuilder();
          $q->select('m')->from('AppBundle:Member','m')->join('m.buyerMembership','bm')->where('m.azureId IS NULL');
          $members = $q->getQuery()->getResult();
          foreach ($members as $member) {
            $output->writeLn('Member: '.$member->getId().' Email: '.$member->getEmail());
            $this->addToAzure($em,$member,$output);
          }
        }
        $em->flush();
    }

    public function addToAzure($em,$member,$output)
    {
      $output->writeLn('User: '.$member->getUser()->getEmail());
      $azure_service = $this->getContainer()->get('app.azure');
      //Post to Azure
      $azureUser = $azure_service->inviteGuestUser($member->getUser(),'Welcome to the APP Ghana extended services platform. Please complete the account confirmation to be able to access additional functionality of the APP to add value to your business.',$member->getUser()->getEmail());
      if($azureUser)
        $member->setAzureId($azureUser->getInvitedUser()->getId());
      $em->persist($member);
    }
}
