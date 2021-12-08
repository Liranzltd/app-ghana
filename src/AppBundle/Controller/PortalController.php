<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Member;
use AppBundle\Entity\Company;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use AppBundle\Utils;
use AppBundle\Entity\Payment;
use AppBundle\Entity\BuyerSupplierPool;
use AppBundle\Entity\CompanyMembership;
use AppBundle\Entity\RequestDocument;
use AppBundle\Entity\Request as BuyerRequest;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use AppBundle\Entity\RequestUpdate;
use AppBundle\Entity\CompanyRequest;
use AppBundle\Entity\CompanyReference;
use AppBundle\Entity\CompanyRequestDocument;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * @Route("/portal")
 */
class PortalController extends Controller
{
  /**
   * @Route("/", name="portal")
   */
  public function portalAction()
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
    $em = $this->container->get('doctrine')->getManager();
    $member = $member =$this->getMember();;
    $companies = $member->getCompanies();
   
    if(count($companies) > 0)
    {
      $needs_payment = false;
      foreach($companies as $company)
      {
        if(!$company->getIsFullyPaidUp())
        {
          $needs_payment = true;
        }
      }
      if($needs_payment)
      {
        if(count($companies) == 1)
        {
          return $this->redirectToRoute('payment');
        }
        else {
          $q = $em->createQueryBuilder();
          // $q->select('q')->from('AppBundle:Request','q')->where('q.isPublished = 1')->andWhere('q.deadline > :now')->andWhere('q.isPublic = 1');
          // $q->setParameter('now', new \DateTime());

          /**Added by David Ajowi 8-10-19 **/
          $tier_id = 0;
          foreach($companies as $company)
          {
           if($company->getCurrentSubscriptionStatus() == 'Active'){
              $tier_id = $company->getTier()->getId();
            }
          }
          /**END Addition**/

          $q->select('q')->from('AppBundle:Request','q')->where("q.status <> 'Draft'");
          $requests = $q->getQuery()->getResult();
          return $this->render('portal/dashboard.html.twig', ['member' => $member, 'requests' => $requests, 'tier_id' => $tier_id]);
        }
      }
      else
      {
        $q = $em->createQueryBuilder();
        // $q->select('q')->from('AppBundle:Request','q')->where('q.isPublished = 1')->andWhere('q.deadline > :now')->andWhere('q.isPublic = 1');
        // $q->setParameter('now', new \DateTime());

        /**Added by David Ajowi 8-10-19 **/
         $tier_id = 0;
          foreach($companies as $company)
          {
           if($company->getCurrentSubscriptionStatus() == 'Active'){
              $tier_id = $company->getTier();
            }
          }

        /**END Addition**/
        $q->select('q')->from('AppBundle:Request','q')->where('q.isPublished = 1');
        $requests = $q->getQuery()->getResult();
        return $this->render('portal/dashboard.html.twig', ['member' => $member, 'requests' => $requests, 'tier_id' => $tier_id]);
      }
    }
    else {
      $bm = $em->getRepository('AppBundle:BuyerMembership')->findOneBy(['member' => $member]);
      if($bm)
      {
        return $this->redirectToRoute('buyer-dashboard',['slug' => $bm->getBuyer()->getSlug()]);
      }
      else {
        return $this->redirectToRoute('get-started');
      }
    }
  }

    /**
     * @Route("/dev/test", name="/dev/our-dev")
     */
    public function ourDevAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('portal/dev-test.html.twig');
    }

  /**
   * @Route("/buyer/{slug}", name="buyer-dashboard", methods={"GET"})
   */
  public function buyerDashboardAction($slug)
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
    $em = $this->container->get('doctrine')->getManager();
    $buyer = $em->getRepository('AppBundle:Buyer')->findOneBy(['slug' => $slug]);
    //$suppliers = $em->getRepository('AppBundle:Company')->findOneBy(['status' => 'Verified']);
    $suppliers = $em->getRepository('AppBundle:Company')->findBy(['currentSubscriptionStatus' => 'Active']);
    return $this->render('portal/buyer-dashboard.html.twig', ['buyer' => $buyer, 'suppliers' => count($suppliers)]);
  }

  public function buyerDashboardMenuAction()
  {
    $em = $this->container->get('doctrine')->getManager();
    $token_storage = $this->container->get('security.token_storage');
    $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
    $bm = $em->getRepository('AppBundle:BuyerMembership')->findOneBy(['member' => $member]);
    return $this->render('portal/buyer-dashboard-menu.html.twig', ['slug' => $bm->getBuyer()->getSlug()]);
  }

  /**
   * @Route("/buyer/{slug}/requests", name="buyer-dashboard-requests", requirements={"status"="\w+"})
   */
  public function buyerRequestsAction($slug,$status = null)
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
    $em = $this->container->get('doctrine')->getManager();
    $buyer = $em->getRepository('AppBundle:Buyer')->findOneBy(['slug' => $slug]);
    $params = ['buyer' => $buyer];
    // if($status)
    // {
    //   array_push($params,['status' => $status]);
    // }
    $requests = $em->getRepository('AppBundle:Request')->findBy(['buyer' => $buyer],["createdAt" => "DESC"]);
    return $this->render('portal/buyer-requests.html.twig', ['buyer' => $buyer, 'requests' => $requests]);
  }

  /**
   * @Route("/buyer/{slug}/new-request", name="buyer-new-request")
   */
  public function buyerNewRequestAction($slug)
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
    $em = $this->container->get('doctrine')->getManager();
    $buyer = $em->getRepository('AppBundle:Buyer')->findOneBy(['slug' => $slug]);
    $sectors = $em->getRepository('AppBundle:Category')->findAll();
    $requestType = $em->getRepository('AppBundle:RequestType')->findAll();
    $suppliers = $em->getRepository('AppBundle:Company')->findOneBy(['status' => 'Verified']);
    return $this->render('portal/buyer-new-request.html.twig', ['buyer' => $buyer, 'sectors' =>$sectors, 'suppliers' => $suppliers, 'requestType' => $requestType]);
  }

  /**
   * @Route("/buyer/edit-request/{slug}", name="buyer-edit-request")
   */
  public function buyerEditRequestAction($slug)
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
    $em = $this->container->get('doctrine')->getManager();
    $request = $em->getRepository('AppBundle:Request')->findOneBy(['slug' => $slug]);
    $sectors = $em->getRepository('AppBundle:Category')->findAll();
    $requestType = $em->getRepository('AppBundle:RequestType')->findAll();
    $invited = [];

    if(count($request->getResponses()) > 0)
    {
      $responses = $request->getResponses();
      $invited = [];
      foreach ($responses as $response) {
        array_push($invited,$response->getCompany());
      }
    }

    $suppliers = $em->getRepository('AppBundle:Company')->findBy(['currentSubscriptionStatus' => 'Active']);


    return $this->render('portal/buyer-edit-request.html.twig', ['request' => $request, 'sectors' =>$sectors, 'suppliers' => $suppliers, 'requestType' => $requestType, 'invited' => $invited]);
  }

  /**
   * @Route("/buyer-actions/supplier-profile", name="supplier-profile")
   */
  public function supplierProfileAction(Request $request)
  {
    $em = $this->container->get('doctrine')->getManager();
    $supplier = $em->getRepository('AppBundle:Company')->find($request->query->get('id'));
    $buyer = $em->getRepository('AppBundle:Buyer')->find($request->query->get('buyer'));
    return $this->render('portal/supplier-profile.html.twig', ['supplier' => $supplier, 'buyer' => $buyer]);
  }

  public function checkPayment()
  {
    $member = $this->getMember();
    $companies = $member->getCompanies();

    if(count($companies) > 0)
    {
      $needs_payment = false;
      foreach($companies as $company)
      {
        if(!$company->getCurrentSubscriptionStatus() == 'Expired')
        {
          $needs_payment = true;
        }
      }
    }
    return $needs_payment;
  }

  /**
   * @Route("/buyer/fetch-info", name="fetch-info", methods={"POST"})
   */
  public function buyerFetchInfoRequestAction(Request $request)
  {
    $em = $this->container->get('doctrine')->getManager();
    $response = new JsonResponse();

    $items = [];
    $results['count'] = 0;
    $results['items'] = [];

    if($request->request->get('requestType') == 'suppliers')
    {
      $rq = $em->getRepository('AppBundle:Request')->find($request->request->get('id'));
      foreach($rq->getResponses() as $invite)
      {
        array_push($items,['id' => $invite->getId(), 'name' => $invite->getCompany()->getName(), 'invitationDate' => $invite->getInvitationDate() ? $invite->getInvitationDate()->format('d/m/Y H:i') : '', 'responseDate' => $invite->getResponseDate() ? $invite->getResponseDate()->format('d/m/Y H:i') : '', 'status' => $invite->getStatus()]);
      }
      $results['count'] = count($rq->getResponses());
      $results['items'] = $items;
    }
    if($request->request->get('requestType') == 'supplier')
    {
      $supplier = $em->getRepository('AppBundle:Company')->find($request->request->get('id'));
      $results['registrationDate'] = $supplier->getRegistrationDate()->format('d/m/Y');
      $results['sectors'] = $supplier->getSectorsArray();
      $results['description'] = $supplier->getDescription();
      $results['contacts'] = $supplier->getContactsArray();
    }
    $response->setData($results);
    return $response;
  }

  /**
   * @Route("/buyer-actions/publish-request-suppliers", name="publish-request")
   */
   public function buyerPublishRequestAction(Request $request)
   {
     $em = $this->container->get('doctrine')->getManager();
     $rq = $em->getRepository('AppBundle:Request')->find($request->query->get('request'));
     $rq->setIsPublished(true);
     $rq->setStatus('Published');
     $rq->setPublishDate(new \DateTime());
     $em->persist($rq);

     $token_storage = $this->container->get('security.token_storage');
     $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));

     $update = new RequestUpdate();
     $update->setStatus('Published');
     $update->setRemarks('Request updated by '.$member->getFirstName());
     $update->setActionDate(new \DateTime());
     $update->setRequest($rq);

     $em->persist($update);

     $companyService = $this->container->get('app.company.service');
     $companyService->createRequestNotifications($em,$rq,'African Partner Pool - New '.$rq->getRequestType(),'A new buyer request has been added on the African Partner Pool.');

     // $notification = $this->container->get('app.notifications');
     //
     // foreach($rq->getResponses() as $supplier)
     // {
     //   $company = $supplier->getCompany();
     //   $cr = $em->getRepository('AppBundle:CompanyRequest')->findOneBy(['request' => $rq, 'company' => $company]);
     //   $cr->setInvitationDate(new \DateTime());
     //   $em->persist($cr);
     //   $notification->sendEmail('request-notification.html.twig','African Partner Pool - New Tender',$company->getRegisteredBy()->getEmail(),$options = ['buyer' => $request->getBuyer(), 'name' => $request->getName(), 'description' => $request->getDescription(), 'deadline' => $request->getDeadline()->format('d/m/Y H:i')],$cc = []);
     //   $notification->sendSMS($number,$message);
     // }

     $em->flush();
     $response = new JsonResponse();
     $response->setData(['Request has been published']);
     return $response;
   }

  /**
   * @Route("/buyer-actions/fetch-request-suppliers", name="fetch-request-suppliers")
   */
  // public function buyerFetchRequestSuppliersAction(Request $request)
  // {
  //   $em = $this->container->get('doctrine')->getManager();
  //   $rq = $em->getRepository('AppBundle:Request')->find($request->request->get('request'));
  //   $suppliers = [];
  //   foreach($rq->getResponses() as $invite)
  //   {
  //     array_push($suppliers,['name' => $invite->getCompany()->getName(), 'natureOfBusiness' => $invite->getNatureOfBusiness(), 'companyType' => $invite->getCompanyType()]);
  //   }
  //   $response = new JsonResponse();
  //   $response->setData($suppliers);
  //   return $response;
  // }

  /**
   * @Route("/buyer-actions/deleteRequest", name="delete-request")
   */
   public function buyerDeleteRequestAction(Request $request)
   {
     $em = $this->container->get('doctrine')->getManager();
     $rq = $em->getRepository('AppBundle:Request')->find($request->query->get('request'));
     $em->remove($rq);
     $em->flush();
     $response = new JsonResponse();
     $response->setData(['Request have been deleted']);
     return $response;
   }

  /**
   * @Route("/buyer/save-request", name="save-request")
   */
   public function buyerSaveRequestAction(Request $request)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
      }
     $em = $this->container->get('doctrine')->getManager();


     $token_storage = $this->container->get('security.token_storage');
     $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
     $status = $request->request->get('isPublished') == 'on' ?  'Published' : 'Draft';
     if($request->request->get('request') != null)
     {
       $rq = $em->getRepository('AppBundle:Request')->find($request->request->get('request'));
       $buyer = $rq->getBuyer();
       $update = new RequestUpdate();
       $update->setStatus($rq->getIsPublished() == false ? 'Draft' : 'Published');
       if($rq->getIsPublished() == false && $status == 'Published')
       {
         $rq->setPublishDate(new \DateTime());
       }
       $update->setRemarks('Request updated by '.$member->getFirstName());
       $update->setActionDate(new \DateTime());
       $update->setRequest($rq);
     }
     else
     {
       $buyer = $em->getRepository('AppBundle:Buyer')->find($request->request->get('buyer'));
       $rq = new BuyerRequest();
       $rq->setBuyer($buyer);
       $update = new RequestUpdate();
       $update->setStatus($status);
       $update->setActionDate(new \DateTime());
       $update->setRequest($rq);
       $update->setRemarks('Request created by '.$member->getFirstName());
       $bm = $em->getRepository('AppBundle:BuyerMembership')->findOneBy(['member' => $member]);
       $update->setMember($bm);
     }

     $rq->setName($request->request->get('name'));
     $rq->setIsPublic($request->request->get('isPublic') == 'on' ? true : false);
     $rq->setRequestType($em->getRepository('AppBundle:RequestType')->find($request->request->get('requestType')));
     $rq->setSummary($request->request->get('summary'));
     $rq->setDescription($request->request->get('description'));
     $rq->setSubmissionInstructions($request->request->get('submissionInstructions'));
     $deadline = \DateTime::createFromFormat('d/m/Y H:i',$request->request->get('deadline'));
     $rq->setDeadline($deadline);
     $rq->setIsPublished($status);
     $rq->setStatus($status);
     $em->persist($rq);
     $em->persist($update);
     // echo $status;
     // exit;

     $files = $request->files->all();
     $data = $request->request->all();

     foreach($request->request->get('sectors') as $sector)
     {
       if(!$rq->getTags()->contains($em->getRepository('AppBundle:Category')->findOneBy(['name' => $sector])))
       {
         $rq->addTag($em->getRepository('AppBundle:Category')->findOneBy(['name' => $sector]));
         $em->persist($rq);
       }
     }
    //  $rq->getTags()->forAll(function($key, $entity) {
    //    if(!in_array($entity->getName(),$data['sectors']))
    //     $em->remove($entity);
    //     return true;
    // });
     $em->flush();

     if(array_key_exists('docs',$data) && count($data['docs']['filename']) > 0 )
     {
       for($j=0;$j<count($data['docs']['filename']);$j++)
       {
         if($data['docs']['filename'][$j] != null && array_key_exists($j,$files['docs']['FileAttachment']))
         {
           $doc = $em->getRepository('AppBundle:RequestDocument')->findOneBy(['name' => $data['docs']['filename'][$j], 'request' => $rq]);
           if(!$doc)
           {
             $file = $files['docs']['FileAttachment'][$j];

             $ext = $file->guessExtension();
             $filename = uniqid().'.'.$ext;
             $file->move($this->container->getParameter ('requests_directory').'/'.$buyer->getName().'/'.$rq->getId(), $filename);
             $doc = new RequestDocument();
             $doc->setName($data['docs']['filename'][$j]);
             $doc->setRequest($rq);
             $doc->setExtension($ext);
             $doc->setUrl($filename);
             $em->persist($doc);
           }
         }
       }
     }
     $em->flush();

    return $this->redirectToRoute('buyer-edit-request',['slug' => $rq->getSlug()]);
   }

   /**
    * @Route("/supplier/respond/{slug}", name="respond-to-request")
    */
    public function supplierRequestRespondAction($slug)
    {
      $member = $this->getMember();
      if(Utils::checkPayment($member))
      {
        $em = $this->container->get('doctrine')->getManager();
        $request = $em->getRepository('AppBundle:Request')->findOneBy(['slug' => $slug]);
        return $this->render('portal/supplier-respond.html.twig', ['request' => $request, 'member' => $member]);
      }
      else {
        return $this->redirectToRoute('payment');
      }
    }

    /**
     * @Route("/supplier/save-reponse", name="save-supplier-response")
     */
    public function saveSupplierResponseAction(Request $request)
    {
      $member = $this->getMember();
      if(Utils::checkPayment($member))
      {
        $em = $this->container->get('doctrine')->getManager();
        $rq = $em->getRepository('AppBundle:Request')->find($request->request->get('request'));
        $supplier = $em->getRepository('AppBundle:Company')->find($request->request->get('company'));
        $cr = $em->getRepository('AppBundle:CompanyRequest')->findOneBy(['request' => $rq, 'company' => $supplier]);
        $responseDate = new \DateTime();
        if(!$cr)
        {
          $cr = new CompanyRequest();
          $cr->setCompany($supplier);
          $cr->setRequest($rq);
          $cr->setSupplierRemarks($request->request->get('supplierRemarks'));
        }
        $cr->setSupplierRemarks($request->request->get('supplierRemarks'));
        $cr->setStatus('Submitted Response');
        $cr->setResponseDate($responseDate);
        $em->persist($cr);
        //$rq->setResponsesTotal($rq->getResponsesTotal()+1);
        $em->persist($rq);
        $update = new RequestUpdate();
        $update->setActionDate($responseDate);
        $update->setStatus('Submitted response');
        $update->setRemarks($supplier->getName() .' submitted response to request');
        $update->setRequest($rq);
        //$update->setMember($member);
        $em->flush();

        $files = $request->files->all();
        $data = $request->request->all();

        if(array_key_exists('docs',$data) && count($data['docs']['filename']) > 0 )
        {
          for($j=0;$j<count($data['docs']['filename']);$j++)
          {
            if($data['docs']['filename'][$j] != null && array_key_exists($j,$files['docs']['FileAttachment']))
            {
              $file = $files['docs']['FileAttachment'][$j];

              $ext = $file->guessExtension();
              $filename = uniqid().'.'.$ext;
              $file->move($this->container->getParameter ('requests_directory').'/'.$rq->getBuyer()->getName().'/'.$rq->getId(), $filename);
              $doc = new CompanyRequestDocument();
              $doc->setName($data['docs']['filename'][$j]);
              $doc->setResponse($cr);
              $doc->setOriginalFileName($file->getClientOriginalName());
              $doc->setFile($filename);
              $em->persist($doc);
            }
          }
          $em->flush();
        }
        return $this->redirectToRoute('supplier-dashboard-requests');



      }
      else {
        return $this->redirectToRoute('payment');
      }
    }


  /**
   * @Route("/buyer-actions/pool-suppliers", name="pool-suppliers")
   */
   public function buyerPoolSuppliersAction(Request $request)
   {
     $em = $this->container->get('doctrine')->getManager();
     $qb = $em->createQueryBuilder();
     $ids = $request->request->get('companies');
     $buyer = $em->getRepository('AppBundle:Buyer')->find($request->request->get('buyer'));
     $pool = $em->getRepository('AppBundle:BuyerSupplierPool')->findOneBy(['buyer' => $buyer, 'name' => $request->request->get('name')]);
     if(!$pool)
     {
       $pool = new BuyerSupplierPool();
       $pool->setName($request->request->get('name'));
       $pool->setBuyer($buyer);
     }
     for($i = 0; $i<count($ids); $i++)
     {
       $supplier = $em->getRepository('AppBundle:Company')->find($ids[$i]);
       if(!$buyer->getPools()->contains($supplier))
       {
         $pool->addSupplier($supplier);
       }
     }
     $em->persist($pool);
     $em->flush();
     $response = new JsonResponse();
     $response->setData(['done']);
     return $response;
   }

   /**
    * @Route("/buyer-actions/invite-suppliers", name="invite-suppliers")
    */
    public function buyerInviteSuppliersAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $qb = $em->createQueryBuilder();
      $ids = $request->request->get('companies');
      $rq = $em->getRepository('AppBundle:Request')->find($request->request->get('request'));

      for($i = 0; $i<count($ids); $i++)
      {
        $supplier = $em->getRepository('AppBundle:Company')->find($ids[$i]);
        $cr = $em->getRepository('AppBundle:CompanyRequest')->findOneBy(['request' => $rq, 'company' => $supplier]);

        if(!$cr)
        {
          $cr = new CompanyRequest();
        }
        $cr->setStatus('Invited');
        $cr->setRequest($rq);
        $cr->setBuyerRemarks('');
        $cr->setSupplierRemarks('');
        $cr->setCompany($supplier);
        $em->persist($cr);
      }

      $em->flush();
      $response = new JsonResponse();
      $response->setData(['done']);
      return $response;
    }

    /**
     * @Route("/buyer-actions/remove-suppliers", name="remove-suppliers")
     */
     public function buyerRemoveSuppliersAction(Request $request)
     {
       $em = $this->container->get('doctrine')->getManager();
       $qb = $em->createQueryBuilder();
       $ids = $request->request->get('companies');
       $rq = $em->getRepository('AppBundle:Request')->find($request->request->get('request'));

       for($i = 0; $i<count($ids); $i++)
       {
         $supplier = $em->getRepository('AppBundle:Company')->find($ids[$i]);
         $cr = $em->getRepository('AppBundle:CompanyRequest')->findOneBy(['request' => $rq, 'company' => $supplier]);
         $em->remove($cr);
       }

       $em->flush();
       $response = new JsonResponse();
       $response->setData(['done']);
       return $response;
     }

   /**
    * @Route("/buyer/{slug}/team-members", name="team-members")
    */
    public function buyerTeamAction($slug)
    {
      $em = $this->container->get('doctrine')->getManager();
      $buyer = $em->getRepository('AppBundle:Buyer')->findOneBy(['slug' => $slug]);
      $members = $em->getRepository('AppBundle:BuyerMembership')->findBy(['isDisabled' => false, 'buyer' => $buyer]);
      return $this->render('portal/buyer-team.html.twig', ['buyer' => $buyer, 'members' => $members]);
    }

  /**
   * @Route("/supplier/team-members", name="supplier-team-members")
   */
   public function supplierTeamAction()
   {
     $member = $this->getMember();
     if(Utils::checkPayment($member))
     {
       return $this->render('portal/supplier-team.html.twig', ['member' => $member]);
     }
     else {
       return $this->redirectToRoute('payment');
     }
   }

   /**
    * @Route("/buyer/{slug}/suppliers/{pool}", name="buyer-dashboard-suppliers", requirements={"pool"="\d+"})
    */
   public function buyerSuppliersAction($slug,$pool = null)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
      }
     $pool_details = ['id' => '', 'name' => ''];
     $em = $this->container->get('doctrine')->getManager();
     $buyer = $em->getRepository('AppBundle:Buyer')->findOneBy(['slug' => $slug]);
     // $suppliers = $em->getRepository('AppBundle:Company')->findOneBy(['status' => 'Verified']);
     $sectors = $em->getRepository('AppBundle:Category')->findAll();
     $companyTypes = $em->getRepository('AppBundle:CompanyType')->findAll();
     $regions = $em->getRepository('AppBundle:Province')->findAll();
     if($pool != null)
     {
       $buyer_pool = $em->getRepository('AppBundle:BuyerSupplierPool')->find($pool);
       if($buyer_pool)
       {
         $suppliers = $buyer_pool->getSuppliers();
         $pool_details['name'] = $buyer_pool->getName();
         $pool_details['id'] = $buyer_pool->getId();
       }
       else {
         return $this->redirectToRoute('buyer-dashboard-suppliers',['slug' => $slug]);
       }
     }
     else {
       $suppliers = $em->getRepository('AppBundle:Company')->findBy([],["name" => "ASC"]);

     }

     return $this->render('portal/buyer-suppliers.html.twig', ['buyer' => $buyer, 'suppliers' => $suppliers, 'pool_details' => $pool_details, 'sectors' => $sectors, 'companyTypes' => $companyTypes, 'regions' => $regions]);
   }

   /**
    * @Route("/buyer-actions/remove-from-pool", name="remove-from-pool")
    */
   public function buyerRemoveFromPoolAction(Request $request)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
      }
      $em = $this->container->get('doctrine')->getManager();
      $buyer_pool = $em->getRepository('AppBundle:BuyerSupplierPool')->find($request->query->get('pool'));
      $supplier = $em->getRepository('AppBundle:Company')->find($request->query->get('company'));
      $buyer_pool->removeSupplier($supplier);
      $em->persist($buyer_pool);
      $em->flush();
      if($buyer_pool->getSuppliers()->count() < 1)
      {
        $em->remove($buyer_pool);
        $em->flush();
      }
      $response = new JsonResponse();
      $response->setData(['dome']);
      return $response;
  }

  /**
   * @Route("/buyer-actions/remove-from-team", name="remove-from-team")
   */
  public function removeFromTeamAction(Request $request)
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
     $em = $this->container->get('doctrine')->getManager();
     $member = $em->getRepository('AppBundle:Member')->find($request->query->get('member'));
     $user = $member->getUser();
     $user->setEnabled(false);
     $em->persist($user);

     $em->flush();

     $response = new JsonResponse();
     $response->setData(['User Disabled']);
     return $response;
 }

 /**
  * @Route("/buyer/{slug}/add-to-team", name="add-to-team")
  */
 public function buyerAddToTeamAction($slug,Request $request)
 {
   $em = $this->container->get('doctrine')->getManager();
   $buyer = $em->getRepository('AppBundle:Buyer')->findOneBy(['slug' => $slug]);
   if ($request->isMethod('POST'))
   {
     $em = $this->container->get('doctrine')->getManager();
     $user_service = $this->container->get('app.user');
     $isAdmin = $request->request->get('isAdmin') == 'on' ? true : false;
     $user_service->createBuyerNotifications($em,$request->request->get('firstname'),$request->request->get('surname'),$request->request->get('email'),$request->request->get('gender'),$request->request->get('mobile'),$request->request->get('tel'),$buyer,$isAdmin);
     return $this->redirectToRoute('team-members',['slug' => $buyer->getSlug()]);
   }
   else {
     return $this->render('portal/buyer-new-member.html.twig', ['buyer' => $buyer]);
   }
 }

 /**
  * @Route("/supplier/add-to-team", name="supplier-add-to-team")
  */
 public function supplierAddToTeamAction(Request $request)
 {
   $mem = $this->getMember();
   if(Utils::checkPayment($mem))
   {
     $em = $this->container->get('doctrine')->getManager();
     if ($request->isMethod('POST'))
     {
       $company = $em->getRepository('AppBundle:Company')->find($request->request->get('company'));
       $member = new Member();
       $mobile = $request->request->get('mobile');
       $mobile = substr($request->request->get('mobile'),1);
       $member->setFirstName($request->request->get('firstname'));
       // $member->setMiddleName($request->request->get('middlename'));
       $member->setSurname($request->request->get('surname'));
       $member->setGender($request->request->get('gender'));
       $member->setEmail($request->request->get('email'));
       $member->setMobile($mobile);

       $user_service = $this->container->get('app.user');
       $azure_service = $this->container->get('app.azure');
       $user = $user_service->createUser($request->request->get('firstname'),$request->request->get('surname'),$request->request->get('email'),Utils::randomChars(10),'Members',$mobile);
       $member->setUser($user);

       //send notification -- Added by Ajowi
        $notification = $this->container->get('app.notifications');
        //$notification->sendEmail('email/registration.html.twig','African Partner Pool',$request->request->get('email'),['confirmationUrl' => $this->container->getParameter('base_url').'email-confirmation?token='.$user->getConfirmationToken().'&email='.$request->request->get('email'),'name' => $request->request->get('firstname')]);
        //$feedback = $notification->sendSMS('+'.$mobile,'Dear '.$name.', welcome to the African Partner Pool. You will receive relevant notifications on this number from time to time.');

        //Post to Azure
        $azureUser = $azure_service->inviteGuestUser($user,'Welcome to the APP Ghana extended services platform. Please complete the account confirmation to be able to access additional functionality of the APP to add value to your business.',$request->request->get('email'));
        if($azureUser)
          $member->setAzureId($azureUser->getInvitedUser()->getId());
        //End addition by Ajowi

       $em->persist($member);

       $membership = new CompanyMembership();
       $membership->setMember($member);
       $membership->setPosition($request->request->get('role'));
       $membership->setIsDisabled(false);
       $membership->setIsAdmin(true);
       $membership->setCompany($company);
       $em->persist($membership);
       $em->persist($company);
       $em->flush();

       return $this->redirectToRoute('supplier-team-members',['member' => $this->getMember()]);
     }
     else {
       return $this->render('portal/supplier-new-member.html.twig',['member' => $this->getMember()]);
     }
   }
   else {
     return $this->redirectToRoute('payment');
   }
 }

 /**
  * @Route("/buyer/{slug}/update-information", name="buyer-update-information")
  */
 public function buyerUpdateInformationAction($slug,Request $request)
 {
   $em = $this->container->get('doctrine')->getManager();
   $buyer = $em->getRepository('AppBundle:Buyer')->findOneBy(['slug' => $slug]);
   if ($request->isMethod('POST'))
   {
     $em = $this->container->get('doctrine')->getManager();
     $buyer->setName(trim(ucwords(strtolower($request->request->get('name')))));
     $buyer->setCompanyType($em->getRepository('AppBundle:CompanyType')->find($request->request->get('companyType')));
     $buyer->setDescription($request->request->get('description'));
     $buyer->setNumberOfBranches($request->request->get('numberOfBranches'));
     $buyer->setContactPerson($request->request->get('contactPerson'));
     $buyer->setDesignation($request->request->get('designation'));
     $buyer->setOfficePhone($request->request->get('officePhone'));
     $buyer->setMobile($request->request->get('mobile'));
     $buyer->setOfficialEmailAddress($request->request->get('officialEmailAddress'));
     $buyer->setAddress($request->request->get('address'));
     $buyer->setCity($request->request->get('city'));
     $buyer->setCountry($request->request->get('country'));
     $em->persist($buyer);
     foreach($request->request->get('sectors') as $sector)
     {
       if(!$buyer->getSectors()->contains($em->getRepository('AppBundle:Category')->findOneBy(['name' => $sector])))
       {
         $buyer->addSector($em->getRepository('AppBundle:Category')->findOneBy(['name' => $sector]));
         $em->persist($buyer);
       }
     }
     $em->flush();
     return $this->redirectToRoute('buyer-dashboard',['slug' => $buyer->getSlug()]);
   }
   else {
     $company_types = $em->getRepository('AppBundle:CompanyType')->findAll();
     $categories = $em->getRepository('AppBundle:Category')->findBy(['parent' => null]);
     return $this->render('portal/buyer-update-information.html.twig', ['buyer' => $buyer, 'company_types' => $company_types, 'sectors' => $categories]);
   }
 }


 /**
  * @Route("/buyer-actions/review-response", name="review-response")
  */
 public function buyerReviewResponseAction(Request $request)
 {
   $em = $this->container->get('doctrine')->getManager();
   $user_service = $this->container->get('app.user');
   $cresponse = $em->getRepository('AppBundle:CompanyRequest')->find($request->query->get('response'));

   $cresponse->setBuyerRemarks(trim($request->query->get('response')));
   $cresponse->setScore(trim($request->query->get('score')));
   $cresponse->setStatus(trim($request->query->get('decision')));

   $em->persist($cresponse);
   $em->flush();
   $response = new JsonResponse();
   $response->setData(['done']);
   return $response;
 }

  /**
   * @Route("/apply-promo-code", name="apply-promo-code")
   */
   public function applyPromoCode(Request $request)
   {
     $em = $this->container->get('doctrine')->getManager();
     $q = $em->createQueryBuilder();
     $q->select('p')->from('AppBundle:PromoCode','p')->where('p.code = :code')->andWhere('p.expiryDate > CURRENT_TIMESTAMP()');
     $q->setParameters(['code' => trim($request->query->get('code'))]);
     $code = $q->getQuery()->getOneOrNullResult();
     if(!$code)
     {
       $feedback = ['status' => 400, 'msg' => "Promo code provided is invalid or expired"];
     }
     else {
       $feedback = ['status' => 200, 'msg' => "Promo code successfully applied"];
       $company = $em->getRepository('AppBundle:Company')->find($request->query->get('cid'));
       $company->setPromoCode($code);
       $company->setIsFullyPaidUp(true);
       $company->setIsReceipted(true);
       $em->persist($company);
       $em->flush();
     }
     $response = new JsonResponse();
     $response->setData($feedback);
     return $response;
   }

  /**
   * @Route("/payment", name="payment")
   */
   public function paymentAction()
   {
     $em = $this->container->get('doctrine')->getManager();
     $token_storage = $this->container->get('security.token_storage');
     $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
     $modes = $em->getRepository('AppBundle:PaymentMode')->findAll();
     $companies = $member->getCompanies();
     $company = null;
     $session = $this->get("session");
     $tiers = $em->getRepository('AppBundle:Tier')->findAll();

     foreach ($companies as $co) {
       if($co->getSubscriptionStatus() != 'Active')
       {
         $company = $co;
       }
     }

     if($company != null)
     {
         $sub = $company->getMembershipCategory() == 'Local Supplier' ? $this->container->getParameter('supplier.registration.amountl') : $this->container->getParameter('supplier.registration.amounti');
         if($company && $company->getPromoCode())
         {
           $ded = $company->getPromoCode()->getIsPercentage() == true ? $sub * ($company->getPromoCode()->getAmountOff() / 100) : $company->getPromoCode()->getAmountOff();
           $amount = $sub - $ded;
         }
         else {
           $amount = $sub;
         }

         if($session->has('hubtel_link'))
         {
           $hubtel_link = $session->get('hubtel_link');
         }
         else {
           $receive_momo =  array (
                'items' =>
                array (
                  array (
                    'name' => 'Annual renewal of your subscription on the African Partner Pool',
                    'quantity' => 1,
                    'unitPrice' => $amount,
                  ),
                ),
                'totalAmount' => $amount,
                'description' => 'African Partner Pool Checkout',
                'callbackUrl' => $this->generateUrl('hubtel-notification',[], UrlGeneratorInterface::ABSOLUTE_URL),
                'returnUrl' => 'https://hubtel.com',
                'merchantBusinessLogoUrl' => 'http://www.appghana.com/bundles/app/images/app-logo.png',
                'merchantAccountNumber' => 'HM2305170013',
                'cancellationUrl' => 'http://hubtel.com/online',
                'clientReference' => $company->getPaymentReference().date('y'),
              );

              $basic_auth_key =  'Basic ' . base64_encode($this->container->getParameter('hubtel_client_id') . ':' . $this->container->getParameter('hubtel_secret'));
              $request_url = 'https://api.hubtel.com/v2/pos/onlinecheckout/items/initiate';
              $receive_momo_request = json_encode($receive_momo);

              $ch =  curl_init($request_url);
              curl_setopt( $ch, CURLOPT_POST, true );
              curl_setopt( $ch, CURLOPT_POSTFIELDS, $receive_momo_request);
              curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
              curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
                  'Authorization: '.$basic_auth_key,
                  'Cache-Control: no-cache',
                  'Content-Type: application/json',
                ));

              $result = curl_exec($ch);
              $err = curl_error($ch);
              curl_close($ch);
              $logger =$this->container->get('monolog.logger.hubtel');
              $logger->info('Hubtel Invoice Response',[$result]);
              if($err){
                  echo $err;
              }else{
                 $response = json_decode($result);
                 if(!empty($response))
                 {
                   $hubtel_link = $response->data->checkoutUrl;
                 }
                 else {
                   $hubtel_link = "";
                 }
              }
         }


         return $this->render('portal/payment.html.twig', ['tiers' => $tiers,'member' => $member, 'amount' => $amount, 'company' => $company, 'modes' => $modes, 'hubtel_link' => $hubtel_link]);
     }
     else {
       return $this->redirectToRoute('portal');
     }
   }
  /**
   * @Route("/supplier/my-companies", name="my-companies")
   */
  public function myCompaniesAction()
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
     $member = $this->getMember();
     if(Utils::checkPayment($member))
       {
        return $this->render('portal/companies.html.twig', ['member' => $member]);
      }
      else {
        return $this->redirectToRoute('payment');
      }
  }

  /**
   * @Route("/join-company", name="join-company")
   */
  public function joinCompanyAction(Request $request)
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
    $em = $this->container->get('doctrine')->getManager();
    $data = $request->query->all();
    $token_storage = $this->container->get('security.token_storage');
    $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
    $company = $em->getRepository('AppBundle:Company')->find($data['company_id']);
    $notification = $this->container->get('app.notifications');
    $notification->createCompanyNotification($company,'<b>'.$member->getFirstName() .' '.$member->getMiddleName().' '.$member->getSurname().'</b> has requested to join the APP Platform as part of your '.$Company->Name().'. Choose the action you want to perform below.<br/><br/><a href="/portal/confirm-membership?rq='.$member->getId().'&co='.$company->getId().'" class="btn btn-success">Confirm</a> or <a href="/portal/confirm-membership" class="btn btn-warning">Reject</a>','Colleague Request for '.$company->getName());
    $member->addCompany($company);
    $em->persist($member);
    $em->flush();
    $q = $em->createQueryBuilder();
    $q->select('q')->from('AppBundle:Request','q')->where('q.isPublished = 1');
    $requests = $q->getQuery()->getResult();
    return $this->render('portal/dashboard.html.twig', ['member' => $member, 'requests' => $requests]);
  }

  /**
   * @Route("/confirm-membership", name="confirm-membership")
   */
   public function joinConfirmMembership(Request $request)
   {
     $em = $this->container->get('doctrine')->getManager();
     $member = $em->getRepository('AppBundle:Member')->find($request->query->get('rq'));
     $company = $em->getRepository('AppBundle:Company')->find($data['co']);
     $member->addCompany($company);
     $company->addMember($member);
     $hivebrite = $this->container->get('app.hivebrite');
     $hbriteUId = $hivebrite->addUser($company->getHiveBriteId(),$member->getFirstName(),$member->getMiddleName(),$member->getSurname(),$member->getId(),$member->getMobile(),$member->getEmail());
     $member->setHiveBriteId($hbriteUId->id);
     $em->persist($member);
     $em->persist($company);
     $em->flush();
     $q = $em->createQueryBuilder();
     $q->select('q')->from('AppBundle:Request','q')->where('q.isPublished = 1');
     $requests = $q->getQuery()->getResult();
     return $this->render('portal/dashboard.html.twig', ['member' => $member, 'requests' => $requests]);
   }

 /**
  * @Route("/reject-membership", name="reject-membership")
  */
  public function rejectMembership(Request $request)
  {
    $em = $this->container->get('doctrine')->getManager();
    $member = $em->getRepository('AppBundle:Member')->find($request->query->get('rq'));
    $company = $em->getRepository('AppBundle:Company')->find($data['co']);

    $em->persist($member);
    $em->persist($company);
    $em->flush();
    $q = $em->createQueryBuilder();
    $q->select('q')->from('AppBundle:Request','q')->where('q.isPublished = 1');
    $requests = $q->getQuery()->getResult();
    return $this->render('portal/dashboard.html.twig', ['member' => $member, 'requests' => $requests]);
  }


  /**
   * @Route("/save-company", name="save-company")
   */
   public function saveCompanyAction(Request $request)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
      }
      $member = $this->getMember();
      if(Utils::checkPayment($member))
      {
         $em = $this->container->get('doctrine')->getManager();
         $data = $request->request->all();
         $files = $request->files->all();
         $resp = new JsonResponse();

         if(array_key_exists('company_id',$data))
         {
           $company = $em->getRepository('AppBundle:Company')->find($data['company_id']);
         }
         elseif (!array_key_exists('company_id',$data))
         {
           if($company)
           {
             $this->addFlash("error", "Company with name '".trim($data['name'])."' already exists");
             return $this->redirectToRoute('register-company');
           }
           else
           {
               $tier = $em->getRepository('AppBundle:Tier')->find(trim($data['tier']));
               $company = new Company();
               $company->setStatus('New');
               $company->setRegisteredBy($member);
               $company->setName(trim($data['name']));
               $company->setCurrentSubscriptionStatus('New');
               $company->setMembershipCategory($data['membershipCategory']);
               $company->setDescription($data['description']);
               $date = \DateTime::createFromFormat('d/m/Y',$data['registrationDate']);
               $company->setPaymentReference(strtoupper(Utils::randomChars(8)));
               $company->setRegistrationDate($date);
               $company->setTier($tier);
               $company->setGraTinNumber(trim($data['graTinNumber']));
               $em->persist($company);

               $membership = new CompanyMembership();
               $membership->setMember($member);
               $membership->setIsDisabled(false);
               $membership->setIsAdmin(true);
               $membership->setCompany($company);
               $em->persist($membership);
               $em->flush();
               return $this->redirectToRoute('payment');
           }
         }
         else {
           $response = ['title' => 'Submission error!','section' => 'We experienced an error with your connection while trying to save the current section. The page will refresh to allow you to try again. You may be required to re-enter information', 'type' => 'error'];
           return $resp->setData($response);
         }

         $companyService = $this->container->get('app.company.service');

         $response['btn'] = 'save and continue';

         switch ($data['current_page']) {
           case 1:
              $response = $companyService->saveSection1($em,$company,$data,$files,$member);
             break;
           case 2:
              $response = $companyService->saveSection2($em,$company,$data,$files,$member);
             break;
           case 3:
              $response = $companyService->saveSection3($em,$company,$data,$member);
             break;
           case 4:
              $response = $companyService->saveSection4($em,$company,$data,$files,$member);
             break;
           default:
             $response = $companyService->saveSection5($em,$company,$data,$member);
             $response['btn'] = 'finish';
             break;
         }
         //$response['url'] = $this->generateUrl('update_company_details',array('slug' => $company->getSlug()),UrlGeneratorInterface::ABSOLUTE_URL);
         return $resp->setData($response);
         //return $this->redirectToRoute('edit-company',['slug' => $company->getSlug(), 'tab' => $section]);

       }
       else {
         return $this->redirectToRoute('payment');
       }
   }

   //Noticiations Portal
  /**
  * @Route("/notifications", name="portal-notifications")
  */
  public function notificationsAction()
  {
    $notifications = $this->getNotifications();
    return $this->render('portal/notifications.html.twig',['notifications' => $notifications]);
  }

  //Mark notification as read
  /**
  * @Route("/notification/read", name="portal-notification-read")
  */
  public function readNotificationsAction(Request $request)
  {
    $em = $this->container->get('doctrine')->getManager();
    $notification = $em->getRepository('AppBundle:Notification')->find($request->query->get('notification'));
    $notification->setIsRead(true);
    $em->persist($notification);
    $em->flush();
    $response = new JsonResponse();
    $response->setData(['Message Read']);
    return $response;
  }

  //Noticiations Menu   */
  public function notificationsMenuAction()
  {
    $notifications = $this->getNotifications('New');
    return $this->render('portal/notificationsmenu.html.twig',['notifications' => $notifications]);
  }

  public function dashlinkAction()
  {
    $em = $this->container->get('doctrine')->getManager();
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $user));
    if($member->hasPaidUpCompany())
    {
      $url = $this->generateUrl('portal', array(), UrlGeneratorInterface::ABSOLUTE_URL);
    }
    else {
      $url = '#';
    }
    return $this->render('portal/dashlink.html.twig',['url' => $url]);
  }

  //function to fetch notifications
  public function getNotifications($criteria = null)
  {
    $em = $this->container->get('doctrine')->getManager();
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $q = $em->createQueryBuilder();
    $q->select('n')->from('AppBundle:Notification','n')->join('n.company','c')->join('c.teamMembers','t')->join('t.member','m')->where('m.user =:user');
    $q->setParameter('user',$user);
    if($criteria == 'New')
    {
      $q->andWhere('n.isRead = 0');
    }
    $q->orderBy('n.createdAt','DESC');
    return $q->getQuery()->getResult();
  }

  /**
   * @Route("/edit-buyer/{slug}/{tab}", name="edit-buyer")
   */
   public function editBuyerAction($slug,$tab = null)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
      }
      $current_page = $tab == null ? 1 : $tab+1;
      $em = $this->container->get('doctrine')->getManager();
      $company = $em->getRepository('AppBundle:Buyer')->findOneBy(['slug' => $slug]);
      $company_types = $em->getRepository('AppBundle:CompanyType')->findAll();
      $counties = $em->getRepository('AppBundle:County')->findAll();
      $categories = $em->getRepository('AppBundle:Category')->findBy(['parent' => null]);
      return $this->render('portal/edit_buyer.html.twig', ['company' => $company,'company_types' => $company_types, 'counties' => $counties, 'categories' => $categories,'current_page' => $current_page]);
    }

  /**
   * @Route("/edit-company/{slug}/{tab}", name="edit-company")
   */
   public function editCompanyAction($slug,$tab = null)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
      }
      $member = $this->getMember();
      if(Utils::checkPayment($member))
      {
       $current_page = $tab == null ? 1 : (int)$tab+1;
       $em = $this->container->get('doctrine')->getManager();
       $company = $em->getRepository('AppBundle:Company')->findOneBy(['slug' => $slug]);
       $company_types = $em->getRepository('AppBundle:CompanyType')->findAll();
       $categories = $em->getRepository('AppBundle:Category')->findAll();
       $regions = $em->getRepository('AppBundle:Province')->findAll();
       return $this->render('portal/edit-company.html.twig', ['company' => $company,'company_types' => $company_types, 'regions' => $regions, 'categories' => $categories,'current_page' => $current_page]);
     }
     else {
       return $this->redirectToRoute('payment');
     }
   }

   /**
    * @Route("/save-buyer", name="save-buyer")
    */
    public function saveBuyerAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $buyer = $em->getRepository('AppBundle:Buyer')->find($request->request->get('company_id'));
      $response = new JsonResponse();
      if($buyer)
      {
        $filename = uniqid().'.'.$request->files->get('companyLogo')->guessExtension();
        $buyer->setName($request->request->get('name'));
        $buyer->setNatureOfBusiness($request->request->get('natureOfBusiness'));
        $buyer->setNumberOfBranches($request->request->get('numberOfBranches'));
        $buyer->setContactPerson($request->request->get('contactPerson'));
        $buyer->setDesignation($request->request->get('designation'));
        $buyer->setOfficePhone($request->request->get('officePhone'));
        $buyer->setMobile($request->request->get('mobile'));
        $buyer->setOfficialEmailAddress($request->request->get('officialEmailAddress'));
        $buyer->setAddress($request->request->get('address'));
        $buyer->setCity($request->request->get('city'));
        $buyer->setCountry($request->request->get('country'));
        $buyer->setHasEProcurementSystem($request->request->get('hasEProcurementSystem') == 'Yes' ? 1 : 0);
        $buyer->setEProcurementSystem($request->request->get('eProcurementSystem'));
        $buyer->setNoOfAppUsers($request->request->get('noOfAppUsers'));
        $buyer->setCompanyType($em->getRepository('AppBundle:CompanyType')->find($request->request->get('companyType')));
        $buyer->setLogo($filename);

        $request->files->get('companyLogo')->move($this->container->getParameter('uploads_directory').'Supplier Documents/'.$buyer->getName().'/', $filename);
        $em->persist($buyer);
        $em->flush();
        $response->setData(['title' => 'Success', 'msg' => 'Company details have been updated', 'type' => 'success']);
      }
      else {
        $response->setData(['title' => 'Error', 'msg' => 'Company details have not been updated, please try again later', 'type' => 'danger']);
      }
      return $response;
    }

   /**
    * @Route("/register-company", name="register-company")
    */
   public function registerCompanyAction()
   {
     $member = $this->getMember();
     if(Utils::checkPayment($member))
     {
       $em = $this->container->get('doctrine')->getManager();
       $company_types = $em->getRepository('AppBundle:CompanyType')->findAll();
       $categories = $em->getRepository('AppBundle:Category')->findBy(['parent' => null]);
       $counties = $em->getRepository('AppBundle:County')->findAll();
       $regions = $em->getRepository('AppBundle:Province')->findAll();
       $tiers = $em->getRepository('AppBundle:Tier')->findAll();
       return $this->render('portal/register-company.html.twig', [
           'company_types' => $company_types, 'regions' => $regions, 'counties' => $counties, 'categories' => $categories, 'tiers' => $tiers
       ]);
     }
     else {
       return $this->redirectToRoute('payment');
     }
   }

   /**
    * @Route("/change-tier", name="change-tier")
    */
    public function changeTierAction(Request $request, KernelInterface $kernel)
    {
      $em = $this->container->get('doctrine')->getManager();
      $return  = new JsonResponse();
      try {
        $company = $em->getRepository('AppBundle:Company')->find($request->query->get('company'));
        $tier = $em->getRepository('AppBundle:Tier')->find($request->query->get('tier'));
        $company->setTier($tier);
        $em->persist($company);
        $em->flush();

        $companyService = $this->container->get('app.company.service');
        $response = $companyService->generateInvoiceFromCommand($request->query->get('company'),$kernel);
        $msg = array('message' => 'Subscription tier updated and new invoice Generated', 'price' => $tier->getSubscriptionFee(), 'status' => 200);

      } catch (\Exception $e) {
        $msg = array('message' => 'Subscription update failed. Please try again.', 'status' => 500);
      }
      $return ->setData($msg);

      return $return;
    }

   /**
    * @Route("/remove-component", name="remove-component")
    */
   public function removeCompanyComponentAction(Request $request)
   {
     $em = $this->container->get('doctrine')->getManager();

     if($request->query->get('component') == 'shareholder')
     {
         $item = $em->getRepository('AppBundle:CompanyShareholding')->find($request->query->get('id'));
     }
     if($request->query->get('component') == 'role')
     {
         $item = $em->getRepository('AppBundle:CompanyDirector')->find($request->query->get('id'));
     }
     if($request->query->get('component') == 'reference')
     {
         $item = $em->getRepository('AppBundle:CompanyReference')->find($request->query->get('id'));
         $doc = $item->getDocument();
         if($doc)
         {
           $em->remove($doc);
         }
     }
     if($request->query->get('component') == 'contact')
     {
         $item = $em->getRepository('AppBundle:CompanyContact')->find($request->query->get('id'));
     }
     $em->remove($item);
     $em->flush();
     $response = new JsonResponse();
     $response->setData( ["status" => 200]);
     return $response;
   }

   /**
    * @Route("/singleUpload", name="singleUpload")
    */
   public function singleUploadAction(Request $request)
   {
     $em = $this->container->get('doctrine')->getManager();

     $data = $request->request->all();
     $files = $request->files->all();

     $companyService = $this->container->get('app.company.service');

     $company = $em->getRepository('AppBundle:Company')->find($data['company_id']);

     if(array_key_exists('documents',$data))
     {
       $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find($data['documents']['documentType'][0]);
       if(array_key_exists('documents',$files))
       {
         $doc = $files['documents']['file'][$data['documents']['documentType'][0]];
         $filename = uniqid().'.'.$doc->guessExtension();
         $id = $companyService->addDocument($em,$company,$doc_type,$filename,$data['documents']['documentNumber'][0],$data['documents']['issuedBy'][0],$data['documents']['issueDate'][0],$data['documents']['expiryDate'][0],'Awaiting Verification');
       }

     }
     else {
       $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find($data['references']['documentType'][0]);
       $doc = $files['references']['file'][0];
       $filename = uniqid().'.'.$doc->guessExtension();
       $id = $companyService->addDocument($em,$company,$doc_type,$filename,trim($data['references']['referenceNumber'][0]),$data['references']['client'][0],'','',null,'checkname');
       $companyService->manageReferences($em,$company,trim($data['references']['id'][0]),trim($data['references']['client'][0]),$data['references']['description'][0],$data['references']['valueOfContract'][0],$data['references']['currency'][0],$data['references']['designation'][0],$data['references']['email'][0],$data['references']['telephone'][0],$data['references']['contactPerson'][0],$id);
     }
     $doc->move($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);

     $response = new JsonResponse();
     $response->setData(['file' => $id]);
     return $response;
   }

   /**
   * @Route("/downloadfile/{id}", name="downloadCompanyDocument")
   */
   public function downloadCompanyDocumentAction($id)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
     {
          throw $this->createAccessDeniedException();
          return new Response();
      }
      else
      {
        $doc = $this->getDoctrine()->getRepository('AppBundle:CompanyDocumentation')->find($id);
        $em = $this->container->get('doctrine')->getManager();
        $token_storage = $this->container->get('security.token_storage');
        $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
        $companies = $member->getCompanies();

       if($companies->contains($doc->getCompany()))
       {

          try {
              $file = $this->getDoctrine()->getRepository('AppBundle:CompanyDocumentation')->find ($id);
              if (! $file) {
                  $array = array (
                      'status' => 0,
                      'message' => 'File does not exist'
                  );
                  $response = new JsonResponse($array,200);
                  return $response;
              }

            $fileName = $file->getFile();
            $ext = substr($fileName,strpos($fileName,'.'));
             if(strpos($file->getDocumentType()->getDocumentType()->getName(),'/'))
             {
               $displayName = $file->getCompany().' - '.substr($file->getDocumentType()->getDocumentType()->getName(),0,strpos($file->getDocumentType()->getDocumentType()->getName(),'/'));
             }
             else {
               $displayName = $file->getCompany().' - '.$file->getDocumentType()->getDocumentType()->getName();
             }
             $file_with_path = $this->container->getParameter('uploads_directory').'Supplier Documents/'.$file->getCompany().'/'.$fileName;

             $response = new BinaryFileResponse($file_with_path);
            //$response->headers->set ('Content-Type', 'text/plain');
            $response->setContentDisposition (ResponseHeaderBag::DISPOSITION_ATTACHMENT, str_replace("/", "-", $displayName.$ext));
            return $response;

          } catch ( Exception $e ) {
              $array = array (
                  'status' => 0,
                  'message' => 'Download error'
              );
              $response = new JsonResponse ( $array, 400 );
              return $response;
          }
      }
      else {
        return new Response('You are not allowed to view this file');
      }
    }
   }
   /**
   * @Route("/delete-request-file/{id}", name="deleteBuyerDocument")
   * Link hard-coded into buyer-edit-request file
   */
   public function deleteBuyerDocumentAction($id)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
          return new Response();
      }
      else
      {
        $em = $this->container->get('doctrine')->getManager();
        $file = $em->getRepository('AppBundle:RequestDocument')->find($id);
        if(! $file) {
             $array = array (
                 'status' => 0,
                 'message' => 'File does not exist'
             );
             $response = new JsonResponse($array,200);
             return $response;
         }
        //unlink($this->container->getParameter('requests_directory')."/".$file->getRequest()->getBuyer().'/'.$file->getUrl());
        $em->remove($file);
        $em->flush();
        return new Response('File deleted');
      }
    }
   /**
   * @Route("/download-request-file/{id}", name="downloadBuyerDocument")
   * Link hard-coded into buyer-edit-request file
   */
   public function downloadBuyerDocumentAction($id)
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
          return new Response();
      }
      else
      {
        $em = $this->container->get('doctrine')->getManager();
        $file = $em->getRepository('AppBundle:RequestDocument')->find($id);

        if (! $file) {
            $array = array (
                'status' => 0,
                'message' => 'File does not exist'
            );
            $response = new JsonResponse($array,200);
            return $response;
        }

        $displayName = $file->getName().' - '.$file->getRequest()->getName();

        $fileName = $file->getUrl();

        $file_with_path = $this->container->getParameter('requests_directory')."/".$file->getRequest()->getBuyer().'/'.$file->getRequest()->getId().'/'.$fileName;

        return Utils::releaseFile($file_with_path,$displayName.'.'.$file->getExtension());

      }

    }

    /**
    * @Route("/download-response-file/{id}", name="downloadResponseDocument")
    */
  public function downloadResponseDocumentAction($id)
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
         return new Response();
     }
     else
     {
       $em = $this->container->get('doctrine')->getManager();
       $file = $em->getRepository('AppBundle:CompanyRequestDocument')->find($id);

       if (! $file) {
           $array = array (
               'status' => 0,
               'message' => 'File does not exist'
           );
           $response = new JsonResponse($array,200);
           return $response;
       }

       $displayName = $file->getName();

       $file_with_path = $this->container->getParameter('requests_directory')."/".$file->getResponse()->getRequest()->getBuyer().'/'.$file->getResponse()->getRequest()->getId().'/'.$file->getFile();

       return Utils::releaseFile($file_with_path,$displayName.'.'.pathinfo($file_with_path, PATHINFO_EXTENSION));

     }

   }
   /**
    * @Route("/supplier/documents", name="supplier-dashboard-documents")
    */
   public function supplierDocumentsAction()
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
      }

      $arr = [];
     $em = $this->container->get('doctrine')->getManager();
     $member = $this->getMember();
     return $this->render('portal/supplier-documents.html.twig', ['member' => $member]);
   }
   /**
    * @Route("/supplier/requests", name="supplier-dashboard-requests")
    */
   public function supplierRequestsAction()
   {
     if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          throw $this->createAccessDeniedException();
      }
      $arr = [];
     $em = $this->container->get('doctrine')->getManager();
     $member = $this->getMember();
     $q = $em->createQueryBuilder();
     $q->select('q')->from('AppBundle:Request','q')->where("q.status <> 'Draft'")->orderBy('q.createdAt', 'DESC');
     //$q->setParameter('now', new \DateTime());

     $requests = $q->getQuery()->getResult();

     return $this->render('portal/supplier-requests.html.twig', ['member' => $member,'requests' => $requests, 'memberRepo' => $em->getRepository('AppBundle:Member') ]);
   }

   public function getMember()
   {
     $user = $this->container->get('security.token_storage')->getToken()->getUser();
     $em = $this->container->get('doctrine')->getManager();
     $member = $em->getRepository('AppBundle:Member')->findOneBy(['user' => $user]);
     return $member;
   }

   public function azureAction(Request $request)
   {
     $data = $request->query->all();
     print_r($data);
     exit;
   }
}
