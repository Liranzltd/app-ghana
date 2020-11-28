<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class BuyerMembershipAdmin extends AbstractAdmin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
          //->remove('create')
         ->remove('delete')
         ->remove('export');
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('member.firstName')
          ->add('member.surname')
          ->add('member.gender')
          ->add('member.email')
          ->add('member.mobile')
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('member')
          ->add('isAdmin');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->addIdentifier('member.firstName')
          ->add('member.surname')
          ->add('member.gender')
          ->add('member.email')
          ->add('member.mobile')
          ->add('member.user.enabled','boolean',['editable' => true, 'label' => 'Activated']);
    }
}

 ?>
