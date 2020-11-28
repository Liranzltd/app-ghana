<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class ContentCategoryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('name')
            ->add('parent')
            ->add('file','file',['required' => false, 'data_class' => null, 'help' => $this->id($this->getSubject()) ? '<a href="/bundles/app/images/bgh/'.$this->getSubject()->getBanner().'" target="_blank">View File</a>' : ''])
            ->add('description','textarea');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name')
        ->add('parent');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name')
        ->add('parent')
        ->add('description');
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

 ?>
