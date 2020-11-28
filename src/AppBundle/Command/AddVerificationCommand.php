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

class AddVerificationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
          ->setName('add:verification')
          ->setDescription('Add verification questions for companies that missed')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $q = $em->createQueryBuilder();
        $companies = $q->select('c')->from('AppBundle:Company','c')->where('c.hiveBriteId > 0')->getQuery()->getResult();
        //$output->writeln(count($companies));
        foreach($companies as $company)
        {
          $output->writeln($company->getId().' '.count($company->getVerification()));
          if(count($company->getVerification()) < 1)
          {
            $output->writeln($company->getId());
            $companyService = $this->getContainer()->get('app.company.service');
            $companyService->addVerificationElements($em,$company);
          }
        }
    }

}
