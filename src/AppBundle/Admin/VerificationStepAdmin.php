<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class VerificationStepAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('name')
          ->add('description',null,['label' => 'Procedure'])
          ->add('checkType','choice',['choices' => ['Automated' => 'Automated', 'Manual' => 'Manual']])
          ->add('mandatory')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('name')
          ->add('description')
          ->add('checkType')
          ->add('mandatory');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->addIdentifier('name')
          ->add('description')
          ->add('checkType')
          ->add('mandatory')
        ;
    }
}
