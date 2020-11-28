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
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use AppBundle\Utils;
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
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * @Route("/upgrade")
 */

class RecollectionController extends Controller
{
    /**
     * @Route("/", name="upgradeindex")
     */
    public function indexAction(Request $request)
    {
      return $this->render('upgrade/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR
      ]);
    }

    /**
     * @Route("/get_company_details", name="get_company_details")
     */
    public function getCompanyDetailsAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $member = $em->getRepository('AppBundle:Member')->findOneBy(["email" => $request->query->get('email')]);
      $response = new JsonResponse();
      if($member)
      {
        $companies = $member->getCompanies();
        $response->setData(["tel" => $member->getMobile(),"firstName" => $member->getFirstName(), "surname" => $member->getSurname(), "gender" => $member->getGender(),"company" => $companies[0]->getName(), 'id' => $companies[0]->getId(), 'slug' =>  $companies[0]->getSlug()]);
      }
      else {
        $response->setData(["company" => "not found"]);
      }
      return $response;
    }

    /**
     * @Route("/update_login_details", name="update_login_details")
     */
    public function updateCredentialsAction(Request $request)
    {
      $em = $this->container->get('doctrine')->getManager();
      $userManager = $this->container->get('fos_user.user_manager');
      $user = $userManager->findUserByEmail($request->query->get('email'));
      $response = new JsonResponse();
      if($user)
      {
        $password = $request->query->get('password');
        $user->setPlainPassword($password);
        $user->setEmail($request->query->get('officialEmailAddress'));
        $user->setUsername($request->query->get('officialEmailAddress'));
        $user->setEnabled(true);
        $userManager->updateUser($user);
        $response->setData(["status" => "success"]);

        $mobile = substr($request->query->get('mobile'),1);
        $member = $em->getRepository('AppBundle:Member')->findOneBy(["user" => $user]);
        $member->setFirstName($request->query->get('firstName'));
        $member->setSurname($request->query->get('surname'));
        $member->setEmail($request->query->get('officialEmailAddress'));
        $member->setMobile($mobile);
        $member->setGender($request->query->get('gender'));
        $em->persist($member);
        $em->flush();

        $company = $em->getRepository('AppBundle:Company')->find($request->query->get('companyId'));

        if($company->getSubscriptionStatus() == 'Active')
        {
          $companyService = $this->container->get('app.company.service');
          //$companyService->pushToApis($em,$company);
          $response->setData(["status" => "success", 'company' => $company->getId()]);
        }
      }
      else {
        $response->setData(["status" => "fail"]);
      }

      return $response;
    }

    /**
     * @Route("/update_company_details/{slug}/{tab}", name="update_company_details")
     */
    public function updateCompanyDetails($slug,$tab = null)
    {
      if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
           throw $this->createAccessDeniedException();
       }
      $em = $this->container->get('doctrine')->getManager();
      $current_page = $tab == null ? 1 : $tab+1;
      $company = $em->getRepository('AppBundle:Company')->findOneBy(["slug" => $slug]);
      $company_types = $em->getRepository('AppBundle:CompanyType')->findAll();
      $categories = $em->getRepository('AppBundle:Category')->findBy(['parent' => null]);
      $regions = $em->getRepository('AppBundle:Province')->findAll();
      return $this->render('upgrade/update_company.html.twig', ['company' => $company,'company_types' => $company_types, 'regions' => $regions, 'categories' => $categories, 'type' => $company->getMemberType(),'current_page' => $current_page]);
    }

    /**
     * @Route("/save-company", name="save-company-upgrade")
     */
     public function saveCompanyAction(Request $request)
     {
       if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
       $em = $this->container->get('doctrine')->getManager();
       $data = $request->request->all();
       $files = $request->files->all();
       $token_storage = $this->container->get('security.token_storage');
       $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
       $resp = new JsonResponse();

       if(array_key_exists('company_id',$data))
       {
         $company = $em->getRepository('AppBundle:Company')->find($data['company_id']);
       }
       else {
         $response = ['title' => 'Submission error!','section' => 'We experienced an error with your connection while trying to save the current section. The page will refresh to allow you to try again. You may be required to re-enter information', 'type' => 'error', 'tab' => $data['current_page']];
         return $resp->setData($response);
       }

       $companyService = $this->container->get('app.company.service.upgrade');

       //$logger->info('Section',['section' => $section]);

       switch ($data['current_page']) {
         case '1':
            $response = $companyService->saveSection1($em,$company,$data,$files,$member);
           break;
         case '2':
            $response = $companyService->saveSection2($em,$company,$data,$files,$member);
           break;
         case '3':
            $response = $companyService->saveSection3($em,$company,$data,$files,$member);
           break;
         default:
           $response = $companyService->saveSection5($em,$company,$data,$member);
           break;
       }
       $response['url'] = $this->generateUrl('update_company_details',array('slug' => $company->getSlug()),UrlGeneratorInterface::ABSOLUTE_URL);

       return $resp->setData($response);
       //return $this->redirectToRoute('edit-company',['slug' => $company->getSlug(), 'tab' => $section]);
     }
}
