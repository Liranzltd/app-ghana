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

class PushToAPICommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('register:apis')
            ->setDescription('Register Suppliers')
            ->addArgument('id', InputArgument::REQUIRED, 'The id of the company.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
        $companyService = $this->getContainer()->get('app.company.service');
        $companyService->pushToApis($em,$company);
        //$company->setStatus('Awaiting Verification');
        $em->persist($company);
        $em->flush();
    }

}
