<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class CompanySubscriptionAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('subscriptionDate','sonata_type_datetime_picker')
          ->add('expiryDate','sonata_type_datetime_picker')
          ->add('isActive')
          ;
      }
      // Fields to be shown on filter forms
      protected function configureDatagridFilters(DatagridMapper $datagridMapper)
      {
          $datagridMapper
            ->add('subscriptionDate', 'doctrine_orm_date_range', array('label' => 'APP Registration Date',
                  'field_type' => 'sonata_type_date_range_picker',
                  'field_options' => array(
                  'field_options_start' => array(
                      'format'=>'dd/MM/yyyy'
                  ),
                  'field_options_end' => array(
                      'dp_use_current' => true,
                      'dp_show_today' => true,
                      'format'=>'dd/MM/yyyy'
                  )
              )
              ))
            ->add('expiryDate', 'doctrine_orm_date_range', array('label' => 'APP Registration Date',
                  'field_type' => 'sonata_type_date_range_picker',
                  'field_options' => array(
                  'field_options_start' => array(
                      'format'=>'dd/MM/yyyy'
                  ),
                  'field_options_end' => array(
                      'dp_use_current' => true,
                      'dp_show_today' => true,
                      'format'=>'dd/MM/yyyy'
                  )
              )
              ))
            ->add('isActive');
      }

      // Fields to be shown on lists
      protected function configureListFields(ListMapper $listMapper)
      {
          $listMapper
            ->add('subscriptionDate')
            ->add('expiryDate')
            ->add('isActive','boolean',['editable' => true]);
      }
}
