<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class CompanyShareholdingAdmin extends AbstractAdmin
{
  protected function configureRoutes(RouteCollection $collection)
  {
      $collection->remove('create')
       ->remove('delete')
       ->remove('export');
  }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('name')
          ->add('nationality')
          ->add('shares')
          ->add('percentage')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name')
        ->add('nationality')
        ->add('shares');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name')
        ->add('nationality')
        ->add('shares');
    }
}

 ?>
