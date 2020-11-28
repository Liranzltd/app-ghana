<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;
use AppBundle\Entity\Member;
use AppBundle\Entity\Company;
use AppBundle\Entity\CompanyMembership;
use AppBundle\Entity\CompanyAddress;
use AppBundle\Entity\CompanyContact;
use AppBundle\Entity\CompanyDirector;
use AppBundle\Entity\CompanyShareholding;
use AppBundle\Entity\CompanySubscription;
use AppBundle\Entity\CompanyReference;

class ImportUpdateValidationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('update:suppliers:validation')
            ->setDescription('suppliers validation update')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $file = file_get_contents($this->getContainer()->getParameter('uploads_directory').'csvjson.json');
      $suppliers = json_decode($file, true);
      $em = $this->getContainer()->get('doctrine')->getManager();
      foreach($suppliers as $supplier)
      {
        $company = $em->getRepository('AppBundle:Company')->findOneBy(['name' => trim(ucwords(strtolower($supplier['Registered name'])))]);
        if($company)
        {
          $company->setIiaValidated(true);
          if($company->getStatus() != "Verified")
          {
            $company->setStatus("Verified");
          }
          $em->persist($company);
          $em->flush();
          $output->write('Company: '.$company->getName().' Verification Status: '. $company->getStatus());
        }
      }
    }
}
