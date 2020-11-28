<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CompanyTypeDocumentationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('documentType')
        ->add('isRequired')
        ->add('multiple')
        ->add('expires')
        ->add('requiresUpload');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('documentType');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('documentType');
    }
}

 ?>
