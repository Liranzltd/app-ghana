<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class CompanyContactAdmin extends AbstractAdmin
{
  protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create')
         ->remove('delete');
         //->remove('export');
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('name',null,['disabled' => false])
          ->add('designation',null,['disabled' => false])
          ->add('email',null,['disabled' => false])
          ->add('mobile',null,['disabled' => false])
          ->add('contactAddress',null,['disabled' => false])
          ->add('phone',null,['disabled' => false])
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name')
        ->add('designation')
        ->add('email')
        ->add('mobile')
        ->add('contactAddress')
        ->add('phone')
        ->add('company');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('name')
        ->add('designation')
        ->add('email')
        ->add('mobile')
        ->add('contactAddress')
        ->add('phone')
        ->add('company.name',null,['label' => 'Company']);
    }

    public function getExportFields()
    {
      $exportFields = [];
      $exportFields['Name'] = 'name';
      $exportFields['Designation'] = 'designation';
      $exportFields['Email'] = 'email';
      $exportFields['Contact Address'] = 'contactAddress';
      $exportFields['Company'] = 'company.name';
      return $exportFields;
    }
}

 ?>
