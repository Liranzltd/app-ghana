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

Class SourceDoggServiceSelenium
{
  protected $container;
  protected $webDriver;
  protected $loginUrl;
  protected $buyerUrl;
  protected $sellerUrl;

  public function  __construct($container)
  {
      $this->container = $container;
      $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'chrome');
      $this->webDriver = \RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
      $this->loginUrl = $container->getParameter('sourcedogg.login');
      $this->buyerUrl = $container->getParameter('sourcedogg.buyerUrl');
      $this->supplierUrl = $container->getParameter('sourcedogg.supplierUrl');
  }

  public function logIn($userName,$password)
  {
    $this->webDriver->get($this->loginUrl);
    $this->fillFormAndSubmit([['id' => 'UserName','value' => $userName, 'type' => 'text'], ['id' => 'Password','value' => $password, 'type' => 'text']],$this->loginUrl,'auth-login-main');
  }

  public function openRequest($userName,$password,$request)
  {
    $this->webDriver->get($this->loginUrl.'/request/'.$request);
    $this->fillFormAndSubmit([['id' => 'UserName','value' => $userName, 'type' => 'text'], ['id' => 'Password','value' => $password, 'type' => 'text']],$this->loginUrl,'auth-login-main');
    //echo $this->loginUrl.'/request/'.$request;
    //$this->fillFormAndSubmit([['id' => 'UserName','value' => $userName, 'type' => 'text'], ['id' => 'Password','value' => $password, 'type' => 'text']],$this->loginUrl,'auth-login-main');
  }

  public function registerSupplier($organisationName,$country,$phoneNumber,$timezone,$website,$firstName,$lastName,$email,$password)
  {
    $arr =[['id' => 'OrganisationName','value' => $organisationName, 'type' => 'text'],['id' => 'CountryId','value' => $country, 'type' => 'select'],['id' => 'PhoneNumber','value' => $phoneNumber, 'type' => 'text'],['id' => 'TimeZoneId','value' => $timezone, 'type' => 'select'],['id' => 'Website','value' => $website, 'type' => 'text'],['id' => 'FirstName','value' => $firstName, 'type' => 'text'],['id' => 'LastName','value' => $lastName, 'type' => 'text'],['id' => 'Email','value' => $email, 'type' => 'text'],['id' => 'ConfirmEmail','value' => $email, 'type' => 'text'],['id' => 'Password','value' => $password, 'type' => 'text'],['id' => 'ConfirmPassword','value' => $password, 'type' => 'text'], ['id' => 'HasAgreed', 'type' => 'checkbox']];
    // print_r($arr);
    // exit;
    //$this->webDriver->get($this->supplierUrl);

    $this->fillFormAndSubmit($arr,$this->supplierUrl,'form-horizontal');
  }

  public function registerBuyer($organisationName,$country,$phoneNumber,$timezone,$firstName,$lastName,$email,$confirmEmail,$password)
  {
    $this->webDriver->get($this->loginUrl);
    $this->fillFormAndSubmit([['id' => 'OrganisationName', 'value' => $organisationName, 'type' => 'text'], ['id' => 'CountryId','value' => $country, 'type' => 'select'],['id' => 'PhoneNumber','value' => $phoneNumber, 'type' => 'text'],['id' => 'TimeZoneId','value' => $timezone, 'type' => 'select'],['id' => 'Website','value' => $website, 'type' => 'text'],['id' => 'FirstName','value' => $firstName, 'type' => 'text'],['id' => 'LastName','value' => $lastName, 'type' => 'text'],['id' => 'Email','value' => $email, 'type' => 'text'],['id' => 'ConfirmEmail','value' => $confirmEmail, 'type' => 'text'],['id' => 'Password','value' => $password, 'type' => 'text'],['id' => 'ConfirmPassword','value' => $confirmPassword, 'type' => 'text']],$this->supplierUrl,'form-horizontal');
  }

  public function fillFormAndSubmit($inputs,$url,$form)
  {
      //echo shell_exec('echo Tecmint is a community of Linux Nerds > /tmp/xvfb-run.log 2> /tmp/xvfb.err');
      $process = new Process('/usr/bin/xvfb-run --server-args="-screen 0, 1366x768x24" selenium-standalone start');
      //$process = new Process('echo Tecmint is a community of Linux Nerds > /tmp/xvfb-run.log 2> /tmp/xvfb.err');
      $process->run();
      echo $process->getOutput();
      usleep(3000000);
      // executes after the command finishes
      if (!$process->isSuccessful()) {
          throw new ProcessFailedException($process);
      }
      $this->webDriver->get($url);
      $body = $this->webDriver->findElement(\WebDriverBy::cssSelector('body'))->sendKeys(array(\WebDriverKeys::CONTROL, 't'));
      $form = $this->webDriver->findElement(\WebDriverBy::className($form));

      foreach ($inputs as $input) {

          if($input['type'] == 'select')
          {
            //PHPUnit_Extensions_Selenium2TestCase_Element_Select::fromElement($input['id'])->selectOptionByValue($input['value']);
            //PHPUnit_Extensions_Selenium2TestCase_Element_Select::fromElement($this->byId('selectMenu'))->selectOptionByValue('t3');
            //$this->select($this->byId($input['id']))->selectOptionByValue($input['value']);
            $select = new \WebDriverSelect($form->findElement(\WebDriverBy::id($input['id'])));
            $select->selectByValue($input['value']);
          }
          elseif($input['type'] == 'checkbox')
          {
            $form->findElement(\WebDriverBy::id($input['id']))->click();
          }
          else {
            //echo $input['id'];
            $form->findElement(\WebDriverBy::id($input['id']))->sendKeys($input['value']);
          }
      }

      $form->submit();
      echo shell_exec('pkill -f selenium-standalone');
      //$this->waitForUserInput();
  }

}
