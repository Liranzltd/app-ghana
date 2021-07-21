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
use AppBundle\Entity\SourceDoggRequest;
use AppBundle\Entity\CompanyMembership;
use AppBundle\Entity\SourceDoggRequestDocument;
use AppBundle\Entity\Payment;
use AppBundle\Entity\CompanyAddress;
use AppBundle\Entity\CompanyContact;
use AppBundle\Entity\CompanyDocumentation;
use AppBundle\Entity\CompanyDirector;
use AppBundle\Entity\CompanyShareholding;
use AppBundle\Entity\CompanyReference;
use AppBundle\Entity\Photo;
use AppBundle\Entity\Buyer;
use AppBundle\Entity\BuyerMembership;
use Intervention\Image\ImageManager;
use AppBundle\Entity\RequestStat;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        $em = $this->container->get('doctrine')->getManager();
        $t = $em->createQueryBuilder();
        $t->select('t')
            ->from('AppBundle:Request','t')
            ->where('t.deadline > :now')
            ->andWhere('t.isPublished = 1')
            ->orderBy('t.tenderSource','ASC')
            ->addOrderBy('t.createdAt','DESC')
            ->setMaxResults(4);



        $t->setParameter('now',new \DateTime());
        $tenders = $t->getQuery()->getResult();

        $testimonies = $em->getRepository('AppBundle:Testimonial')->findBy(['isPublished' => true]);

        $news = $em->getRepository('AppBundle:Article')->findBy(['isPublished' => true, 'contentType' => 'News'],['publishDate' => 'DESC'],1);
        $case = $em->getRepository('AppBundle:Article')->findOneBy(['isPublished' => true, 'contentType' => 'Case Study'],['publishDate' => 'DESC']);
        $buyers = $em->getRepository('AppBundle:Buyer')->findBy(['showOnWebsite' => 1]);
        $articles = $em->getRepository('AppBundle:Article')->findBy(['isPublished' => true, 'contentType' => 'News'],['publishDate' => 'DESC'],null,6);


        $viewVars['BergyUtils'] = new Utils();

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,'tenders' => $tenders, 'testimonies' => $testimonies, 'news' => $news,'articles' => $articles,'viewVars' => $viewVars, 'buyers' => $buyers, 'case' => $case
        ]);
    }

    /**
     * @Route("/about/app", name="about-app")
     */
    public function aboutAppAction(Request $request)
    {
      return $this->render('default/about-app.html.twig', []);
    }

    /**
     * @Route("/about/iia", name="about-iia")
     */
    public function aboutIIAAction(Request $request)
    {
      return $this->render('default/about-iia.html.twig', []);
    }

    /**
     * @Route("/about/partners", name="about/our-partners")
     */
    public function ourPartnersAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/partners.html.twig');
    }

    /**
     * @Route("/how-it-works", name="how-it-works")
     */
    public function howItWorksAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/how-it-works.html.twig');
    }

    /**
     * @Route("/meet-the-buyers", name="meet-the-buyers")
     */
    public function meetTheBuyersAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $buyers = $em->getRepository('AppBundle:Buyer')->findBy(['showOnWebsite' => 1]);
        return $this->render('default/meet-the-buyers.html.twig',['buyers' => $buyers]);
    }

    /**
     * @Route("/business-growth-hub", name="business-growth-hub")
     */
    public function businessGrowthHubAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $cats = $em->getRepository('AppBundle:ContentCategory')->findBy(['parent' => 1]);
        return $this->render('default/business-growth-hub.html.twig',['cats' => $cats]);
    }

    /**
     * @Route("/business-growth-hub/{category}/{slug}", name="business-growth-hub-show")
     */
    public function businessGrowthHubShowAction($category,$slug)
    {
        $em = $this->container->get('doctrine')->getManager();
        $cat = $em->getRepository('AppBundle:ContentCategory')->findOneBy(['slug' => $category]);
        $r = $em->createQueryBuilder();
        $r->select('r')->from('AppBundle:BusinessGrowthHub','r')->join('r.categories','c')->where('c.id = :cat')->andWhere('r.id <> :selected');

        $content = $em->getRepository('AppBundle:BusinessGrowthHub')->findOneBy(['slug' => $slug]);
        $r->setParameters(['cat' => $cat, 'selected' => $content]);
        $related = $r->getQuery()->getResult();

        $content->setClicks($content->getClicks()+1);
        $em->persist($content);
        return $this->render('default/business-growth-hub-show.html.twig',['cat' => $cat, 'content' => $content, 'related' => $related]);
    }

    /**
     * @Route("/business-excellence-programme", name="business-excellence-programme")
     */
    public function businessLinkageProgrammeAction(Request $request)
    {
        return $this->render('default/business-excellence-programme.html.twig');
    }
    /**
     * @Route("/network-hub", name="network-hub")
     */
    public function networkHubAction(Request $request)
    {
        return $this->render('default/network-hub.html.twig');
    }
     /**
     * @Route("/services", name="services")
     */
    public function servicesAction(Request $request)
    {
        return $this->render('default/services.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
      if($request->isMethod('POST'))
      {
         $data = $request->request->all();

        if(array_key_exists('g-recaptcha-response', $data) && $data['g-recaptcha-response'] != "")
        {
          $secret = '6LfWLdgUAAAAANi7wm7us5mGy88ovTIYGS3ydnqu';
          $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$data['g-recaptcha-response']);
          $responseData = json_decode($verifyResponse);
          if($responseData->success)
          {
            $notificationService = $this->container->get('app.notifications');
            $notificationService->sendEmail('email/contact-form.html.twig','New Website Enquiry','app@investinafrica.com',['name' => $request->request->get('name'), 'email' => $request->request->get('email'), 'phone' => $request->request->get('phone'), 'subject' => $request->request->get('subject'), 'message' => $request->request->get('message')]);
            return $this->render('default/contact-us-success.html.twig');
          }
          else{
            $feedback = "Robot verification failed, please try again.";
            return $this->render('default/contact.html.twig', ['feedback' => $feedback]);
          }
        }
        else{
          $feedback = "Please click on the reCAPTCHA box.";
          return $this->render('default/contact.html.twig', ['feedback' => $feedback]);
        }
      }
      else {
        return $this->render('default/contact.html.twig', ['feedback' => '']);
      }
      return $this->render('default/contact.html.twig', ['feedback' => '']);
    }



    /**
     * @Route("/slugify", name="slugify")
     */
    public function slugifyAction(Request $request)
    {
      $hivebrite = $this->container->get('app.hivebrite');
      $em = $this->container->get('doctrine')->getManager();
      $cats = $em->getRepository('AppBundle:Category')->findAll();
      foreach($cats as $cat)
      {
        $cat->setUpdatedAt(new \DateTime());
        $em->persist($cat);
      }
      $em->flush();
        return $this->render('default/hivebrite.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR, 'hivebrite' => $hivebrite->addUser()
        ]);
    }

    /**
     * @Route("/get-started", name="get-started")
     */
    public function getStartedAction()
    {
      $em = $this->container->get('doctrine')->getManager();
      $tiers = $em->getRepository('AppBundle:Tier')->findAll();
      return $this->render('default/get_started.html.twig', [
          'tiers' => $tiers,
      ]);
    }

    /**
     * @Route("/user/register", name="user-register")
     */
    public function registerAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();

      if ($request->isMethod('POST'))
      {
        //$logger = $this->container->get('monolog.logger.email');
        //$logger->info('options', $request->request->all());
        $data = $request->request->all();
        if(array_key_exists('g-recaptcha-response', $data) && $data['g-recaptcha-response'] != "")
        {
          $secret = '6LfWLdgUAAAAANi7wm7us5mGy88ovTIYGS3ydnqu';
          $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$data['g-recaptcha-response']);
          $responseData = json_decode($verifyResponse);
          if($responseData->success)
          {
            $found = $em->getRepository('AppBundle:Member')->findOneBy(['email' => $request->request->get('email')]);
            if(!$found)
            {
              $found = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(['email' => $request->request->get('email')]);
              if($found)
              {
                $feedback = "The email address you provided is already registered.";
                return $this->render('default/register-fail.html.twig', ['feedback' => $feedback]);
              }
            }
            else {
              $feedback = "The email address you provided is already registered.";
              return $this->render('default/register-fail.html.twig', ['feedback' => $feedback]);
            }

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
            $user = $user_service->createUser($request->request->get('firstname'),$request->request->get('surname'),$request->request->get('email'),Utils::randomChars(8),'Members',$mobile);
            $member->setUser($user);

            //send notification
            $notification = $this->container->get('app.notifications');
            //$notification->sendEmail('email/registration.html.twig','African Partner Pool',$request->request->get('email'),['confirmationUrl' => $this->container->getParameter('base_url').'email-confirmation?token='.$user->getConfirmationToken().'&email='.$request->request->get('email'),'name' => $request->request->get('firstname')]);
            //$feedback = $notification->sendSMS('+'.$mobile,'Dear '.$name.', welcome to the African Partner Pool. You will receive relevant notifications on this number from time to time.');

            //Post to Azure
            $azureUser = $azure_service->inviteGuestUser($user,'Welcome to the APP Ghana extended services platform. Please complete the account confirmation to be able to access additional functionality of the APP to add value to your business.',$request->request->get('email'));
            if($azureUser)
              $member->setAzureId($azureUser->getInvitedUser()->getId());
            $em->persist($member);

            $mtype = $request->request->get('accountType');

            if($mtype == 'Buyer')
            {
              $notificationService = $this->container->get('app.notifications');
              //$notificationService->sendEmail('email/buyer_notification.html.twig','Interest in becoming APP Buyer','APPkenya@investinafrica.com',['member' => $member]);
              $buyer = $em->getRepository('AppBundle:Buyer')->find($request->request->get('company'));
              if($buyer)
              {
                $bm = $em->getRepository('AppBundle:BuyerMembership')->findOneBy(['buyer' => $buyer]);
                if(!$bm)
                {
                  $bm = new BuyerMembership();
                  $bm->setMember($member);
                  $bm->setBuyer($buyer);
                  $notification = $this->container->get('app.notifications');
                  $notification->createBuyerNotification($buyer,'<b>'.$member->getFirstName() .' '.$member->getMiddleName().' '.$member->getSurname().'</b> has requested to join the APP Platform as part of '.$buyer->Name().'. Choose the action you want to perform below.<br/><br/><a href="/portal/confirm-membership?rq='.$member->getId().'&co='.$buyer->getId().'&type=buyer" class="btn btn-success">Confirm</a> or <a href="/portal/confirm-membership" class="btn btn-warning">Reject</a>','Colleague Request for '.$buyer->getName());
                  $em->persist($bm);
                }

              }
              else {
                $buyer = new Buyer();
                $buyer->setStatus('New');
                $buyer->setRegisteredBy($member);
                $buyer->setName(trim(ucwords(strtolower($request->request->get('company')))));
                $em->persist($buyer);

                $bm = new BuyerMembership();
                $bm->setMember($member);
                $bm->setIsAdmin(true);
                $bm->setBuyer($buyer);
                $em->persist($bm);
                $em->flush();
              }
            }
            else
            {
                $company = $em->getRepository('AppBundle:Company')->findOneBy(['name' => trim(ucwords(strtolower($request->request->get('company'))))]);
                if(!$company)
                {
                  $company = new Company();
                  $company->setName(trim(ucwords(strtolower($request->request->get('company')))));
                  $tier = $em->getRepository('AppBundle:Tier')->find(trim($request->request->get('tier')));
                  //$company->setMemberType($mtype);
                  $company->setStatus('New');
                  $date = \DateTime::createFromFormat('d/m/Y',$request->request->get('registrationDate'));
                  $company->setPaymentReference(strtoupper(Utils::randomChars(8)));
                  //$company->setPromoCode($em->getRepository('AppBundle:PromoCode')->findOneBy(['code' => $request->request->get('promoCode')]));
                  $company->setRegisteredBy($member);
                  $company->setCompanyType($em->getRepository('AppBundle:CompanyType')->find($request->request->get('companyType')));
                  $company->setRegistrationDate($date);
                  $company->setGraTinNumber(trim($request->request->get('graTinNumber')));
                  $company->setTier($tier);
                  $company->setCurrentSubscriptionStatus('New');

                  /**ADDED by David Ajowi 09-10-2019 **/
                  if($request->request->get('womanOwnershipPercentage') == "0%"){
                    $company->setOwnershipWomen(false);
                  }
                  else{
                    $company->setOwnershipWomen(true);
                    $company->setWomanOwnershipPercentage($request->request->get('womanOwnershipPercentage'));
                  }
                  if($request->request->get('ownershipUnder30') == 1){
                    $company->setOwnershipUnder30(true);
                  }
                  else{
                    $company->setOwnershipUnder30(false);
                  }

                  $company->setApproxTurnover($request->request->get('approxTurnover'));
                  /**END ADDED by David AJowi **/

                  $category = $em->getRepository('AppBundle:Category')->find($request->request->get('sector'));
                  if(!$company->getCategories()->contains($category))
                  {
                    $category->addCompany($company);
                    $company->addCategory($category);
                    $em->persist($category);
                  }

                  $membership = new CompanyMembership();
                  $membership->setMember($member);
                  $membership->setPosition($request->request->get('role'));
                  $membership->setIsDisabled(false);
                  $membership->setIsAdmin(true);
                  $membership->setCompany($company);
                  $em->persist($membership);
                  $em->persist($company);
                  $em->flush();
                }
                else {
                  $notification = $this->container->get('app.notifications');
                  $notification->createCompanyNotification($company,'<b>'.$member->getFirstName() .' '.$member->getMiddleName().' '.$member->getSurname().'</b> has requested to join the APP Platform as part of your '.$company->getName().'. Choose the action you want to perform below.<br/><br/><a href="/portal/confirm-membership?rq='.$member->getId().'&co='.$company->getId().'&type=supplier" class="btn btn-success">Confirm</a> or <a href="/portal/confirm-membership" class="btn btn-warning">Reject</a>','Colleague Request for '.$company->getName());
                }

                $em->persist($member);
                $em->flush();


            }

            return $this->redirectToRoute('registration-success');
          }
          else{
            $feedback = "Robot verification failed, please try again.";
            return $this->render('default/register-fail.html.twig', ['feedback' => $feedback]);
          }
        }
        else{
          $feedback = "Please click on the reCAPTCHA box.";
          return $this->render('default/register-fail.html.twig', ['feedback' => $feedback]);
        }
      }
      else {
        $companies = $em->getRepository('AppBundle:Company')->findBy(['iiaValidated' => true, 'isFullyPaidUp' => true]);
        $company_types = $em->getRepository('AppBundle:CompanyType')->findAll();
        $categories = $em->getRepository('AppBundle:Category')->findBy(['parent' => null]);
        return $this->render('default/register.html.twig', ['companies' => $companies, 'company_types' => $company_types, 'categories' => $categories, 'tier' => $request->query->get('t')]);
      }

    }

    /**
     * @Route("/registration-success", name="registration-success")
     */
    public function registrationSuccessAction()
    {
      return $this->render('default/register-success.html.twig');
    }

    /**
     * @Route("/email-confirmation", name="email-confirmation")
     */
    public function emailConfirmation(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $user = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(array('email' => $request->query->get('email')));
      if($user->getConfirmationToken() == $request->query->get('token') && $user->isEnabled() == false)
      {
        $user->setEnabled(true);
        //$user->setConfirmationToken('');
        $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $user));
        $em->persist($user);
        $em->flush();
        $message = ['state' => 'done', 'title' => "Account activation successful.",'message' => "Thank you for patience. You will now be redirected to the next page to complete your payment","page" => "/portal/payment"];
      }
      elseif($user->isEnabled() == true && $request->query->get('token'))
      {
        $message = ['state' => 'done', 'title' => "Account activation failed.",'message' => "Your account is already activated. You will be redirected to the home page.","page" => "/login"];
      }
      else {
        $message = ['state' => 'failed', 'title' => "Account activation failed.",'message' => "If you copied the link from your email, please check that you copied it correctly.", "page" => ""];
      }

      return $this->render('registration/email-confirmation.html.twig',['message' => $message]);
    }

    /**
     * @Route("/accept-invitation", name="accept-invitation")
     */
     public function acceptInvitation(Request $request)
     {
       $em = $this->container->get('doctrine')->getManager();
       $user = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(array('confirmationToken' => $request->query->get('pragash')));
       if($user && $user->isEnabled() == false)
       {
         $user->setEnabled(true);
         $em->persist($user);
         $em->flush();
         $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $user));
         $azure_service = $this->container->get('app.azure');
         if($member->getCompanyMembership())
         {
           $response = $azure_service->assignUserToGroup($member->getAzureId(),'Supplier');
         }
         else {
           $response = $azure_service->assignUserToGroup($member->getAzureId(),'Buyer');
         }

         //$response = $azure_service->assignUserToApp($member->getAzureId(),$this->container->getParameter('azureAppId'));
         $message = ['state' => 'done', 'title' => "Account activation successful.",'message' => "Thank you for patience. You will now be redirected to the next page to complete your payment","page" => "/portal/payment"];
       }
       elseif($user->isEnabled() == true && $request->query->get('pragash'))
       {
         $message = ['state' => 'done', 'title' => "Account activation failed.",'message' => "Your account is already activated. You will be redirected to the home page.","page" => "/login"];
       }
       else {
         $message = ['state' => 'failed', 'title' => "Account activation failed.",'message' => "If you copied the link from your email, please check that you copied it correctly.", "page" => ""];
       }

       return $this->render('registration/email-confirmation.html.twig',['message' => $message]);
     }

    /**
    * @Route("/check-payment", name="check-payment")
    */
    public function checkPaymentAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $p = $em->createQueryBuilder();
      $p->select('p')->from('AppBundle:Payment','p')->where('p.paymentReference LIKE :ref')->andWhere('p.status <> :status');
      $p->setParameters(['ref' => $request->query->get('ref'), 'status' => 'Partial Payment Received']);
      $payment = $p->getQuery()->getOneOrNullResult();
      if($payment)
      {
        $feed = ['status' => 'paid'];
      }
      else
      {
        $company = $em->getRepository('AppBundle:Company')->findOneBy(['paymentReference' => $request->query->get('ref')]);
        if(!$company->getIsFullyPaidUp())
        {
          $feed = ['status' => 'not paid'];
        }
        else {
          $feed = ['status' => 'paid'];
        }
      }
      $response = new JsonResponse();
      $response->setData($feed);
      return $response;
    }


    /**
    * @Route("/sourcedogg/new-request", name="new-request")
    */
    // public function sourceDoggNewRequestAction(Request $request)
    // {
    //   $em = $this->container->get('doctrine')->getManager();
    //   $categories = $em->getRepository('AppBundle:Category')->findAll();
    //   foreach($categories as $category)
    //   {
    //     $category->setUpdatedAtValue();
    //     $em->persist($category);
    //     $em->flush();
    //   }
    //
    //   return new Response('Source Dogg');
    // }

     /**
      * @Route("/hive-authentication", name="hive-authentication")
      */
     public function hiveBriteAuthenticationAction()
     {
       $hbrite = $this->container->get('app.hivebrite');
       print_r($hbrite->getNetworks());
       return new Response('authorised');
     }

    //Fetch Required documents via json for the selected Organisation type
    /**
     * @Route("/fetch-requirements", name="fetch-requirements")
     */
    public function fetchRequirementsAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $results = [];
      $values = [];

      $company = $em->getRepository('AppBundle:Company')->find($request->query->get('company'));

      $type = $em->getRepository('AppBundle:CompanyType')->find($company->getCompanyType());
      foreach($type->getRequiredDocuments() as $requirement)
      {
        if($request->query->get('company') != null)
        {
          $values = [];
          $document = $em->getRepository('AppBundle:CompanyDocumentation')->findOneBy(['company' => $request->query->get('company'), 'documentType' => $requirement]);
          if($document)
          {
            array_push($values,['id' => $document->getId(), 'documentNumber' => $document->getDocumentNumber(), 'issuedBy' => $document->getIssuedBy(), 'issueDate' => $document->getIssueDate() != null? $document->getIssueDate()->format('d/m/Y') : '', 'expiryDate' => $document->getExpiryDate() != null ? $document->getExpiryDate()->format('d/m/Y') : '', 'link' => $this->container->get('assets.packages')->getUrl('portal/downloadfile/'.$document->getId()), 'requiresUpload' => $document->getDocumentType()->getRequiresUpload() ]);
          }
          else {
            array_push($values,['id' => '', 'documentNumber' => '', 'issuedBy' => '', 'issueDate' => '', 'expiryDate' => '', 'link' => '', 'requiresUpload' => '']);
          }
        }
        else {
          array_push($values,['id' => '', 'documentNumber' => '', 'issuedBy' => '', 'issueDate' => '', 'expiryDate' => '', 'link' => '', 'requiresUpload' => '']);
        }
        array_push($results,['id' => $requirement->getId(), 'name' => $requirement->getDocumentType()->getName(), 'required' => $requirement->getIsRequired(), 'expires' => $requirement->getExpires(), 'multiple' => $requirement->getMultiple(), 'values' => $values, 'requiresUpload' => $requirement->getRequiresUpload()]);
      }


      $response = new JsonResponse();
      $response->setData($results);
      return $response;
    }

    //Show Request
    /**
    * @Route("/request/{id}", name="show-request")
    */
    public function requestAction($id)
    {
      $em = $this->container->get('doctrine')->getManager();
      $request = $em->getRepository('AppBundle:Request')->find($id);
      $categories = $em->getRepository('AppBundle:Category')->findBy(['parent' => null]);
      return $this->render('default/request.html.twig',['request' => $request, 'categories' => $categories, 'url' => $this->container->getParameter('sourcedogg.login') .'/request/'.$request->getId()]);
    }

    //Open SourceDogg
    /**
    * @Route("/open-sourcedogg-request", name="open-sourcedogg-request")
    */
    public function openSouceDoggAction(Request $request)
    {
      $sourcedogg = $this->container->get('app.sourcedogg');
      $em = $this->container->get('doctrine')->getManager();
      $token_storage = $this->container->get('security.token_storage');
      $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
      $sourcedogg->openRequest($member->getEmail(),$member->getDhot(),$request->query->get('id'),$request->query->get('id'));
      return new Response('New');
    }


    //Login
    /**
    * @Route("/portal/login", name="portal-login")
    */
    public function loginAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $user = $em->getRepository("Application\Sonata\UserBundle\Entity\User")->findOneBy(['username' => $request->request->get('email')]);
      if (!$user) {
          throw new UsernameNotFoundException("User not found");
      } else {
          $token = new UsernamePasswordToken($user, null, "main", $user->getRoles());
          $this->get("security.token_storage")->setToken($token); //now the user is logged in

          //now dispatch the login event
          $event = new InteractiveLoginEvent($request, $token);
          $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
          return $this->redirectToRoute('get-started');
      }
    }

    //Show tenders

    /**
     * @Route("/tenderspace/tenders/{slug}", name="tenda")
     */
    public function tendaAction($slug)
    {
      if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
           throw $this->createAccessDeniedException();
       }
      $em = $this->container->get('doctrine')->getManager();
      $canbid = false;

      $request = $em->getRepository('AppBundle:Request')->findOneBy(['slug' => $slug]);

      // $stats = Utils::getVisitorDetails();
      //
      // $stat = new RequestStat();
      // $stat->setRequest($request);
      // $stat->setBrowser(Utils::browser_name());
      //
      // if($stats)
      // {
      //   $stat->setCountry($stats->country);
      //   $stat->setCity($stats->city);
      //   $stat->setLocation($stats->loc);
      //   $stat->setIp($stats->ip);
      // }
      //
      // $em->persist($stat);
      // $em->flush();



      $categories = $em->getRepository('AppBundle:Category')->findBy(['parent' => null]);
      $member = $this->getMember();

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('Requests','Member viewed '.$request->getName(),$member);


      if($member)
      {
        if(Utils::checkPayment($member))
        {
          if($em->getRepository('AppBundle:Member')->inRequests($member,$request) || $em->getRepository('AppBundle:Member')->canBid($member) && $request->getStatus() == 'Published')
          {
            $canbid = true;
          }
          return $this->render('default/tenda.html.twig',['request' => $request, 'categories' => $categories, 'canbid' => $canbid]);
        }
        else {
          return $this->redirectToRoute('payment');
        }
      }
      else {
        return $this->redirectToRoute('login');
      }

    }

    /**
     * @Route("/tenderspace/{category}/{subcategory}/{orderby}", name="tenderspace")
     */
    public function tenderspaceAction($category = 'all-categories', $subcategory = 'all-subcategories', $orderby = 'newest')
    {
      $em = $this->container->get('doctrine')->getManager();
      $scat = '';

      if($subcategory == 'all-subcategories')
      {
        if($category == 'all-categories' || is_null($category))
        {
          $categories = $em->getRepository('AppBundle:Category')->findBy(['parent' => null]);
          $requests = $em->getRepository('AppBundle:Request')->findAll();
          $r = $em->createQueryBuilder();
          $r->select('r')->from('AppBundle:Request','r');
        }
        else
        {
          $cat = $em->getRepository('AppBundle:Category')->findOneBy(['slug' => $category]);
          $categories = $em->getRepository('AppBundle:Category')->findByParent($cat);
          $r = $em->createQueryBuilder();
          $r->select('r')->from('AppBundle:Request','r')->join('r.tags','t')->where('t.parent IN (:parent)');
          $r->setParameter('parent',$cat->getId());
          $scat = $cat->getName();
        }
      }
      else
      {
        $cat = $em->getRepository('AppBundle:Category')->findOneBy(['slug' => $subcategory]);
        $categories = $em->getRepository('AppBundle:Category')->findByParent($cat->getParent());
        $r = $em->createQueryBuilder();
        $r->select('r')->from('AppBundle:Request','r')->join('r.tags','t')->where('t.id IN (:cat)');
        $r->setParameter('cat',$cat->getId());
        $scat = $cat->getName();
      }
      $r->andWhere('r.deadline >= :now')->andWhere('r.isPublished = 1');
      $dt = new \DateTime();
      //$dt->sub(new \DateInterval('P14D'));
      $r->setParameter('now',$dt);

      if($orderby == 'newest')
      {
        $r->orderBy('r.createdAt','DESC');
      }
      if($orderby == 'oldest') {
        $r->orderBy('r.createdAt','ASC');
      }
      if($orderby == 'most-popular') {
        $r->orderBy('r.responsesTotal','DESC');
      }
      if($orderby == 'ending-soonest') {
        $r->orderBy('r.deadline','DESC');
      }
      $requests = $r->getQuery()->getResult();
      $companies = $em->getRepository('AppBundle:Company')->findBy(['memberType' => 'Buyer']);

      return $this->render('default/tenderspace.html.twig',['requests' => $requests, 'categories' => $categories, 'orderby' => $orderby,'companies' => $companies, 'cat' => $category, 'subcat' => $subcategory, 'selected_cat' => $scat]);
   }

    /**
     * @Route("/about/iia", name="about/iia")
     */
    public function aboutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig');
    }

    /**
     * @Route("/about/our-purpose", name="about/our-purpose")
     */
    public function ourPurposeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/our_purpose.html.twig');
    }

    /**
     * @Route("/contact-us", name="contact-us")
     */
    public function contactUsAction(Request $request)
    {
      if($request->isMethod('POST'))
      {
        $notificationService = $this->container->get('app.notifications');
        $notificationService->sendEmail('email/contact-form.html.twig','New Website Enquiry','APPkenya@investinafrica.com',['name' => $request->request->get('name'), 'email' => $request->request->get('email'), 'phone' => $request->request->get('phone'), 'subject' => $request->request->get('subject'), 'message' => $request->request->get('message')]);
        return $this->render('default/contact_us_success.html.twig');
      }
      else {
        return $this->render('default/contact_us.html.twig');
      }
    }

    /**
     * @Route("/what-is-app", name="what-is-app")
     */
    public function whatIsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/what_is_app.html.twig');
    }

    /**
     * @Route("/@tenderspace", name="@tenderspace")
     */
    public function tendasAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/tenda_space.html.twig');
    }

    /**
     * @Route("/what-is-app", name="what-is-app")
     */
    public function whatIsAppAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/what_is_app.html.twig');
    }

    /**
     * @Route("/how-it-work", name="how-it-work")
     */
    public function howItWorkAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/how_it_works.html.twig');
    }

    /**
     * @Route("/terms", name="terms")
     */
    public function termsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/terms.html.twig');
    }

    /**
     * @Route("/privacy", name="privacy")
     */
    public function privacyAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/privacy.html.twig');
    }

    /**
     * @Route("/search", name="search")
     */
    public function search(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $term = $request->query->get('s');
      $q = $em->createQueryBuilder();
      $q->select('c')->from('AppBundle:Company','c')->where('c.name like :q')->orWhere('c.description like :q')->setParameter('q','%'.$term.'%');
      $suppliers = $q->getQuery()->getResult();

      $t = $em->createQueryBuilder();
      $t->select('t')->from('AppBundle:Request','t')->where('t.name like :q')->orWhere('t.description like :q')->setParameter('q','%'.$term.'%');
      $tenders = $t->getQuery()->getResult();


      $m = $em->createQueryBuilder();
      $m->select('m')->from('AppBundle:Member','m')->where('m.firstName like :q')->orWhere('m.surname like :q')->orWhere('m.middleName like :q')->setParameter('q','%'.$term.'%');
      $members = $m->getQuery()->getResult();

      return $this->render('default/search.html.twig',['suppliers' => $suppliers, 'members' => $members, 'tenders' => $tenders, 'term' => $term]);
    }

    /**
     * @Route("/portal/buyer-notification", name="buyer-notification")
     */
     public function buyerNotificationAction(Request $request)
     {
       $em = $this->container->get('doctrine')->getManager();
       $token_storage = $this->container->get('security.token_storage');
       $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
       $notificationService = $this->container->get('app.notifications');
       $notificationService->sendEmail('email/buyer_notification.html.twig','Interest in becoming APP Buyer','APPkenya@investinafrica.com',['member' => $member]);
     }

    /**
     * @Route("/validate-info",name="validate-info")
     */
    public function validateInfoAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      if($request->query->get('field') == 'mobile')
      {
        $found = $em->getRepository('AppBundle:Member')->findOneBy(['mobile' => substr($request->query->get('value'),1)]);
        $feedback = "Mobile number already registered";
      }
      elseif($request->query->get('field') == 'email')
      {
        $found = $em->getRepository('AppBundle:Member')->findOneBy(['email' => $request->query->get('value')]);
        if(!$found)
        {
          $found = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(['email' => $request->query->get('value')]);
        }
        $feedback = "Email Address already registered";
      }
      elseif($request->query->get('field') == 'promocode')  {
        $q = $em->createQueryBuilder();
        $q->select('p')->from('AppBundle:PromoCode','p')->where('p.code = :code')->andWhere('p.expiryDate > CURRENT_TIMESTAMP()');
        $q->setParameters(['code' => trim($request->query->get('value'))]);
        $code = $q->getQuery()->getResult();
        $found = false;
        if(!$code)
        {
          $found = true;
        }
        $feedback = "Promo code provided is invalid";
      }
      else {
        $found = $em->getRepository('AppBundle:Company')->findOneBy(['registrationNumber' => $request->query->get('value')]);
        $feedback = "Registration number already registered";
      }
      $response = new JsonResponse();
      if($found)
      {
        $response->setData(['status' => 'exists','message' => $feedback]);
        return $response;
      }
      else {
        $response->setData(['status' => 'new']);
        return $response;
      }
    }

    /**
     * @Route("/check-company",name="check-company")
     */
    public function checkCompanyAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $q = $em->createQueryBuilder();
      $q->select('c')->from('AppBundle:Company','c')->where('c.name LIKE :term');
      $q->setParameter('term','%'.$request->query->get('term').'%');
      $results = $q->getQuery()->getResult();
      // $results = $em->getRepository('AppBundle:Company')->findAll();
      $companies = [];
      foreach ($results as $result) {
        $companies[] = ['id' => $result->getId(), 'value' => $result->getName()];
      }
      $response = new JsonResponse();
      $response->setData($companies);
      return $response;
    }

    function get_url( $url,  $javascript_loop = 0, $timeout = 5,$cookie)
    {
        // = '';
        //$cookie = tempnam ("/tmp", "CURLCOOKIE");
      //  echo $cookie;
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_COOKIEJAR,$cookie);
        curl_setopt ($ch, CURLOPT_COOKIEFILE, $cookie);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt( $ch, CURLOPT_ENCODING, "" );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );    # required for https urls
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
        curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
        curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
        session_write_close();
        $content = curl_exec( $ch );
        $response = curl_getinfo( $ch );
        curl_close ( $ch );

        if ($response['http_code'] == 301 || $response['http_code'] == 302)
        {
            ini_set("user_agent", "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");

            if ( $headers = get_headers($response['url']) )
            {
                foreach( $headers as $value )
                {
                    if ( substr( strtolower($value), 0, 9 ) == "location:" )
                        return get_url( trim( substr( $value, 9, strlen($value) ) ) );
                }
            }
        }

        if (    ( preg_match("/>[[:space:]]+window\.location\.replace\('(.*)'\)/i", $content, $value) || preg_match("/>[[:space:]]+window\.location\=\"(.*)\"/i", $content, $value) ) &&
                $javascript_loop < 5
        )
        {
            return get_url( $value[1], $javascript_loop+1 );
        }
        else
        {
            return array( $content, $response );
        }
    }

    /**
     * @Route("/img_save_to_file", name="img_save_to_file")
     */
    public function imgSaveToFileAction(Request $request)
    {
        $em = $this->container->get('doctrine')->getManager();
        $manager = new ImageManager(array('driver' => 'imagick'));
        $photo = $request->files->get('img');
        $original_name = $request->request->get('title');
        $original_name_without_ext = substr($original_name, 0, strlen($original_name) - 4);

        $filename = Utils::sanitize($original_name_without_ext);
        $allowed_filename = $this->createUniqueFilename($filename);

        $filename_ext = $allowed_filename .'.jpg';

        $manager = new ImageManager();
        $image = $manager->make( $photo )->encode('jpg')->save($this->container->getParameter('uploads_directory'). 'articles/' . $filename_ext );

        if(null !== $request->request->get('article'))
        {
          $article = $em->getRepository('AppBundle:Article')->find($request->request->get('article'));
          $database_image = $article->getPhoto();
          if(!$database_image)
          {
            $database_image = new Photo;
          }
          $database_image->setArticle($article);
        }
        else {
          $database_image = new Photo;
        }

        $database_image->setName($allowed_filename);
        $database_image->setCaption($request->request->get('caption'));
        $database_image->setOriginalName($original_name);
        $em->persist($database_image);
        $em->flush();

        $response = new JsonResponse();
        if( !$image)
        {
            $response->setData(array('status' => 'error',
                'message' => 'Server error while uploading'));
            return $response;
        }
        $response->setData(array('status'    => 'success',
            'url'       => '/uploads/articles/' . $filename_ext,
            'width'     => $image->width(),
            'height'    => $image->height()));

        return $response;

    }

     /**
     * @Route("/img_crop_to_file", name="img_crop_to_file")
     */
    public function imgCropToFileAction(Request $request)
    {
        $image_url = $request->request->get('imgUrl');

        // resized sizes
        $imgW = $request->request->get('imgW');
        $imgH = $request->request->get('imgH');
        // offsets
        $imgY1 = $request->request->get('imgY1');
        $imgX1 = $request->request->get('imgX1');
        // crop box
        $cropW = $request->request->get('cropW');
        $cropH = $request->request->get('cropH');
        // rotation angle
        $angle = $request->request->get('rotation');

        $filename_array = explode('/', $image_url);
        $filename = $filename_array[sizeof($filename_array)-1];

        $manager = new ImageManager();
        $image = $manager->make( $this->container->getParameter('uploads_directory'). '/articles/' . $filename);
        $image->resize($imgW, $imgH)
            ->rotate(-$angle)
            ->crop($cropW, $cropH, $imgX1, $imgY1)
            ->save($this->container->getParameter('uploads_directory') . '/articles/cropped-' . $filename);

        $response = new JsonResponse();
        if( !$image) {

            $response->setData(array('status' => 'error',
                'message' => 'Server error while uploading'));
        }

        $response->setData(array('status'    => 'success',
            'url'       => $request->getUriForPath('/uploads/articles/cropped-' . $filename)));

        return $response;

    }

    function createUniqueFilename($filename)
    {
        $upload_path = $this->container->getParameter('uploads_directory'). '/articles';
        $full_image_path = $upload_path . $filename . '.jpg';

        if ( file_exists ( $full_image_path ) )
        {
            // Generate token for image
            $image_token = substr(sha1(mt_rand()), 0, 5);
            return $filename . '-' . $image_token;
        }

        return $filename;
    }

    /**
    * @Route("/articles/{category}/{slug}", name="articles",defaults={"category"="","slug"=""})
    */
    public function articlesAction($category = null,$slug = null)
    {
        $em = $this->container->get('doctrine')->getManager();
        if($slug)
        {
          $article = $em->getRepository('AppBundle:Article')->findOneBy(['slug' => $slug]);
          $recent = $em->getRepository('AppBundle:Article')->findBy([],['createdAt' => 'DESC'],4);
        }
        else
        {
          $a = $em->createQueryBuilder();
          if($category)
          {
            $a->select('a')->from('AppBundle:Article','a')->where('a.contentType LIKE :category')->andWhere('a.isPublished = 1');
            $a->setParameter('category',$category);
            $recent = $em->getRepository('AppBundle:Article')->findBy(['contentType' => $category],['createdAt' => 'DESC'],4);
          }
          else {
            $a->select('a')->from('AppBundle:Article','a')->where('a.isPublished = 1');
            $recent = $em->getRepository('AppBundle:Article')->findBy([],['createdAt' => 'DESC'],4);
          }
          $a->orderBy('a.createdAt','DESC');
          $article = $a->getQuery()->getResult();
        }

        return $this->render('default/articles.html.twig', ['article' => $article, 'recent' => $recent, 'category' => $category]);
    }

    /**
    * @Route("/certificate", name="certificate")
    */
    public function certificateAction()
    {

    }

    public function ujuziHubMenuAction()
    {
      $em = $this->container->get('doctrine')->getManager();
      $categories = $em->getRepository('AppBundle:ContentCategory')->findAll();
      return $this->render('default/ujuziHubMenu.html.twig',['categories' => $categories]);
    }

   public function getMember()
   {
     $user = $this->container->get('security.token_storage')->getToken()->getUser();
     $em = $this->container->get('doctrine')->getManager();
     $member = $em->getRepository('AppBundle:Member')->findOneBy(['user' => $user]);

     return $member;
   }

}
