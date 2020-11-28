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

Class SourceDoggService
{
  protected $container;
  protected $webDriver;
  protected $loginUrl;
  protected $buyerUrl;
  protected $sellerUrl;

  public function  __construct($container)
  {
      $this->container = $container;
      $this->loginUrl = $container->getParameter('sourcedogg.login');
      $this->buyerUrl = $container->getParameter('sourcedogg.buyerUrl');
      $this->supplierUrl = $container->getParameter('sourcedogg.supplierUrl');
  }

  public function logIn($userName,$password,$path)
  {
    $fields = array(
    	'UserName="'.$userName.'"',
    	'Password="'.$password.'"',
      'Action="login"'
    );

    $this->fillFormAndSubmit($fields,$this->loginUrl,$path,'-c '.$path.'/cookies.txt');
  }

  public function openRequest($userName,$password,$request)
  {
    $fields = array(
    	'UserName' => urlencode($userName),
    	'Password' => urlencode($password)
    );
    $this->fillFormAndSubmit($fields,$this->loginUrl);
  }

  public function registerSupplier($organisationName,$country,$phoneNumber,$timezone,$website,$firstName,$lastName,$email,$password,$path)
  {
    $fields = array(
    	'OrganisationName="'.$organisationName.'"',
    	'CountryId="'.$country.'"',
    	'PhoneNumber="'.$phoneNumber.'"',
    	'TimeZoneId="'.$timezone.'"',
    	'Website="'.$website.'"',
    	'FirstName="'.$firstName.'"',
    	'LastName="'.$lastName.'"',
      'Email="'.$email.'"',
      'ConfirmEmail="'.$email.'"',
      'Password="'.$password.'"',
      'ConfirmPassword="'.$password.'"',
      'HasAgreed="true"');
      $prefix = 'curl ';

    $this->fillFormAndSubmit($fields,$this->supplierUrl,$path);
  }

  public function registerBuyer($organisationName,$country,$phoneNumber,$timezone,$firstName,$lastName,$email,$confirmEmail,$password)
  {
    $this->fillFormAndSubmit([['id' => 'OrganisationName', 'value' => $organisationName, 'type' => 'text'], ['id' => 'CountryId','value' => $country, 'type' => 'select'],['id' => 'PhoneNumber','value' => $phoneNumber, 'type' => 'text'],['id' => 'TimeZoneId','value' => $timezone, 'type' => 'select'],['id' => 'Website','value' => $website, 'type' => 'text'],['id' => 'FirstName','value' => $firstName, 'type' => 'text'],['id' => 'LastName','value' => $lastName, 'type' => 'text'],['id' => 'Email','value' => $email, 'type' => 'text'],['id' => 'ConfirmEmail','value' => $confirmEmail, 'type' => 'text'],['id' => 'Password','value' => $password, 'type' => 'text'],['id' => 'ConfirmPassword','value' => $confirmPassword, 'type' => 'text']],$this->supplierUrl,$path);
  }

  public function fillFormAndSubmit($fields,$url,$path,$prefix = null)
  {
    $fields_string = implode(' -d ',$fields);
    $command = 'curl '.$prefix.' -d '.$fields_string.' '.$url.' > '.$path.'/response.html';
    // $logger = $this->container->get('monolog.logger.sourcedogg');
    // $logger->info('SourceDogg',['command' => $command]);
    //$process = new Process($command.' '.$url.' > ~/Desktop/response.html');
    $process = new Process($command.' '.$url);
    $process->run();

    return array(
        $process->getExitCode(),
        $process->getOutput(),
        $process->getErrorOutput(),
    );
  }

}
