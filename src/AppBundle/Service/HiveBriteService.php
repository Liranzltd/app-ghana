<?php

namespace AppBundle\Service;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Utils;
use Epfremme\Swagger\Factory\SwaggerFactory;

Class HiveBriteService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
  }

  // public function addUser()
  // {
  //   $factory = new SwaggerFactory();
  //   $swagger = $factory->build(realpath($this->container->get('kernel')->getRootDir().'/../web/swagger/network.json'));
  //   return $swagger;
  // }

  public function checkAuthenticated()
  {
    $session = new Session();
    //$session->invalidate();

    if($session->get('accessToken') && $session->get('refreshToken'))
    {

      if($session->get('createdAt') + $session->get('expiresIn') < time())
      {
        $session->invalidate();
        $session->start();
        $response = $this->fetchData($this->container->getParameter('hiveBriteUrlAccessToken'),['refresh_token' => $session->get('refreshToken'), 'grant_type' => 'refresh_token'],'POST');
        $session->set('accessToken',$response['access_token']);
        $session->set('expiresIn',$response['expires_in']);
        $session->set('refreshToken',$response['refresh_token']);
        $session->set('createdAt',$response['created_at']);
        $token = $response['access_token'];
      }
      else {
        $token = $session->get('accessToken');
      }
    }
    else {
      $response = $this->fetchData($this->container->getParameter('hiveBriteUrlAccessToken'),['scope' => 'admin','admin_email' => 'marvoh@gmail.com', 'password' => 'deadprez1', 'client_id' => $this->container->getParameter('hiveBriteUUID'),'client_secret' => $this->container->getParameter('hiveBriteSecret'), 'redirect_uri' => 'urn:ietf:wg:oauth:2.0:oob','grant_type' => 'password' ],'POST');
      $session->start();
      $session->set('accessToken',$response['access_token']);
      $session->set('expiresIn',$response['expires_in']);
      $session->set('refreshToken',$response['refresh_token']);
      $session->set('createdAt',$response['created_at']);
      $token = $response['access_token'];
    }
    return $token;
  }

  public function addNetwork($name)
  {
    return $this->postData(['title' => $name],$this->container->getParameter('hiveBriteUrlBaseUrl').'network/sub_networks','POST');
  }

  public function addCompany($company)
  {
    $address = $company->getAddresses();

    $activityService = $this->container->get('app.activity_service');
    $activityService->logUserActivity('HiveBrite','Added '.$company->getName().' to HiveBrite',$company->getRegisteredBy());

    //return $this->postData(['company' => ['name' => $company->getName(),'corporate_name' => $company->getTradingName(), 'company_identifier' => $company->getId(), 'group_name' => $company->getParentCompany(), 'company_number' => $company->getRegistrationNumber(), 'website_url' => $company->getWebsite(),'contact_info_phone1' => $company->getContacts()->first()->getMobile(), 'short_description' => Utils::truncate($company->getDescription(),200),'long_description' => $company->getDescription(),'founded_year' => $company->getRegistrationDate()->format('Y'), 'email' => $company->getRegisteredBy()->getEmail(),'jurisdiction' => $address->getCountry(), 'status' => 'draft','created_at' => new \DateTime(), 'updated_at' => new \DateTime(),'postal_location' => ['address_1' => $company->getName(), 'address_2' => $address->getBuildingName(), 'address_3' => $address->getStreet(), 'city' => $address->getTown(),'state' => $address->getRegion()->getName(),'postal_code' => $address->getPostalCode(), 'country' => $address->getCountry()]]],$this->container->getParameter('hiveBriteUrlBaseUrl').'companies');

    return $this->postData([
      'company' => [
        'name' => $company->getName(),
        'corporate_name' => $company->getTradingName(),
        'company_identifier' => $company->getId(),
        'group_name' => $company->getParentCompany(),
        'company_number' => $company->getRegistrationNumber(),
        'website_url' => $company->getWebsite(),
        'contact_info_phone1' => $company->getContacts()->first()->getPhone(),
        'short_description' =>Utils::truncate($company->getDescription(),200),
        'long_description' => $company->getDescription(),
        'email' => $company->getRegisteredBy()->getEmail(),
        'jurisdiction' => 'GH',
        'status' => 'draft',
        'created_at' => new \DateTime(),
        'updated_at' => new \DateTime(),
        'postal_location' => [
          'address_1' => $company->getName(),
          //'address_2' => $address->getBuildingName(),
          //'address_3' => $address->getStreet(),
          'city' => $address->getTown(),
          //'state' => $address->getRegion()->getName(),
          'postal_code' => $address->getPostalCode(),
          'country' => $address->getCountry()
          ]
        ]
      ],$this->container->getParameter('hiveBriteUrlBaseUrl').'companies','POST');

  }

  public function addFollowers($group,$hiveBriteId)
  {
    return $this->postData(['topic_id' => $group, 'user_ids' => $hiveBriteId],$this->container->getParameter('hiveBriteUrlBaseUrl').'topics/'.$group.'/followers','POST');
  }

  public function editCompany($company)
  {
    $address = $company->getAddresses();
    return $this->postData(['company' => ['name' => $company->getName(), 'corporate_name' => $company->getTradingName(), 'company_identifier' => $company->getId(), 'group_name' => $company->getParentCompany(), 'company_number' => $company->getRegistrationNumber(), 'website_url' => $company->getWebsite(), 'contact_info_phone1' => $company->getContacts()->first()->getMobile(), 'short_description' => Utils::truncate($company->getDescription(),200), 'long_description' => $company->getDescription(), 'founded_year' => $company->getRegistrationDate()->format('Y'), 'email' => $company->getRegisteredBy()->getEmail(), 'jurisdiction' => $address->getCountry(), 'status' => 'draft','created_at' => new \DateTime(), 'updated_at' => new \DateTime(), 'postal_location' => ['address_1' => $company->getName(), 'address_2' => $address->getBuildingName(), 'address_3' => $address->getStreet(), 'city' => $address->getTown(), 'state' => $address->getRegion()->getName(), 'postal_code' => $address->getPostalCode(), 'country' => $address->getCountry()]]],$this->container->getParameter('hiveBriteUrlBaseUrl').'companies/'.$company->getHiveBriteId());

  }

  public function addUser($subnetworks,$firstname,$maiden,$member_id,$mobile,$email)
  {
    return $this->postData(["user" => ["email" => $email,"sub_network_ids" => $subnetworks,"firstname" => $firstname,"lastname" => $maiden,"external_id" => $member_id,"sso_identifier" =>  $email,"is_active" => true,"mobile_perso" => $mobile, "role_id" => 152]],$this->container->getParameter('hiveBriteUrlBaseUrl').'users','POST');
  }

  public function getNetworks()
  {
    $token = $this->checkAuthenticated();
    return $this->fetchData($this->container->getParameter('hiveBriteUrlBaseUrl').'network',['access_token' => $token],'GET');
  }

  public function getMe()
  {
    $token = $this->checkAuthenticated();
    return $this->fetchData($this->container->getParameter('hiveBriteUrlBaseUrl').'me',['access_token' => $token],'GET');
  }

  public function postData($data,$url,$method)
  {
    $token = $this->checkAuthenticated();
    $options  = array (
        'http' =>
        array (
          'ignore_errors' => true,
          'method' => $method,
          'header' =>
          array (
            0 => 'authorization: Bearer '.$token,
            1 => 'Content-Type: application/x-www-form-urlencoded',
          ),
          'content' =>
           http_build_query( $data),
        ),
      );

      $context  = stream_context_create( $options );
      $response = json_decode(file_get_contents(
          $url,
          false,
          $context
      ));
      $logger = $this->container->get('monolog.logger.hivebrite');
      $logger->info('Post',['data' => $data, 'url' => $url, 'token' => $token]);
      $logger->info('Response',[$response]);
      return $response;
  }

  public function fetchData($url,$data,$method)
  {


    if($method != 'POST')
    {

      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($data));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
      $headers = array();
      $headers[] = "Accept: application/json";
      $headers[] = "Content-Type: application/x-www-form-urlencoded";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

      return json_decode(curl_exec($ch),true);
    }
    else {
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Content-Type: application/json',
          'Content-Length: ' . strlen(json_encode($data)))
      );
      // $logger = $this->container->get('monolog.logger.hivebrite');
      // $logger->info('Post',[$data]);
      $response  = json_decode(curl_exec($ch),true);
      // $logger->info('Response',[$response]);
      return $response;
    }
  }
}


?>
