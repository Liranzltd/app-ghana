<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class VerificationStageAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->with('Stage Information')
            ->add('name')
            ->add('description')
          ->end()
          ->with('Steps')
            ->add('steps', 'sonata_type_collection', array('by_reference' => false,
                'type_options' => array(
                    // Prevents the "Delete" option from being displayed
                    // 'delete' => false,
                    // 'btn_add' => false
                )
            ), array(
                'edit' => 'inline',
                'inline' => 'table',
            ))
          ->end()
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('name')
          ->add('description');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('description')
            ->add('steps')
        ;
    }
}
