<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;

class MigrateReferencesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('migrate:references')
            ->setDescription('User confirmation')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $em = $this->getContainer()->get('doctrine')->getManager();
      $references = $em->getRepository('AppBundle:CompanyReference')->findAll();
      $companyService = $this->getContainer()->get('app.company.service');
      $doc_type =  $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(55);
      $arr = [];
      foreach($references as $reference)
      {
        if(array_key_exists($reference->getCompany()->getId(),$arr))
        {
          $arr[$reference->getCompany()->getId()] += 1;
        }
        else {
          $arr[$reference->getCompany()->getId()] = 1;
        }
        if($reference->getFile() != '')
        {
          $id = $companyService->addDocument($em,$reference->getCompany(),$doc_type,$reference->getFile(),'Company Reference '.$arr[$reference->getCompany()->getId()],$reference->getClient(),'','','','yes');
          $reference->setDocument($em->getRepository('AppBundle:CompanyDocumentation')->find($id));
          $output->writeln($reference->getCompany()->getId() .' Count '.$arr[$reference->getCompany()->getId()]);
          $em->persist($reference);
        }
      }
      $em->flush();
    }
}
