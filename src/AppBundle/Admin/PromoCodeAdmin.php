<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class PromoCodeAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('code')
        ->add('amountOff')
        ->add('isPercentage')
        ->add('expiryDate','sonata_type_datetime_picker', array('format'=>'dd/MM/yyyy HH:mm', 'dp_min_date' => 'now', 'dp_use_seconds' => false,'dp_side_by_side' => false,'dp_use_current' => true));
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('code')
        ->add('amountOff')
        ->add('isPercentage')
        ->add('expiryDate');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->addIdentifier('code')
          ->add('amountOff')
          ->add('isPercentage')
          ->add('expiryDate');
    }
}

 ?>
