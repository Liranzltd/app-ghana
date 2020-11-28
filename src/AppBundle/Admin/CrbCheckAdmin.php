<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;


class CrbCheckAdmin extends AbstractAdmin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create')
        ->remove('edit')
         ->remove('delete')
         ->remove('export');
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('createdAt',null,['label' => 'Check Date', 'widget' => 'single_text', 'required' => 'false'])
        ->add('response',null,['label' => 'Response from CRB Server', 'required' => 'false'])
        ->add('creditHistory',null,['label' => 'Length of Credit History in Months'])
        ->add('paAccounts',null,['label' => 'Count of Performing Accounts'])
        ->add('paTotalValue',null,['label' => 'Total Value of Open Performing Accounts'])
        ->add('paClosedAccounts',null,['label' => 'Count of Closed Performing Account'])
        ->add('paOpenAccounts',null,['label' => 'Count of Open Performing Account'])
        ->add('npaAccounts',null,['label' => 'Count of Non Performing Accounts.'])
        ->add('npaTotalValue',null,['label' => 'Total Value of Non Performing Accounts'])
        ->add('openAccounts',null,['label' => 'Count of Open Non Performing Accounts'])
        ->add('closedAccounts',null,['label' => 'Count of Closed Non Performing Accounts'])
        ->add('legalSuits',null,['label' => 'Count of Legal Suits'])
        ->add('bouncedCheques',null,['label' => 'Count of Bounced Cheques'])
        ->add('fraudulentCases',null,['label' => 'Count of Fraudlent Cases'])
        ->add('creditApplications',null,['label' => 'Count of Credit Applications'])
        ->add('lastPAListingDate',null,['label' => 'Date of Last Listing Date of Performing Account', 'widget' => 'single_text'])
        ->add('lastNPAListingDate',null,['label' => 'Date of Last Listing Date of Non Perfoming Account', 'widget' => 'single_text'])
        ->add('lastLegalSuitDate',null,['label' => 'Date of Last Legal Suit Date', 'widget' => 'single_text'])
        ->add('lastBouncedChequeDate',null,['label' => 'Date of Last Legal Suit Date', 'widget' => 'single_text'])
        ->add('lastFraudDate',null,['label' => 'Date of Last Fraud', 'widget' => 'single_text'])
        ->add('lastCreditApplicationDate',null,['label' => 'Count of Enquiries Last 30 Days', 'widget' => 'single_text']);
    }

    public function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
          ->add('company')
          ->add('createdAt',null,['label' => 'Check Date'])
          ->add('response',null,['label' => 'Response from CRB Server'])
          ->add('creditHistory',null,['label' => 'Length of Credit History in Months'])
          ->add('paAccounts',null,['label' => 'Count of Performing Accounts'])
          ->add('paTotalValue',null,['label' => 'Total Value of Open Performing Accounts'])
          ->add('paClosedAccounts',null,['label' => 'Count of Closed Performing Account'])
          ->add('paOpenAccounts',null,['label' => 'Count of Open Performing Account'])
          ->add('npaAccounts',null,['label' => 'Count of Non Performing Accounts.'])
          ->add('npaTotalValue',null,['label' => 'Total Value of Non Performing Accounts'])
          ->add('openAccounts',null,['label' => 'Count of Open Non Performing Accounts'])
          ->add('closedAccounts',null,['label' => 'Count of Closed Non Performing Accounts'])
          ->add('legalSuits',null,['label' => 'Count of Legal Suits'])
          ->add('bouncedCheques',null,['label' => 'Count of Bounced Cheques'])
          ->add('fraudulentCases',null,['label' => 'Count of Fraudlent Cases'])
          ->add('creditApplications',null,['label' => 'Count of Credit Applications'])
          ->add('lastPAListingDate',null,['label' => 'Date of Last Listing Date of Performing Account'])
          ->add('lastNPAListingDate',null,['label' => 'Date of Last Listing Date of Non Perfoming Account'])
          ->add('lastLegalSuitDate',null,['label' => 'Date of Last Legal Suit Date'])
          ->add('lastBouncedChequeDate',null,['label' => 'Date of Last Legal Suit Date'])
          ->add('lastFraudDate',null,['label' => 'Date of Last Fraud'])
          ->add('lastCreditApplicationDate',null,['label' => 'Count of Enquiries Last 30 Days'])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
        ->add('company')
        ->add('createdAt',null,['label' => 'Check Date'])
        ->add('response',null,['label' => 'Response from CRB Server'])
        ->add('creditHistory',null,['label' => 'Length of Credit History in Months'])
        ->add('paAccounts',null,['label' => 'Count of Performing Accounts'])
        ->add('paTotalValue',null,['label' => 'Total Value of Open Performing Accounts'])
        ->add('paClosedAccounts',null,['label' => 'Count of Closed Performing Account'])
        ->add('paOpenAccounts',null,['label' => 'Count of Open Performing Account'])
        ->add('npaAccounts',null,['label' => 'Count of Non Performing Accounts.'])
        ->add('npaTotalValue',null,['label' => 'Total Value of Non Performing Accounts'])
        ->add('openAccounts',null,['label' => 'Count of Open Non Performing Accounts'])
        ->add('closedAccounts',null,['label' => 'Count of Closed Non Performing Accounts'])
        ->add('legalSuits',null,['label' => 'Count of Legal Suits'])
        ->add('bouncedCheques',null,['label' => 'Count of Bounced Cheques'])
        ->add('fraudulentCases',null,['label' => 'Count of Fraudlent Cases'])
        ->add('creditApplications',null,['label' => 'Count of Credit Applications'])
        ->add('lastPAListingDate',null,['label' => 'Date of Last Listing Date of Performing Account'])
        ->add('lastNPAListingDate',null,['label' => 'Date of Last Listing Date of Non Perfoming Account'])
        ->add('lastLegalSuitDate',null,['label' => 'Date of Last Legal Suit Date'])
        ->add('lastBouncedChequeDate',null,['label' => 'Date of Last Legal Suit Date'])
        ->add('lastFraudDate',null,['label' => 'Date of Last Fraud'])
        ->add('lastCreditApplicationDate',null,['label' => 'Count of Enquiries Last 30 Days'])
        ->add('enquiriesLast30Days',null,['label' => 'Count of Enquiries Last 30Days'])
        ->add('enquiries31to60Days',null,['label' => 'Count of Enquiries 31 to 60 Days'])
        ->add('enquiries61to90Days',null,['label' => 'Count of Enquiries 31 to 60 Days'])
        ->add('enquiries91Days',null,['label' => 'Count of Enquiries Over91 Days']);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->add('company')
          ->add('createdAt',null,['label' => 'Check Date'])
          ->add('response',null,['label' => 'Response from CRB Server'])
          ->add('creditHistory',null,['label' => 'Length of Credit History in Months'])
          ->add('paTotalValue',null,['label' => 'Total Value of Open Performing Accounts'])
          ->add('npaAccounts',null,['label' => 'Count of Non Performing Accounts.'])
          ->add('npaTotalValue',null,['label' => 'Total Value of Non Performing Accounts'])
          ->add('legalSuits',null,['label' => 'Count of Legal Suits'])
          ->add('bouncedCheques',null,['label' => 'Count of Bounced Cheques'])
          ->add('fraudulentCases',null,['label' => 'Count of Fraudlent Cases'])
          ->add('creditApplications',null,['label' => 'Count of Credit Applications'])
          ->add('_action', null, array(
            'actions' => array(
                'show' => array(),
                'edit' => array(),
                'delete' => array(),
            )
        ))
          ;
    }

}

 ?>
