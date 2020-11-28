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
use AppBundle\Entity\SourceDoggRequestDocument;
use AppBundle\Entity\Payment;
use AppBundle\Entity\SourceDoggSSO;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * @Route("/services")
 */
class ServicesController extends Controller
{
  /**
  * @Route("/downloadfile/{id}")
  */
  public function downloadAction($id)
  {
    if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
         throw $this->createAccessDeniedException();
     }
     else
     {
       $isvalid = false;
       $doc = $this->getDoctrine()->getRepository('AppBundle:CompanyDocumentation')->find($id);
       if ($this->isGranted('ROLE_SONATA_ADMIN'))
       {
          $isvalid = true;
       }
       else {
         $em = $this->container->get('doctrine')->getManager();
         $token_storage = $this->container->get('security.token_storage');
         $member = $em->getRepository('AppBundle:Member')->findOneBy(array('user' => $token_storage->getToken()->getUser()));
         $companies = $member->getCompanies();

        if(in_array($doc->getCompany(),$companies))
        {
          $isvalid = true;
        }
       }
     }

     if($isvalid)
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

           if(strpos($file->getDocumentType()->getDocumentType()->getName(),'/'))
           {
             $displayName = $file->getCompany().' - '.substr($file->getDocumentType()->getDocumentType()->getName(),0,strpos($file->getDocumentType()->getDocumentType()->getName(),'/'));
           }
           else {
             $displayName = $file->getCompany().' - '.$file->getDocumentType()->getDocumentType()->getName();
           }

           $fileName = $file->getFile();

           $file_with_path = $this->container->getParameter('uploads_directory')."Supplier Documents/".$file->getCompany().'/'.$fileName;
           $response = new BinaryFileResponse($file_with_path);
           //$response->headers->set ('Content-Type', 'text/plain');
           $response->setContentDisposition (ResponseHeaderBag::DISPOSITION_ATTACHMENT, $displayName);
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
  }
}
