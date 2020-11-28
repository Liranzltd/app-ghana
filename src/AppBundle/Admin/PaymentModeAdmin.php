<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class PaymentModeAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('name')
          ->add('description')
          ->add('instructions', CKEditorType::class, array(
                'config_name' => 'my_config',
                'config'      => array('uiColor' => '#ffffff'),
            ))
          ;
      }

      // Fields to be shown on filter forms
      protected function configureDatagridFilters(DatagridMapper $datagridMapper)
      {
          $datagridMapper
            ->add('name')
            ->add('description')
            ->add('instructions')
            ;
      }

      // Fields to be shown on lists
      protected function configureListFields(ListMapper $listMapper)
      {
          $listMapper
              ->addIdentifier('name')
              ->add('description')
              ->add('instructions','html')
              ;
      }
}
