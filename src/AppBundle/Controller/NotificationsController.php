<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Payment;

/**
 * @Route("/notifications")
 */
class NotificationsController extends Controller
{
  /**
  * Process request webhooks from partners
  * @Route("/mpesa", name="mpesa-notification")
  */
  public function mpesaAction(Request $request)
  {
    $em = $this->container->get('doctrine')->getManager();
    $data = json_decode($request->getContent(),true);
    $logger =$this->container->get('monolog.logger.mpesa');
    $logger->info('M-PESA Input',$data);
    $company = $em->getRepository('AppBundle:Company')->findOneBy(['paymentReference' => $data['BillRefNumber']]);
    $sub = $this->container->getParameter('supplier.registration.amount');
    $mobile = $data['MSISDN'];
    $firstName = $data['KYCInfoList'][0]['KYCValue'];
    $lastName = end($data['KYCInfoList'])['KYCValue'];
    $notification = $this->container->get('app.notifications');

    $payment = new Payment();
    $payment->setMode('M-PESA');
    $payment->setAmount($data['TransAmount']);
    $payment->setPaymentReference($data['BillRefNumber']);
    $remarks = 'Payment made by '.$firstName.' '.$lastName.' from mobile number '.$data['MSISDN'];
    $payment->setTransactionTime(\DateTime::createFromFormat('YmdHis', $data['TransTime']));
    $payment->setGatewayTransactionCode($data['Id']);

    if($company)
    {
      $companyService = $this->container->get('app.company.service');
      $em->persist($payment);
      $companyService->markPayment($em,$company,$payment,$data['TransAmount'],$sub,$firstName,$lastName);

      $notification->sendSMS($mobile,'Dear '.$firstName.', your subscription fees of GHS '.$data['TransAmount'].' for '.$company->getName().' has been received.');
    }
    else {
      $payment->setStatus('Wrong reference number provided');
      $notification->sendSMS($mobile,'Dear '.$firstName.', your payment of GHS '.$data['TransAmount'].' has been received but the provided account number is invalid, please contact us to clarify.');
    }


    $payment->setRemarks($remarks);
    $em->persist($payment);

    $em->flush();

    $response = new JsonResponse();
    $response->setData(['responseCode' => 200]);
    return $response;
  }
  /**
  * Process request webhooks from partners
  * @Route("/hubtel", name="hubtel-notification")
  */
  public function hubtelAction(Request $request)
  {
    $em = $this->container->get('doctrine')->getManager();
    $data = json_decode($request->getContent(),true);
    $logger =$this->container->get('monolog.logger.hubtel');
    $logger->info('Hubtel Response',$data);
    $company = $em->getRepository('AppBundle:Company')->findOneBy(['paymentReference' => substr($data['Data']['ClientReference'], 0, -2)]);

    $payment = new Payment();
    $payment->setMode($em->getRepository('AppBundle:PaymentMode')->findOneBy(['name' => 'Online']));
    $payment->setAmount($data['Data']['Amount']);
    $payment->setPaymentReference($data['Data']['ClientReference']);
    $remarks = $data['Description'].'. '.print_r($data['Data']['PaymentDetails'], true);
    $payment->setTransactionTime(\DateTime::createFromFormat('YmdHis', $data['TransTime']));
    $payment->setGatewayTransactionCode($data['Data']['CheckoutId']);

    if($company)
    {
      $companyService = $this->container->get('app.company.service');
      $em->persist($payment);
      $companyService->markPayment($em,$company,$payment,$data['Data']['Amount'],$company->getAmountDue(),$firstName,$lastName);

      //$notification->sendSMS($mobile,'Dear '.$firstName.', your subscription fees of GHS '.$data['TransAmount'].' for '.$company->getName().' has been received.');
    }
    else {
      $payment->setStatus('Wrong reference number provided');
      //$notification->sendSMS($mobile,'Dear '.$firstName.', your payment of GHS '.$data['TransAmount'].' has been received but the provided account number is invalid, please contact us to clarify.');
    }

    $payment->setRemarks($remarks);
    $em->persist($payment);

    $em->flush();

    $response = new JsonResponse();
    $response->setData(['responseCode' => 200]);
    return $response;
  }
}
