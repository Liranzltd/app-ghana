<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;


class AdminController extends Controller
{
  /**
  * @Route("/admin/actions/apportion")
  */
  public function apportionPaymentAction(Request $request)
  {
    if(!$this->get('security.authorization_checker')->isGranted('ROLE_SONATA_ADMIN')) {
           throw $this->createAccessDeniedException();
       }
    $em = $this->container->get('doctrine')->getManager();
    $company = $em->getRepository('AppBundle:Company')->find($request->query->get('company'));
    if($company)
    {
      $payment = $em->getRepository('AppBundle:Payment')->find($request->query->get('payment'));
      $payment->setCompany($company);
      $companyService = $this->container->get('app.company.service');
      $remarks = $companyService->markPayment($em,$company,$payment,$payment->getAmount(),$company->getTier()->getSubscriptionFee());
      //$payment->setRemarks($remarks);
      $em->persist($payment);
      $em->flush();
      $status = 'Success';
    }
    else {
      $status = 'Company not found';
    }

    $response = new JsonResponse();
    $response->setData(['status' => $status]);
    return $response;
  }
}
