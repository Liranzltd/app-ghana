<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class CompanyReferenceAdmin extends AbstractAdmin
{
  protected function configureRoutes(RouteCollection $collection)
  {
      $collection->remove('create')
       ->remove('delete')
       ->remove('export');
  }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('client',null,['label' => 'Company'])
          ->add('description','textarea',['label' => 'Contract reference and brief description of goods/services supplied'])
          ->add('valueOfContract',null,['label' => 'Value of contract (US$/GHS)'])
          ->add('currency')
          ->add('contactPerson')
          ->add('designation',null,['label' => 'Contact Designation'])
          ->add('email',null,['label' => 'Contact Email'])
          ->add('telephone',null,['label' => 'Contact Telephone'])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('client')
        ->add('description')
        ->add('valueOfContract')
        ->add('currency')
        ->add('contactPerson')
        ->add('designation')
        ->add('email')
        ->add('telephone');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('client')
        ->add('description')
        ->add('valueOfContract')
        ->add('currency')
        ->add('contactPerson')
        ->add('designation')
        ->add('email')
        ->add('telephone');
    }
}

 ?>
