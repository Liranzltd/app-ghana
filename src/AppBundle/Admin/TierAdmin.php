<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class TierAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('name')
          ->add('description')
          ->add('membershipCategory','choice',['choices' => ['Local Suppliers' => 'Local Suppliers', 'International Suppliers' => 'International Suppliers']])
          ->add('subscriptionFee')
          ->add('benefits', 'sonata_type_collection', array('by_reference' => false,
              'type_options' => array(
                  // Prevents the "Delete" option from being displayed
                  // 'delete' => false,
                  // 'btn_add' => false
              )
          ), array(
              'edit' => 'inline',
              'inline' => 'table',
          ))
          ;
      }
      // Fields to be shown on filter forms
      protected function configureDatagridFilters(DatagridMapper $datagridMapper)
      {
          $datagridMapper
            ->add('name')
            ->add('subscriptionFee');
      }

      // Fields to be shown on lists
      protected function configureListFields(ListMapper $listMapper)
      {
          $listMapper
              ->addIdentifier('name')
              ->add('description')
              ->add('membershipCategory')
              ->add('subscriptionFee');
      }
}
