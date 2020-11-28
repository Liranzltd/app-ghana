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

class RunBronzeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('run:bronze')
            ->setDescription('Perform Bronze Check')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $service = $this->getContainer()->get('app.company.service');
        if($input->getArgument('id'))
        {
          $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
          $vstatus = $company->getValidationStatus('sort');
          //$output->writeLn($vstatus[2]['step']->getName());
          if($vstatus[2]['step']->getName() == 'APP Manager confirms the supplier is matched to the RIGHT categories of Goods and Services')
          {
            $service->finaliseVerification($company,$vstatus[2]['approval_status'],$em);
          }
        }
        else
        {
          $companies = $em->getRepository('AppBundle:Company')->findBy(['status' => 'Verification in Progress']);
          $i=0;
          foreach($companies as $company)
          {
            $vstatus = $company->getValidationStatus('sort');
            if($company->getStatus() == 'Verification in Progress')
            {
              $output->writeLn($i.' Company: ' .$company->getId());
              if($vstatus[2]['step']->getName() == 'APP Manager confirms the supplier is matched to the RIGHT categories of Goods and Services')
              {
                $i++;
                $output->writeLn($i.' Company: ' .$company->getId());
                $service->finaliseVerification($company,$vstatus[2]['approval_status'],$em);
              }
            }

          }
        }
        //$output->writeLn(Utils::decrypt($company->getRegisteredBy()->getSdsso()->getDhot()));
    }

}
