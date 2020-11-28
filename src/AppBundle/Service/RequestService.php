<?php

namespace AppBundle\Service;

// use Facebook\WebDriver\Exception\NoSuchElementException;
// use Facebook\WebDriver\Remote\DesiredCapabilities;
// use Facebook\WebDriver\Remote\RemoteWebDriver;
// use Facebook\WebDriver\WebDriver;
// // use Facebook\WebDriver\Remote\WebDriverCapabilityType;
// use Facebook\WebDriver\WebDriverBy;
// use Facebook\WebDriver\WebDriverExpectedCondition;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

Class RequestService
{
  protected $container;

  public function  __construct($container)
  {
    $this->container = $container;
  }

  public function publishRequest($request)
  {
    $notification = $this->container->get('app.notifications');
    foreach($request->getResponses() as $response)
    {
      $company = $response->getCompany();
      $notification->sendEmail('request-notification.html.twig','African Partner Pool - New Buyer Request',$company->getRegisteredBy()->getEmail(),
        $options = ['buyer' => $request->getBuyer(), 'name' => $request->getName(), 'description' => $request->getDescription(), 'deadline' => $request->getDeadline()->format('d/m/Y H:i'),
        'link' => $request->getPublicUrl() == null ? $this->container->get('router')->generate('tenda',['slug' => $request->getSlug()]) : $request->getPublicUrl()],$cc = []);
      $notification->sendSMS($number,$message);
    }

  }

}
