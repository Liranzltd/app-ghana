<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CaseAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->with('Case Information')
            ->add('receiptMode','choice',['choices' => ['Phone' => 'Phone', 'Email' => 'Email', 'Meeting' => 'Meeting']])
            ->add('status','choice',['choices' => ['New' => 'New', 'Escalated' => 'Escalated', 'Closed' => 'Closed']])
            ->add('details','textarea')
            ->add('company')
          ->end()
          ->with('Journal')
            ->add('journals', 'sonata_type_collection', array('by_reference' => false,'disabled' => true,
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
          ->add('receiptMode')
          ->add('status')
          ->add('details');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('receiptMode')
            ->add('status')
            ->add('details')
            ->add('createdAt')
        ;
    }
}
