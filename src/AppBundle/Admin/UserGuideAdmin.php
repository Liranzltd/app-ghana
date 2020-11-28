<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class UserGuideAdmin extends Admin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
          // ->remove('create')
         ->remove('delete')
         ->remove('export');
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('description')
            ->add('contentType','choice',['choices' => ['Video' => 'Video', 'Text' => 'Text']])
            ->add('description', CKEditorType::class, array(
                  'config_name' => 'my_config',
                  'config'      => array('uiColor' => '#ffffff'),
              ))
            ->add('media')
            ->add('position')
            ->add('topic')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('title')
          ->add('description')
          ->add('media')
          ->add('position')
          ->add('topic');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('description')
            ->add('media')
            ->add('position')
            ->add('topic')
        ;
    }
}
