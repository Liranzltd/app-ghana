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

class UpdateSubscriptionCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('import:subscription')
            ->setDescription('Register Suppliers')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        if($input->getArgument('id'))
        {
          $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
          $company->setCurrentSubscriptionStatus($company->getSubscriptionStatus());
          $em->persist($company);
        }
        else {
          $companies = $em->getRepository('AppBundle:Company')->findAll();
          foreach ($companies as $company) {
            $company->setCurrentSubscriptionStatus($company->getSubscriptionStatus());
            $em->persist($company);
          }
        }
        $em->flush();
    }

}
