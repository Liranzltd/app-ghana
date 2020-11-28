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
use AppBundle\Entity\CompanyAddress;
use AppBundle\Entity\CompanyContact;
use AppBundle\Entity\CompanyDocumentation;
use AppBundle\Entity\CompanyDirector;
use AppBundle\Entity\CompanyShareholding;
use AppBundle\Entity\CompanyReference;

/**
 * @Route("/tests")
 */
class TestController extends Controller
{
  /**
   * @Route("/registration", name="registration-tests")
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function registrationConfirmationAction(Request $httpRequest)
  {
    $notificationService = $this->container->get('app.notifications');
    $notificationService->sendEmail('email/registration.html.twig','APP Registration Confirmation','marvin@technologic-software.com',[]);

      return new Response('');
  }

  /**
  * @Route("/mpesa", name="mpesa-tests")
  */
  // public function mpesaAction(Request $request)
  // {
  //   $em = $this->container->get('doctrine')->getManager();
  //   //$data = json_decode($request->getContent(),true);
  //   $code = $request->query->get('code');
  //   $amount = $request->query->get('amount');
  //   $json = '{"Id":"4cfcdf48-81f7-cbd1-eeb0-08d47bcddc31","MSISDN":"254722634402","BusinessShortCode":"878750","InvoiceNumber":" ","TransID":"8NG2HZWY","TransAmount":"'.$amount.'","ThirdPartyTransID":" ","TransTime":"20170405054551","BillRefNumber":"'.$code.'","KYCInfoList":[{"KYCName":"[Personal Details][First Name]","KYCValue":"MARVIN"},{"KYCName":"[Personal Details][Last Name]","KYCValue":"OCHIENG\'"}]}';
  //   $data = json_decode($json,true);
  //   // $logger =$this->container->get('monolog.logger.mpesa');
  //   // $logger->info('M-PESA Input',$data);
  //   $company = $em->getRepository('AppBundle:Company')->findOneBy(['paymentReference' => $data['BillRefNumber']]);
  //   $sub = $this->container->getParameter('supplier.registration.amount');
  //   $promo_code = $company->getPromoCode();
  //   if($promo_code)
  //   {
  //     $ded = $company->getPromoCode()->getIsPercentage() == true ? $sub * ($company->getPromoCode()->getAmountOff() / 100) : $company->getPromoCode()->getAmountOff();
  //     $amount = $sub - $ded;
  //   }
  //   else {
  //     $amount = $sub;
  //   }
  //
  //   $payment = new Payment();
  //   $payment->setMode('M-PESA');
  //   $payment->setAmount($data['TransAmount']);
  //   $payment->setPaymentReference($data['BillRefNumber']);
  //   $remarks = 'Payment made by '.$data['KYCInfoList'][0]['KYCValue'].' from mobile number '.$data['MSISDN'];
  //
  //   $payment->setTransactionTime(\DateTime::createFromFormat('YmdHis', $data['TransTime']));
  //   $payment->setGatewayTransactionCode($data['Id']);
  //   $payment->setCompany($company);
  //   $company->setPaymentReceived(true);
  //
  //   if($amount > $data['TransAmount'])
  //   {
  //     $amnt = $amount - $data['TransAmount'];
  //     $payment->setStatus('Partial Payment Received');
  //     $remarks .= 'Balance '.$amnt;
  //
  //   }
  //   elseif($amount < $data['TransAmount']) {
  //     $amnt =  $data['TransAmount'] - $amount;
  //     $payment->setStatus('Overpaid subscription');
  //     $company->setIsFullyPaidUp(true);
  //     if($company->getIiaValidated() == true)
  //     {
  //       $company->setStatus('Active');
  //       $company->setSubscriptionDate(new \DateTime());
  //       //$sourcedogg->login('dixon@tiramid.com','Wamaitha88#');
  //     }
  //     $remarks .= ' by '. $amnt;
  //   }
  //   else
  //   {
  //     $payment->setStatus('Full payment received');
  //     $company->setIsFullyPaidUp(true);
  //     if($company->getIiaValidated() == true)
  //     {
  //       $company->setStatus('Active');
  //       $company->setSubscriptionDate(new \DateTime());
  //
  //     }
  //   }
  //   $payment->setRemarks($remarks);
  //   $em->persist($payment);
  //   $em->persist($company);
  //   $company->setIsReceipted(true);
  //   $em->flush();
  //
  //   $invoice = $this->container->get('app.print_service');
  //   $notification = $this->container->get('app.notifications');
  //   $invoice->generatePDF('email/receipt.html.twig',$this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/receipt-'.$company->getPaymentReference().'.pdf',['company' => $company, 'amount' => $data['TransAmount']]);
  //   $notification->createCompanyNotification($company,'A receipt for your payment for invoice number '.$company->getPaymentReference().' has been generated. <br/><a href="/uploads/documents/'.$company->getName().'/receipt-'.$company->getPaymentReference().'.pdf">Download Receipt</a>','Acknowledgement of Payment');
  //
  //   return new Response('200');
  // }

  /**
   * @Route("/decrypt", name="decrypt")
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function dhotAction(Request $request)
  {
    echo Utils::encrypt($request->query->get('dhot'));
    exit;
  }
}
