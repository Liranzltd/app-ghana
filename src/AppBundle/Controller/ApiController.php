<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
* @Route("/api")
*/
class ApiController extends Controller
{
  /**
  * @Route("/equity/verify")
  */
  // public function equityVerifyAction(Request $request)
  // {
  //   $data = json_decode($request->getContent(),true);
  //   // $data = $request->request->all();
  //   // $logger = $this->container->get('monolog.logger.equity');
  //   // $logger->info('Equity Verification',$data);
  //
  //   $em = $this->container->get('doctrine')->getManager();
  //   $company = $em->getRepository('AppBundle:Company')->findOneBy(['paymentReference' => $data['billNumber']]);
  //   $amount = $company->checkBalance($this->container->getParameter('supplier.registration.amount'));
  //
  //   $response = new JsonResponse();
  //   $response->setData(['amount' => $amount, 'billNumber' => $company->getPaymentReference(), 'billerCode' => 11111, 'createdOn' => $company->getCreatedAt()->format('Y-m-d'), 'currencyCode' => 'GHS', 'customerName' => $company->getName(), 'customerRefNumber' => $company->getPaymentReference(), 'type' => 1]);
  // }

  /**
  * @Route("/equity/payment")
  */
  public function equityPaymentAction(Request $request)
  {
    $data = json_decode($request->getContent(),true);
    // $data = $request->request->all();
    // $logger = $this->container->get('monolog.logger.equity');
    // $logger->info('Equity Payment',$data);
    $em = $this->container->get('doctrine')->getManager();

    $company = $em->getRepository('AppBundle:Company')->findOneBy(['paymentReference' => $data['billAmount']]);

    $payment = new Payment();
    $payment->setMode('Equity');
    $payment->setAmount($data['billAmount']);
    $payment->setPaymentReference($data['billNumber']);
    $remarks = 'Payment made by '.$data['debitcustname'].' ('.$data['phonenumber'].') to account '.$data['debitaccount'];

    $payment->setTransactionTime(new \DateTime($data['transactionDate']));
    $payment->setGatewayTransactionCode($data['bankreference']);
    $payment->setCompany($company);
    $company->setPaymentReceived(true);
    $company->setIsFullyPaidUp(true);
    $company->setIsReceipted(true);

    $payment->setRemarks($remarks);
    $em->persist($payment);
    $em->persist($company);

    $em->flush();

    $invoice = $this->container->get('app.print_service');
    $notification = $this->container->get('app.notifications');

    $invoice->generatePDF('email/receipt.html.twig',$this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/receipt-'.$company->getPaymentReference().'.pdf',['company' => $company, 'amount' => $data['billAmount']]);

    $companyService = $this->container->get('app.company.service');
    $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(52);
    $id = $companyService->addDocument($em,$company,$doc_type,'receipt-'.$company->getPaymentReference().'.pdf','Receipt for Payment - Equity','APP Ghana',new \DateTime(),'',null);

    $notification->createCompanyNotification($company,'A receipt for your payment for invoice number '.$company->getPaymentReference().' has been generated. <br/><a href="/portal/downloadfile/'.$id.'">Download Receipt</a>','Acknowledgement of Payment');

    $response = new JsonResponse();
    $response->setData(['responseCode' => 'OK', 'responseMessage' => 'SUCCESSFUL']);
    return $response;

  }

  /**
  * @Route("/get/requests")
  */
  public function getRequestsAction(Request $request)
  {
    $em = $this->container->get('doctrine')->getManager();
    // $q = $em->createQueryBuilder();
    // $q->select('q')->from('AppBundle:Request','q')->where('q.isPublished = 1')->andWhere('q.deadline > :now');
    // $q->setParameter('now', new \DateTime());

    $results = $em->getRepository('AppBundle:Request')->findAll();

    $arr = [];

    foreach($results as $result)
    {
      $docs = [];
      foreach ($result->getDocuments() as $document) {
        array_push($docs,['id' => $document->getId(), 'name' => $document->getName(), 'type' => $document->getType(),'url' => $document->getUrl()]);
      }
      array_push($arr,['id' => $result->getId(), 'name' => $result->getName(), 'description' => $result->getDescription(), 'deadline' => $result->getDeadline()->format('d/m/Y H:i'), 'buyer' => $result->getBuyer()->getName(), 'requestType' => $result->getRequestType()->getName(), 'documents' => $docs]);
    }

    $response = new JsonResponse();
    $response->setData($arr);
    return $response;
  }
}
