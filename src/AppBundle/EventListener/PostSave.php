<?php
namespace AppBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
//use Doctrine\ORM\Event\OnClearEventArgs;
use AppBundle\Entity\Payment;
use Symfony\Component\DependencyInjection\Container;
use Doctrine\Common\EventSubscriber;
use AppBundle\Entity\Member;
use AppBundle\Entity\Company;
use AppBundle\Entity\Staff;
use AppBundle\Entity\CompanyAddress;
use AppBundle\Entity\CompanyVerification;
use AppBundle\Entity\VerificationStage;
use AppBundle\Entity\VerificationStep;
use AppBundle\Utils;
use AppBundle\Entity\CrbCheck;
use AppBundle\Entity\Request;
use AppBundle\Entity\Buyer;
use AppBundle\Entity\CompanyRequest;

class PostSave implements EventSubscriber
{
  private $container;

  public function __construct(Container $container)
  {
    $this->container = $container;
  }
  public function getSubscribedEvents()
  {
      return array(
          'postPersist',
          'postUpdate',
          'preRemove',
      );
  }

  public function postPersist(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();
    $em = $args->getObjectManager();

    if($entity instanceOf CompanyAddress)
    {
      //$this->generateInvoice($args);
    }
    if($entity instanceOf Staff)
    {
      $user_service = $this->container->get('app.user');
      $user_service->createStaff($args);
    }
    if($entity instanceOf VerificationStep)
    {
      $companyService = $this->container->get('app.company.service');
      $companyService->addVerificationElements($em,$entity);
    }

    if($entity instanceOf Request)
    {
      $companyService = $this->container->get('app.company.service');
      if($entity->getStatus() == 'Published')
      {
        $companyService->createRequestNotifications($em,$entity,'African Partner Pool - New Tender','A new tender has been added on the African Partner Pool.');
      }
    }

    if($entity instanceOf CompanyRequest)
    {
      $companyService = $this->container->get('app.company.service');
      $companyService->createCompanyRequestNotifications($em,$entity);
    }

    if($entity instanceOf Buyer)
    {
      $userService = $this->container->get('app.user');
      if($entity->getContactPerson() != null)
      {
        $names = explode(" ", $entity->getContactPerson());
        $userService->createBuyerNotifications($em,$names[0],$names[1],$entity->getOfficialEmailAddress(),$entity->getGender(),$entity->getMobile(),$entity->getOfficePhone(),$entity,true);
      }
    }

    if($entity instanceOf Payment)
    {
      $token_storage = $this->container->get('security.token_storage');
      $companyService = $this->container->get('app.company.service');
      if($token_storage->getToken())
      {
        $staff = $em->getRepository('AppBundle:Staff')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
        if($staff)
        {
          $entity->setRecordedBy($staff);
          $em->persist($entity);
          $em->flush();
        }
      }
      $companyService->markPayment($em,$entity->getCompany(),$entity,$entity->getAmount(),$entity->getCompany()->getTier()->getSubscriptionFee());
    }
  }


  public function generateInvoice($args)
  {
    $company = $args->getObject();

    $invoice = $this->container->get('app.print_service');
    $notification = $this->container->get('app.notifications');
    $em = $args->getObjectManager();
    $address = $company->getAddresses();
    if($company->getIsFullyPaidUp() == false && $company->getIsInvoiced() == false)
    {
      $invoice->generatePDF('email/invoice.html.twig',$this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/invoice-'.$company->getPaymentReference().'.pdf',['company' => $company, 'address' => $address, 'supplier_registration' => $company->getTier()->getSubscriptionFee() ]);
      $title = 'Invoice for subscription '.$company->getName();

      $companyService = $this->container->get('app.company.service');
      $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(1);
      $now = new \DateTime();
      $id = $companyService->addDocument($em,$company,$doc_type,'invoice-'.$company->getPaymentReference().'.pdf','Invoice #'.$company->getPaymentReference(),'APP Ghana',$now->format('d/m/Y'),'',null);

      $notification->createCompanyNotification($company,'Thank you showing interest in being an APP Supplier <strong>'.$company->getName().'</strong>. Kindly make the payment via MTN Mobile Money number <strong>0553853991</strong>. Alternatively, download the invoice for more payment options. <br/><a href="/portal/downloadfile/'.$id.'">Download Invoice</a>','Invoice for '.$company->getName().' APP Subscription');
      $company->setIsInvoiced(true);
      $company->setAmountDue($company->getTier()->getSubscriptionFee());
      $em->persist($company);
      $em->flush();
    }
  }

  public function postUpdate(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();
    $em = $args->getObjectManager();

    if($entity instanceOf Company)
    {
      $this->generateInvoice($args);
      if($entity->getIsReceipted() && $entity->readyForValidation() && !$entity->getIsOnSourceDogg())
      {
        $companyService = $this->container->get('app.company.service');
        //$companyService->pushToApis($args->getObjectManager(),$entity);
      }
    }
    if($entity instanceOf Staff)
    {
      $user_service = $this->container->get('app.user');
      $user_service->createStaff($args);
    }
    if($entity instanceOf CompanyVerification)
    {
      $companyService = $this->container->get('app.company.service');
      $companyService->checkVerification($args->getObjectManager(),$entity);
    }

    if($entity instanceOf CompanyRequest)
    {
      $companyService = $this->container->get('app.company.service');
      $companyService->createCompanyRequestNotifications($em,$entity);
    }

    if($entity instanceOf Buyer)
    {
      $userService = $this->container->get('app.user');
      if($entity->getContactPerson() != null)
      {
        $names = explode(" ", $entity->getContactPerson());
        $userService->createBuyerNotifications($em,$names[0],$names[1],$entity->getOfficialEmailAddress(),$entity->getGender(),$entity->getMobile(),$entity->getOfficePhone(),$entity,true);
      }
    }
  }

  public function preUpdate(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();
    $em = $args->getObjectManager();
    if($entity instanceOf CompanyVerification)
    {
      $token_storage = $this->container->get('security.token_storage');
      if($token_storage->getToken())
      {
        $staff = $em->getRepository('AppBundle:Staff')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
        if($staff)
        {
          $entity->setVerifiedBy($staff);
        }
      }
    }
    if($entity instanceOf Request)
    {
      // if(array_key_exists('isPublished', $args->getObjectManager()->getUnitOfWork()->getEntityChangeSet($entity)))
      // {
      //   $vals = $args->getObjectManager()->getUnitOfWork()->getEntityChangeSet($entity);
      //   if($vals['status'][0] != 'Published' && $vals['status'][1] == 'Published')
      //   {
      //     $companyService = $this->container->get('app.company.service');
      //     $companyService->createRequestNotifications($em,$entity,'African Partner Pool - New '.$entity->getRequestType(),'A new buyer request has been added on the African Partner Pool.');
      //   }
      //   if($vals['status'][0] == 'Published' && $vals['status'][1] == 'Closed')
      //   {
      //     $companyService = $this->container->get('app.company.service');
      //     $companyService->createRequestNotifications($em,$entity,'African Partner Pool - '.$entity->getRequestType().' Expiry','The request below has expired on the African Partner Pool.');
      //   }
      // }
    }
  }

  /** @PreRemove */
  public function preRemove(LifecycleEventArgs $args)
  {
    $entity = $args->getObject();
    $em = $args->getObjectManager();
    if($entity instanceOf Payment)
    {
      $company = $entity->getCompany();
      $company->setIsFullyPaidUp(false);
      $company->setIsReceipted(false);
      $em->persist($company);
      $subscription = $em->getRepository('AppBundle:CompanySubscription')->findOneBy(['subscriptionDate' => $company->getSubscriptionDate()]);
      if($subscription) $em->remove($subscription);
    }
  }
}
