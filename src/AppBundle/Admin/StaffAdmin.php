<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class StaffAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('firstname',null,['label' => 'First name'])
            ->add('lastname',null,['label' => 'Last name'])
            ->add('designation')
            ->add('mobile')
            ->add('email')
            ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('firstname')
          ->add('lastname')
          ->add('email')
          ->add('mobile');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->add('firstname',null,['label' => 'First name'])
          ->add('lastname',null,['label' => 'Last name'])
          ->add('designation')
          ->add('mobile')
          ->add('email')
          ->add('user.enabled','boolean',['editable' => true])
          ->add('_action', null, array(
              'actions' => array(
                  'edit' => array()
              )
          ));
    }
}

?>
