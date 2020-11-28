<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class MemberAdmin extends AbstractAdmin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
          ->remove('create');
        //  ->remove('delete')
        //  ->remove('export');
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('firstName',null,['disabled' => true,])
        // ->add('middleName')
        ->add('surname')
        ->add('gender')
        ->add('email')
        ->add('mobile')
        ->add('dateOfBirth')
        ->add('registeredCompanies')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('firstName')
        // ->add('middleName')
        ->add('surname')
        ->add('gender')
        ->add('email')
        ->add('mobile')
        ->add('dateOfBirth')
        ->add('registeredCompanies')
        ->add('user.enabled',null,['label' => 'Activated']);;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('firstName')
        ->add('middleName')
        ->add('surname')
        ->add('gender')
        ->add('email')
        ->add('mobile')
        ->add('dateOfBirth')
        ->add('registeredCompanies')
        ->add('user.enabled','boolean',['editable' => true, 'label' => 'Activated']);
    }

    public function getExportFields()
    {
         $exportFields = [];
         $exportFields['First Name'] = 'firstName';
         $exportFields['Middle Name'] = 'middleName';
         $exportFields['Surname'] = 'surname';
         $exportFields['Email'] = 'email';
         $exportFields['mobile'] = 'mobile';
         $exportFields['registeredCompanies'] = 'companiesAsString';
         return $exportFields;
     }
}

 ?>
