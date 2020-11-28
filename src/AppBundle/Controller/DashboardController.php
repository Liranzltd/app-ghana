<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use AppBundle\HTMLTable;

class DashboardController extends Controller
{
  /**
  * @Route("/admin/dashboard/suppliers")
  */
  public function suppliersAction()
  {
    if(!$this->get('security.authorization_checker')->isGranted('ROLE_SONATA_ADMIN')) {
           throw $this->createAccessDeniedException();
       }
    $admin_pool = $this->get('sonata.admin.pool');
    $em = $this->container->get('doctrine')->getManager();
    $incomplete_registrations = $em->getRepository('AppBundle:Company')->findBy(['status' => 'New'],['createdAt' => 'DESC']);

    $v = $em->createQueryBuilder();
    $v->select('v')->from('AppBundle:Company','v')->where('v.status = ?0')->orWhere('v.status = ?1')->orWhere('v.status = ?2')->orderBy('v.createdAt','ASC');
    $v->setParameters(["Awaiting Verification","Verification in Progress","Verification Deffered"]);
    $verification_companies = $v->getQuery()->getResult();


    $verified = $em->getRepository('AppBundle:Company')->findBy(['status' => 'Verified'],['name' => 'DESC']);

    return $this->render('AppBundle:dashboard:suppliers.html.twig', ['admin_pool' => $admin_pool,'incomplete_registrations' => $incomplete_registrations,'verification_companies' => $verification_companies, 'verified' =>$verified]);
  }

  /**
  * @Route("/admin/dashboard/buyers")
  */
  public function buyersAction()
  {
    if(!$this->get('security.authorization_checker')->isGranted('ROLE_SONATA_ADMIN')) {
           throw $this->createAccessDeniedException();
       }
    $admin_pool = $this->get('sonata.admin.pool');
    $em = $this->container->get('doctrine')->getManager();
    $new_buyers = $em->getRepository('AppBundle:Company')->findBy(['memberType' => 'Buyer','status' => 'New'],['createdAt' => 'DESC']);
    $registered_buyers = $em->getRepository('AppBundle:Company')->findBy(['memberType' => 'Buyer','status' => 'Verified'],['createdAt' => 'DESC']);
    $unverified = $em->getRepository('AppBundle:Company')->findBy(['memberType' => 'Buyer','status' => 'Awaiting Verification'],['createdAt' => 'DESC']);

    return $this->render('AppBundle:dashboard:buyers.html.twig', ['admin_pool' => $admin_pool, 'unverified' => $unverified, 'new_buyers' => $new_buyers, 'registered_buyers' => $registered_buyers]);
  }

  /**
  * @Route("/admin/dashboard/users")
  */
  public function usersAction()
  {
    if(!$this->get('security.authorization_checker')->isGranted('ROLE_SONATA_ADMIN')) {
           throw $this->createAccessDeniedException();
       }
    $admin_pool = $this->get('sonata.admin.pool');
    $em = $this->container->get('doctrine')->getManager();
    $members =  $em->getRepository('AppBundle:Member')->findAll();
    $online_users = $this->getDoctrine()->getManager()->getRepository('ApplicationSonataUserBundle:User')->getActive();
    $registered_today = $em->getRepository('ApplicationSonataUserBundle:User')->getRegisteredOn();
    $yet_to_activate = $em->getRepository('ApplicationSonataUserBundle:User')->getDisabled();

    return $this->render('AppBundle:dashboard:users.html.twig', ['members' => $members, 'admin_pool' => $admin_pool, 'online_users' => $online_users, 'yet_to_activate' => $yet_to_activate]);
  }

  /**
  * @Route("/admin/dashboard/finance")
  */
  public function paymentAction()
  {
    if(!$this->get('security.authorization_checker')->isGranted('ROLE_SONATA_ADMIN')) {
           throw $this->createAccessDeniedException();
       }
    $admin_pool = $this->get('sonata.admin.pool');
    $em = $this->container->get('doctrine')->getManager();
    $transactions = $em->getRepository('AppBundle:Payment')->findAll();

    $registered_buyers = $em->getRepository('AppBundle:Company')->findBy(['memberType' => 'Buyer','status' => 'Verified'],['createdAt' => 'DESC']);
    $unverified = $em->getRepository('AppBundle:Company')->findBy(['memberType' => 'Buyer','status' => 'Awaiting Verification'],['createdAt' => 'DESC']);

    $fortnight = new \DateTime();
    $dt = new \DateTime();
    $fortnight->modify("+14 days");
    $x =  $em->createQueryBuilder();
    $x->select('x')->from('AppBundle:CompanySubscription','x')->where('x.expiryDate <= ?0')->andWhere('x.expiryDate >= ?1')->orderBy('x.expiryDate','DESC');
    $x->setParameters([$fortnight,$dt]);
    $expiring  = $x->getQuery()->getResult();



    return $this->render('AppBundle:dashboard:payments.html.twig', ['admin_pool' => $admin_pool, 'expiring' => $expiring, 'transactions' => $transactions, 'registered_buyers' => $registered_buyers]);
  }

  /**
  * @Route("/admin/downloadfile/{id}")
  */
  public function downloadAction($id)
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
           $response->setContentDisposition (ResponseHeaderBag::DISPOSITION_ATTACHMENT, $displayName.$ext);
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
  /**
  * @Route("/admin/get-crb-report")
  */
  public function getCRBReportAction(Request $request)
  {
    $em = $this->container->get('doctrine')->getManager();
    $company = $em->getRepository('AppBundle:Company')->find($request->query->get('company'));
    if($company)
    {
      if(file_exists($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/crbcheck.txt'));
      {
        $filename = $this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/crbcheck.txt';
      }
      if(file_exists($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/Comprehensive Corporate Report.txt'));
      {
        $filename = $this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/Comprehensive Corporate Report.txt';
      }

      $table = new HTMLTable(json_decode(file_get_contents($filename),true));

      $response = $table->draw();
    }
    else
    {
      $response = '<p>Report not found</p>';
    }
    return new Response($response);
  }

}
