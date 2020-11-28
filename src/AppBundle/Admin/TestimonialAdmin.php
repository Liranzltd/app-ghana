<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class TestimonialAdmin extends Admin
{
      protected $datagridValues = array(

        // display the first page (default = 1)
        '_page' => 1,

        // reverse order (default = 'ASC')
        '_sort_order' => 'DESC',

        // name of the ordered field (default = the model's id field, if any)
        '_sort_by' => 'createdAt',
    );
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('company')
          ->add('testimony')
          ->add('attribution')
          ->add('isPublished')
          ->add('file','file',['required' => false, 'data_class' => null]);
    }
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->addIdentifier('attribution')
          ->add('company.name')
          ->add('testimony')
          ->add('isPublished','boolean',['editable' => true])
          ;
    }
}
