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
use AppBundle\Entity\Request;
use AppBundle\Entity\CompanyMembership;
use AppBundle\Entity\CompanyAddress;
use AppBundle\Entity\CompanyContact;
use AppBundle\Entity\CompanyDirector;
use AppBundle\Entity\CompanyShareholding;
use AppBundle\Entity\CompanyReference;

class ImportTendersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('import:tenders')
            ->setDescription('User confirmation')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $em = $this->getContainer()->get('doctrine')->getManager();
      $file = file_get_contents($this->getContainer()->getParameter('uploads_directory').'tender.json');
      $tenders = json_decode($file, true);
      $output->writeln('Tenders before '.count($tenders));
      foreach($tenders as $tender)
      {
        //$output->writeln('Buyer '.$tender['BuyerCompanyName'].' ID '.$tender['id']);
        //$output->writeln('Buyer '.$tender['CurrentVersionId']);
        $buyer = $em->getRepository('AppBundle:Buyer')->findOneBy(['name' => $tender['BuyerCompanyName']]);
        if($buyer)
        {
          $request = new Request();
        //  $request->setId(substr($tender['CurrentVersionId'],strrpos($tender['CurrentVersionId'],"")));
          $request->setSummary($tender['Scope']);
          $request->setBuyer($buyer);
          $request->setName($tender['Name']);
          $request->setDescription();
          $request->setImportData('Previous id: '.$tender['id'].' ContractDuration: '.$tender['ContractDuration'].' PrimaryContactName: '.$tender['PrimaryContactName'].' PrimaryContactRole: '.$tender['PrimaryContactRole']);
          $request->setDeadline(\DateTime::createFromFormat("Y-m-d\TH:i:s", $tender['Deadline']));
          $request->setSubmissionInstructions($tender["MethodOfSubmission"]);
          $request->setExpectedDecisionDate(\DateTime::createFromFormat("Y-m-d\TH:i:s", $tender['SelectionDate']));
          $request->setIsPublished($tender['IsDraft'] == false ? true : false);
          $request->setStatus($tender['IsDraft'] == true ? 'New' : "");
          $em->persist($request);
          $em->flush();
        }
        else {
          $output->writeln('Tenders has no buyer '.$tender['id']);
        }
        //exit;
      }
    }
}
