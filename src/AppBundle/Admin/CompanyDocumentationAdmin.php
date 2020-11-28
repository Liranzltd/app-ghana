<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class CompanyDocumentationAdmin extends AbstractAdmin
{
  protected function configureRoutes(RouteCollection $collection)
  {
      $collection
        ->remove('create')
       ->remove('delete')
       ->remove('export');
  }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('documentNumber')
          ->add('issuedBy')
          ->add('issueDate',null,['widget' => 'single_text'])
          ->add('expiryDate',null,['widget' => 'single_text'])
          ->add('documentType')
          ->add('verificationStatus','choice',['choices' => ['Awaiting Verification' => 'Awaiting Verification', 'Valid' => 'Valid', 'Invalid' => 'Invalid']])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          // ->add('documentNumber')
          // ->add('issuedBy')
          // ->add('issueDate')
          // ->add('expiryDate')
          ->add('company')
          ->add('documentType.documentType',null,['label' => 'Document Type'])
          ->add('verificationStatus');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          //->add('documentNumber')
          // ->add('issuedBy')
          // ->add('issueDate')
          // ->add('expiryDate')
          ->add('documentType.documentType.name',null,['label' => 'Document Type'])
          ->add('company.name',null,['label' => 'Company'])
          ->add('createdAt',null,['label' => 'Uploaded At'])
          ->add('file',null,['template' => 'AppBundle:Documents:link.html.twig'])
          ->add('verificationStatus','choice',['editable' => true, 'choices' => ['Awaiting Verification' => 'Awaiting Verification', 'Valid' => 'Valid', 'Invalid' => 'Invalid']]);
    }
}

 ?>
