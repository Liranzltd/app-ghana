<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class RequestAdmin extends Admin
{
  protected $datagridValues = [

       // display the first page (default = 1)
       '_page' => 1,

       // reverse order (default = 'ASC')
       '_sort_order' => 'DESC',

       // name of the ordered field (default = the model's id field, if any)
       '_sort_by' => 'createdAt',
   ];
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
            ->add('name')
            ->add('buyer')
            ->add('deadline','sonata_type_datetime_picker')
            ->add('summary', CKEditorType::class, array(
                  'config_name' => 'my_config',
                  'config'      => array('uiColor' => '#ffffff'),
              ))
            ->add('description', CKEditorType::class, array(
                  'config_name' => 'my_config',
                  'config'      => array('uiColor' => '#ffffff'),
              ))
            ->add('tenderSource','choice',['choices' => ['APP Buyer'  => 'APP Buyer', 'Public Tender' => 'Public Tender']])
            ->add('publicUrl')
            ->add('publishDate','sonata_type_datetime_picker')
            ->add('requestType')
            ->add('status')
            ->add('isPublished')
            ->add('tags')
            ->add('documents', 'sonata_type_collection', array('by_reference' => false,'disabled' => false,
                'type_options' => array(
                    // Prevents the "Delete" option from being displayed
                    'delete' => false,
                    'btn_add' => false
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
          ->add('buyer')
          ->add('deadline')
          ->add('publicUrl')
          ->add('publishDate')
          ->add('responsesTotal')
          ->add('requestType')
          ->add('tags')
          ->add('status','doctrine_orm_choice',[],'choice',['choices' => ['Draft' => 'Draft', 'Closed' => 'Closed', 'Awarded' => 'Awarded', 'Cancelled' => 'Cancelled', 'Evaluating' => 'Evaluating']])
          ->add('isPublished');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('buyer.name')
            ->add('summary',"html")
            ->add('deadline')
            ->add('status')
            ->add('publicUrl')
            ->add('publishDate')
            ->add('responsesTotal')
            ->add('requestType')
            ->add('tags')
            ->add('isPublished','boolean',['editable' => true])
        ;
    }
}
