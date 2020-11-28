<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class BuyerAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('name',null,['disabled' => false,])
          ->add('companyType')
          ->add('numberOfBranches',null,['disabled' => false,])
          ->add('buyerType','choice',['choices' => ['Premium' => 'Premium', 'Ordinary' => 'Ordinary']])
          ->add('sector',null,['disabled' => false,'required' => true])
          ->add('description','textarea',['required' => true])
          ->add('contactPerson',null,['disabled' => false,'required' => true])
          ->add('designation',null,['disabled' => false,'required' => true])
          ->add('officePhone',null,['disabled' => false,'required' => true])
          ->add('mobile',null,['disabled' => false,'required' => true])
          ->add('officialEmailAddress',null,['disabled' => false,'required' => true])
          ->add('gender','choice',['disabled' => false,'required' => true, 'choices' => ['Female' => 'Female', 'Male' => 'Male']])
          ->add('address',null,['disabled' => false,])
          ->add('city',null,['disabled' => false,])
          ->add('country',null,['disabled' => false,])
          ->add('website','url',['required' => true])
          ->add('eProcurementSystem',null,['disabled' => false,])
          ->add('noOfAppUsers',null,['disabled' => false,])
          ->add('showOnWebsite',null,['disabled' => false,])
          ->add('file','file',['required' => false, 'data_class' => null, 'help' => $this->id($this->getSubject()) ? '<a href="/uploads/documents/'.$this->getSubject()->getName().'/'.$this->getSubject()->getLogo().'" target="_blank">View Logo</a>' : ''])
          ->add('teamMembers', 'sonata_type_collection', array('by_reference' => false,'disabled' => false,
              'type_options' => array(
                  // Prevents the "Delete" option from being displayed
                  'delete' => false,
                  'btn_add' => false
              )
          ), array(
              'edit' => 'inline',
              'inline' => 'table',
          ))
          //->add('counties',null,['disabled' => true,'expanded' => true])
          ;

    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('name')
          ->add('natureOfBusiness')
          ->add('numberOfBranches')
          ->add('buyerType')
          ->add('sector')
          ->add('contactPerson')
          ->add('eProcurementSystem')
          ->add('showOnWebsite');
    }
    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
          ->addIdentifier('name')
          ->add('natureOfBusiness')
          ->add('buyerType')
          ->add('sector')
          ->add('contactPerson')
          ->add('designation')
          ->add('officePhone')
          ->add('mobile')
          ->add('officialEmailAddress')
          ->add('eProcurementSystem')
          ->add('noOfAppUsers')
          ->add('showOnWebsite','boolean',['editable' => true]);
    }

    public function prePersist($buyer)
    {
        $this->manageFileUpload($buyer);
    }

    public function preUpdate($buyer)
    {
        $this->manageFileUpload($buyer);
    }

    private function manageFileUpload($buyer)
    {
        if ($buyer->getFile()) {
            $buyer->refreshUpdated();

        }
    }
}
