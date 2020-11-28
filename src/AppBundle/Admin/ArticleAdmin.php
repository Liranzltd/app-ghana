<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin as Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class ArticleAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
          ->add('title')
          ->add('contentType','choice',['choices' => ['News' => 'News', 'Case Study' => 'Case Study']])
          ->add('summary', CKEditorType::class, array(
                'config_name' => 'my_config',
                'config'      => array('uiColor' => '#ffffff'),
            ))
          ->add('content', CKEditorType::class, array('required' => false,
                'config_name' => 'my_config',
                'config'      => array('uiColor' => '#ffffff'),
            ))
          ->add('author',null,['label' => 'Author or Speaker'])
          ->add('publishDate','sonata_type_datetime_picker')
          ->add('isPublished')
          ->add('media_type','choice',array('choices'=>array('None' => 'None','Video' => 'Video', 'Photo' => 'Photo')))
          ->add('media','text',array('required' => false, 'attr' => array('class' => 'story_image'),'help'=>'<div id="cropContainerModal"></div>'))
          ->add('caption','text',['required' => false])
          ->add('externalLink')
          ->add('categories',null,['expanded' => true, 'multiple' => true]);
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('title')
          ->add('publishDate')
          ->add('isPublished')
          ->add('createdAt')
          ->add('contentType');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('publishDate')
            ->add('contentType')
            ->add('isPublished')
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}
