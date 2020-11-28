<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CompanyVerificationAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
      $disabled = '';
      if($this->id($this->getSubject()) && $this->getSubject()->getVerificationStep()->getCheckType() != 'Manual')
      {
        $disabled = 'disabled';
      }
        $formMapper
          ->add('verificationStep',null,['attr' => ['class' => 'hidden '.$disabled], 'label' => $this->id($this->getSubject()) ? $this->getSubject()->getVerificationStep()->getStage().': '.$this->getSubject()->getVerificationStep() : 'Step']);
          // if($this->id($this->getSubject()) && $this->getSubject()->getVerificationStep()->getCheckType() != 'Manual')
          // {
          //   $formMapper->add('status','choice',['disabled' => 'disabled','choices' => ['Not Started' => 'Not Started', 'In progress' => 'In progress', 'Done' => 'Done'], 'expanded' => true]);
          //   $formMapper->add('approvalStatus','choice',['disabled' => 'disabled','choices' => ['Approved' => 'Approved', 'Deferred' => 'Deferred', 'Declined' => 'Declined'], 'expanded' => true])
          //   ->add('remarks','textarea',['disabled' => 'disabled'])
          //   ->add('verificationDate','text', array('disabled' => 'disabled'));
          // }
          // else {
            $formMapper->add('status','choice',['disabled' => $disabled,'choices' => ['Not Started' => 'Not Started', 'In progress' => 'In progress', 'Done' => 'Done'], 'expanded' => true])
            ->add('approvalStatus','choice',['disabled' => $disabled,'choices' => ['Approved' => 'Approved', 'Deferred' => 'Deferred', 'Declined' => 'Declined'], 'expanded' => true, 'attr' => ['class' => $disabled]]);

            if($this->id($this->getSubject()) && $this->getSubject()->getVerificationStep()->getId() == 22)
            {
              $formMapper->add('remarks','textarea',['help' => $this->getSubject()->getCompany()->getCrbChecked() == true ? '<a href="" class="crb" data-id="'.$this->getSubject()->getCompany()->getId().'">View Full Report</a>' : '']);
            }
            else
            {
              $formMapper->add('remarks','textarea');
            }

            $formMapper->add('verificationDate','sonata_type_datetime_picker', array('format'=>'dd/MM/yyyy HH:mm', 'dp_min_date' => 'now', 'dp_use_seconds' => false,'dp_side_by_side' => false,'dp_use_current' => true, 'attr' => ['class' => $disabled]));
          // }
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
          ->add('verificationStep')
          ->add('status')
          ->add('approvalStatus')
          ->add('company');
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('verificationDate')
            ->add('verificationDate')
            ->add('approvalStatus')
            ->add('company')
        ;
    }
}
