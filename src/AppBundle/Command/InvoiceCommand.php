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

class InvoiceCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('generate:invoice')
            ->setDescription('Genegrate Invoice')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $invoice = $this->getContainer()->get('app.print_service');
        $notification = $this->getContainer()->get('app.notifications');
        if($input->getArgument('id'))
        {
          $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
          if($company)
          {
            $invoice->generatePDF('email/invoice.html.twig',$this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/invoice-'.$company->getPaymentReference().'.pdf',['company' => $company, 'address' => $company->getAddresses(), 'supplier_registration' => $company->getTier()->getSubscriptionFee()]);
            $title = 'Invoice for subscription '.$company->getName();
            $companyService = $this->getContainer()->get('app.company.service');
            $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(1);
            $dt = new \DateTime();
            $id = $companyService->addDocument($em,$company,$doc_type,'invoice-'.$company->getPaymentReference().'.pdf','Invoice #'.$company->getPaymentReference(),'APP Ghana',$dt->format('d/m/Y'),'',null);

            $notification->createCompanyNotification($company,'Thank you showing interest in being an APP Supplier <strong>'.$company->getName().'</strong>. Kindly make the payment via MTN Mobile Money number <strong>0553853991</strong>. Alternatively, download the invoice for more payment options. <br/><a href="/portal/downloadfile/'.$id.'">Download Invoice</a>','Invoice for '.$company->getName().' APP Subscription.');
            $company->setIsInvoiced(true);
            $company->setAmountDue($company->getTier()->getSubscriptionFee());
            $em->persist($company);
            $em->flush();
            $output->writeln("Generated Invoice ID: ".$id);
          }
        }
        else {
          $em = $this->getContainer()->get('doctrine')->getManager();
          $companies = $em->getRepository('AppBundle:Company')->findAll();
          foreach ($companies as $company) {
            //$doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(1);
            //$invoice = $em->getRepository('AppBundle:CompanyDocumentation')->findOneBy(['company' => $company, 'documentType' => $doc_type]);
            $invoice->generatePDF('email/invoice.html.twig',$this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/invoice-'.$company->getPaymentReference().'.pdf',['company' => $company, 'address' => $company->getAddresses(), 'supplier_registration' => $company->getMembershipCategory() == 'Local Supplier' ? $this->getContainer()->getParameter('supplier.registration.amountl') : $this->getContainer()->getParameter('supplier.registration.amounti') ]);
          }
        }
    }

}
