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

class CreateBronzeCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('create:bronze')
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
          $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(53);
          $document = $em->getRepository('AppBundle:CompanyDocumentation')->findOneBy(['documentType' => $doc_type, 'company' => $company]);
          $service->generateCertificate(['company' => $company->getName(), 'from' => $document->getIssueDate()->format('jS \of F Y'), 'to' => $document->getExpiryDate()->format('jS \of F Y'), 'serial' => $document->getDocumentNumber(), 'filename' => $document->getFile()]);

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
