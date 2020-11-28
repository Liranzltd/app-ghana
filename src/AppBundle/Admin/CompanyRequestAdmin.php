<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Sonata\AdminBundle\Route\RouteCollection;

class CompanyRequestAdmin extends Admin
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
          //->remove('create')
         ->remove('delete')
         ->remove('export');
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
      $formMapper
        ->add('request',null,['disabled' => true])
        ->add('company.name',null,['label' => 'Supplier','disabled' => true])
        ->add('invitationDate',null,['disabled' => true])
        ->add('responseDate',null,['disabled' => true])
        ->add('status',null,['disabled' => true])
        ->add('supplierRemarks','textarea',['disabled' => true])
        ->add('buyerRemarks','textarea',['required' => false])
        ->add('score','textarea',['required' => false])
        ->add('status','choice',['choices' => ['Awarded' => 'Awarded', 'Unsuccessful' => 'Unsuccessful', 'Disqualified' => 'Disqualified']])
      ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('request')
          ->add('company')
          ->add('invitationDate', 'doctrine_orm_date_range', array('label' => 'Company Registration Date',
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
          ->add('responseDate', 'doctrine_orm_date_range', array('label' => 'Company Registration Date',
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
          ->add('status')
          ->add('request.buyer',null,['label' => 'Buyer'])
          ->add('buyerRemarks')
          ->add('supplierRemarks');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('request')
            ->add('request.buyer',null,['label' => 'Buyer'])
            ->add('company.name',null,['label' => 'Supplier'])
            ->add('invitationDate')
            ->add('responseDate')
            ->add('status')
            ->add('buyerRemarks')
            ->add('supplierRemarks',"html")
            ->add('documents',null,['template' => 'AppBundle:CompanyRequest:link.html.twig'])
            ->add('score')
            ->add('rating')
            ;
    }
}
