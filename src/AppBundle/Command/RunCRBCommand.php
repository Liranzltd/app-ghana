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

class RunCRBCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('run:crb')
            ->setDescription('Perform CRB Check')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        if($input->getArgument('id'))
        {
          $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
          $this->runCRB($company);
        }
        else {
          $companies = $em->getRepository('AppBundle:Company')->findBy(['status' => 'Verification in Progress']);
          foreach($companies as $company)
          {
            $vstatus = $company->getValidationStatus();
            // $output->writeLn($company->getId());
            // print_r($vstatus);
            if(!empty($vstatus) && $company->getCrbChecked() == false)
            {
              $output->writeLn($company->getId());
              $this->runCRB($company);
            }
          }
        }
        //$output->writeLn(Utils::decrypt($company->getRegisteredBy()->getSdsso()->getDhot()));
    }

    function runCRB($company)
    {
      $crb = $this->getContainer()->get('app.crb_service');
      // if($company->getCompanyType()->getName() == 'Sole Proprietorship')
      // {
      //   $shareholder = $company->getShareholders()->first();
      //   if($shareholder)
      //   {
      //     $sname = explode(" ",$shareholder->getName());
      //     $response = $crb->comprehensiveConsumerReport($company->getSolePropriterId(),$sname[0],$company,$passport = null,$alienID = null,$name2 = $sname[1],$name3 = null,$name4 = null);
      //   }
      // }
      // else
      // {
        $crb->comprehensiveCorporateReport($company);
      // }
    }

}
