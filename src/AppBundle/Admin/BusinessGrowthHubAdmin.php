<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class BusinessGrowthHubAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('title')
          ->add('contentType','choice',['choices' => ['Audio' => 'Audio', 'Video' => 'Video', 'Text' => 'Text', 'eBook' => 'eBook']])
          ->add('summary', CKEditorType::class, array(
                'config_name' => 'my_config',
                'config'      => array('uiColor' => '#ffffff'),
            ))
          ->add('content', CKEditorType::class, array('required' => false,
                'config_name' => 'my_config',
                'config'      => array('uiColor' => '#ffffff'),
            ))
          ->add('author',null,['label' => 'Author or Speaker'])
          ->add('isPublished')
          ->add('isPremiumContent')
          ->add('file','file',['required' => false, 'data_class' => null, 'help' => $this->id($this->getSubject()) ? '<a href="/uploads/ujuzihub/'.$this->getSubject()->getFilename().'" target="_blank">View File</a>' : ''])
          ->add('externalLink')
          ->add('categories',null,['expanded' => true, 'multiple' => true]);
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('title')
          ->add('createdAt')
          ->add('isPublished')
          ->add('categories')
          ->add('isPremiumContent')
          ->add('contentType')
          ->add('externalLink');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('categories')
            ->add('contentType')
            ->add('isPublished','boolean',['editable' => true ])
            ->add('isPremiumContent')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    public function prePersist($ujuzi)
    {
        $this->manageFileUpload($ujuzi);
    }

    public function preUpdate($ujuzi)
    {
        $this->manageFileUpload($ujuzi);
    }

    private function manageFileUpload($ujuzi)
    {
        $ujuzi->updateSlug();
        if ($ujuzi->getFile()) {
            $ujuzi->refreshUpdated();
        }
    }
}
