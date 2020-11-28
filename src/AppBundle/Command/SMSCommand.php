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

class SMSCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('hubtel:sms')
            ->setDescription('Perform CRB Check')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $notificationService = $this->getContainer()->get('app.notifications');
      print_r($notificationService->sendSMS('+233506430128','test'));
    }
  }
