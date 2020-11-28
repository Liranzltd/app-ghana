<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class CompanyAddressAdmin extends AbstractAdmin
{
  protected function configureRoutes(RouteCollection $collection)
  {
      $collection->remove('create')
       ->remove('delete')
       ->remove('export');
  }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('buildingNumber')
        ->add('buildingName')
        ->add('street')
        ->add('town')
        ->add('region')
        ->add('country')
        ->add('postalAddress')
        ->add('postalCode')
        ->add('plotNo')

        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('buildingNumber')
        ->add('buildingName')
        ->add('street')
        ->add('town')
        ->add('region')
        ->add('country')
        ->add('postalAddress')
        ->add('postalCode')
        ->add('plotNo');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('buildingNumber')
        ->add('buildingName')
        ->add('street')
        ->add('town')
        ->add('region')
        ->add('country')
        ->add('postalAddress')
        ->add('postalCode')
        ->add('plotNo');
    }
}

 ?>
