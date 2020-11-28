<?php

namespace AppBundle\Service;
use AppBundle\Entity\Notification;
use \ApiHost;
use \ApiMessage;
use \BasicAuth;

Class NotificationService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
      $this->host = $container->getParameter('mailer_host');
      $this->user = $container->getParameter('mailer_user');
      $this->password = $container->getParameter('mailer_password');
      $this->mailer = $container->get('mailer');
      $this->twig = $container->get('twig');

      $this->hubtel_client_id = $container->getParameter('hubtel_client_id');
      $this->hubtel_secret = $container->getParameter('hubtel_secret');
      $this->hubtel_from = $container->getParameter('hubtel_from');
  }

  public function sendEmail($template,$subject,$email,$options = [],$cc = [])
  {
    $templateContent = $this->twig->loadTemplate($template);
    $body = $templateContent->render(array('options' => $options));

    array_push($options,['template' => $template]);
    $message =  (new \Swift_Message($subject))
    ->setFrom(array('no-reply@appghana.com' => 'African Partner Pool'))
            ->setTo($email)
            ->setCc($cc)
            ->setContentType('text/html')
            ->setBody($body)
        ;
    $this->mailer->send($message);
  }

  public function sendSMS($number,$msg)
  {
    $auth = new \BasicAuth($this->hubtel_client_id , $this->hubtel_secret);
    // instance of ApiHost
    $apiHost = new ApiHost($auth);
    // instance of AccountApi
    $accountApi = new \AccountApi($apiHost);
    // Get the account profile
    // Let us try to send some message
    $messagingApi = new \MessagingApi($apiHost);
    try {
        // Send a quick message
        $messageResponse = $messagingApi->sendQuickMessage($this->hubtel_from, $number, $msg);
        $logger = $this->container->get('monolog.logger.hubtel');

        if ($messageResponse instanceof MessageResponse) {
          $logger->info('status', ['response' => $messageResponse->getStatus()]);
        } elseif ($messageResponse instanceof HttpResponse) {
              $logger->info('status', ['ServerResponseStatus' => $messageResponse->getStatus()]);
        }
    } catch (Exception $ex) {
      $logger->info('status', ['ServerResponseStatus' => $ex->getTraceAsString()]);
    }
  }

  public function createCompanyNotification($company,$message,$title,$buyer = null)
  {
    $notification = new Notification();
    $notification->setMessage($message);
    $notification->setTitle($title);
    //$notification->setCreatedAt(new \DateTime());
    $notification->setCompany($company);
    if($buyer)
    {
      $notification->setBuyer($buyer);
    }
    $em = $this->container->get('doctrine')->getManager();
    $em->persist($notification);
    $em->flush();
  }

  public function createBuyerNotification($buyer,$message,$title)
  {
    $notification = new Notification();
    $notification->setMessage($message);
    $notification->setTitle($title);
    $notification->setBuyer($buyer);
    $em = $this->container->get('doctrine')->getManager();
    $em->persist($notification);
    $em->flush();
  }
}
