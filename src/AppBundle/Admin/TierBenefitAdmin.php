<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class TierBenefitAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('title')
          ;
      }
      // Fields to be shown on filter forms
      protected function configureDatagridFilters(DatagridMapper $datagridMapper)
      {
          $datagridMapper
          ->add('title');
      }

      // Fields to be shown on lists
      protected function configureListFields(ListMapper $listMapper)
      {
          $listMapper
              ->addIdentifier('title');
      }
}
