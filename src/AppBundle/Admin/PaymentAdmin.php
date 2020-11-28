<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Company;

class PaymentAdmin extends AbstractAdmin
{
      protected $datagridValues = array(

        // display the first page (default = 1)
        '_page' => 1,

        // reverse order (default = 'ASC')
        '_sort_order' => 'DESC',

        // name of the ordered field (default = the model's id field, if any)
        '_sort_by' => 'createdAt',
    );
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection
        ->remove('edit');
    }
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('mode')
        ->add('paymentReference')
        ->add('amount')
        ->add('transactionTime','sonata_type_datetime_picker', array('format'=>'dd/MM/yyyy HH:mm', 'dp_min_date' => 'now', 'dp_use_seconds' => false,'dp_side_by_side' => false,'dp_use_current' => true))
        ->add('remarks')
        ->add('status')
        ->add('company', EntityType::class, ['class' => Company::class, 'choice_label' => function ($company) { return $company->getName().' - '.$company->getPaymentReference(); }]);
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('mode')
        ->add('paymentReference')
        ->add('amount')
        ->add('transactionTime', 'doctrine_orm_date_range', array('label' => 'APP Registration Date',
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
        ->add('remarks')
        ->add('status')
        ->add('company')
        ->add('company.promoCode');
    }

    protected function configureListFields(ListMapper $listMapper)
    {

        $em = $this->modelManager->getEntityManager('AppBundle:Payment');
        //$companies = $em->getRepository('AppBundle:Company')->findBy(['isFullyPaidUp' => 0]);
        $companies = $em->getRepository('AppBundle:Company')->findAll();
        $this->data = $companies;
        $listMapper
          ->add('paymentReference')
          ->add('mode')
          ->add('amount')
          ->add('transactionTime')
          ->add('remarks')
          ->add('status',null,['template' => 'AppBundle:Payment:status.html.twig'])
          ->add('company.name',null,['label' => 'Company Name'])
          ->add('company.promoCode.code',null,['label' => 'Promo Code'])
          ->add('_action', null, [
            'actions' => [
                'delete' => [],
            ]
        ]);
    }

    public function getExportFields()
    {
        return array('Payment Reference' => 'paymentReference','Company' => 'company.name','Payment Mode' => 'mode','Amount' => 'amount','Transaction Time' => 'transactionTime','Promo Code' => 'Promo Code', 'Receipt Date' => 'createdAt','Status' => 'status', 'Remarks' => 'remarks'
            );
    }
}

 ?>
