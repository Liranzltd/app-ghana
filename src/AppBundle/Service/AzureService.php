<?php

namespace AppBundle\Service;

use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use AppBundle\Utils;
use AppBundle\Entity\AzureExtension;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

Class AzureService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
  }
  //get access token
  public function getToken()
  {
    $guzzle = new \GuzzleHttp\Client();
    $url = 'https://login.microsoftonline.com/' . $this->container->getParameter('azureTenantId') . '/oauth2/token?api-version=1.0';
    $token = json_decode($guzzle->post($url, [
        'form_params' => [
            'client_id' => $this->container->getParameter('azureClientId'),
            'client_secret' => $this->container->getParameter('azureClientSecret'),
            'resource' => 'https://graph.microsoft.com/',
            'grant_type' => 'client_credentials',
        ],
    ])->getBody()->getContents());
    return $token->access_token;
  }

  //get logged in user token
  public function getUserToken($username,$pwd)
  {
    $guzzle = new \GuzzleHttp\Client();
    $url = 'https://login.microsoftonline.com/' . $this->container->getParameter('azureTenantId') . '/oauth2/token?api-version=1.0';
    try {
      $token = json_decode($guzzle->post($url, [
          'form_params' => [
              'client_id' => $this->container->getParameter('azureClientId'),
              'client_secret' => $this->container->getParameter('azureClientSecret'),
              'resource' => 'https://graph.microsoft.com/',
              'grant_type' => 'password',
              'username'=> $username,
              'password' => $pwd,
              'scope' => 'openid'
          ],
      ])->getBody()->getContents());
      return $token->access_token;
    }
    catch(\Exception $e)
    {
      $this->errorReporting($e,'User Token creation');
    }
  }

  public function manageUser($em,$member,$action,$userPrincipalName,$firstName,$surname,$email,$pwd,$userType,$group,$website = null)
  {
    $token = $this->getToken();

    $graph = new Graph();
    $graph->setAccessToken($token);

    $email = $member->getEmail();

    $newUser = new Model\User();
    $newUser->setGivenName($firstName);
    $newUser->setSurname($surname);
    $newUser->setUserPrincipalName($userPrincipalName.'@appkenya.com');
    $newUser->setPasswordProfile(["forceChangePasswordNextSignIn" => false,'password' => $pwd]);
    $newUser->setDisplayName($firstName.' '.$surname);
    $newUser->setMailNickname($firstName.$surname);
    $newUser->setAccountEnabled(true);

    try {
      $user = $graph->createRequest($action, "/users")
            ->attachBody($newUser)
            ->setReturnType(Model\User::class)
            ->execute();
            //assign user group
            $this->assignUserToGroup($user,$group);
          // }

          //$this->inviteGuestUser($user,'Welcome to the APP Kenya extended services platform. You will now be able to access additional functionality of the APP to add value to your business.',$email);

          return  ['status' => 'Success', 'id' => $user->getId(), 'username' => $user->getUserPrincipalName()];
    } catch (\Exception $e) {
      $this->errorReporting($e,'User Creation');
      return  ['status' => 'Fail'];
    }

  }

  public function errorReporting($e,$where)
  {
    error_log(\GuzzleHttp\Psr7\str($e->getRequest()));
    error_log($e->getResponse()->getBody());
    $notifications = $this->container->get('app.notifications');
    $notifications->sendEmail('email/systems.html.twig','APP Kenya Error',"marvin@technologic-software.com",['message' => $e->getResponse()->getBody(), 'where' => $where],['oedgar@outlook.com']);
  }

  public function inviteGuestUser($user,$message,$email)
  {
    $router = $this->container->get('router');
    $context = $router->getContext();
    //$context->setHost('dev.appghana.com');
    $context->setScheme('https');
    //$context->setBaseUrl($this->container->getParameter('base_url'));

    $link = $router->generate('accept-invitation',['pragash' => $user->getConfirmationToken()],UrlGeneratorInterface::ABSOLUTE_URL);
    $logger = $this->container->get('monolog.logger.azure');
    $logger->info('Values',['Invite Link' => $link]);
    $invite = new Model\Invitation();
    $invite->setInvitedUserDisplayName($user->getFirstName().' '.$user->getLastname());
    $invite->setInvitedUserEmailAddress($email);
    $invite->setInvitedUserMessageInfo(['customizedMessageBody' => $message]);
    $invite->setSendInvitationMessage(true);
    $invite->setInviteRedirectUrl($link);
    $invite->setInvitedUserType('Member');
    $invite->setStatus('PendingAcceptance');
    //$invite->setInvitedUser($user);

    $token = $this->getToken();
    $graph = new Graph();
    $graph->setAccessToken($token);

    try {
      $response = $graph->createRequest('POST', "/invitations")
            ->attachBody($invite)
            ->setReturnType(Model\Invitation::class)
            ->execute();
            return $response;
    }
    catch(\Exception $e)
    {
      $this->errorReporting($e,'User Invitation');
    }

  }

  public function assignUserToGroup($id,$group)
  {

    $token = $this->getToken();
    $graph = new Graph();
    $graph->setAccessToken($token);

    //get group id on Azure AD
    if($group == 'Supplier')
    {
      $grp = $this->container->getParameter('azureSupplierGroupId');
    }
    else {
      $grp = $this->container->getParameter('azureBuyerGroupId');
    }

    $ugroup = $graph->createRequest('GET', "/groups/".$grp)
                ->setReturnType(Model\Group::class)
                ->execute();

    $newMemberRef = 'https://graph.microsoft.com/v1.0/users/' . $id;
    $groupMembersRef = '/groups/' . $ugroup->getId() . '/members/$ref';
    try {
      $response = $graph->createRequest('POST', $groupMembersRef)
              ->attachBody(['@odata.id' => $newMemberRef])
              ->execute();
    }
    catch(\Exception $e)
    {
      $this->errorReporting($e,'Assign User to Group');
    }
  }

  public function assignUserInformation($user,$app)
  {
    $token = $this->getToken();
    $graph = new Graph();
    $graph->setAccessToken($token)
    ->setApiVersion('beta');

    $newMemberRef = '/users/'.$user->getId().'/extensions';
    $response = $graph->createRequest('PATCH', $newMemberRef)
            ->attachBody([
                "company" => $user->getId(),
                "app_id" => "User",
                "resourceId" => $app,
                "creationTimestamp" => gmdate("Y-m-d\TH:i:s\Z")])
            ->execute();
  }

  public function assignUserToApp($id,$app)
  {
    $token = $this->getToken();
    $graph = new Graph();
    $graph->setAccessToken($token)
    ->setApiVersion('beta');

    $newMemberRef = '/users/'.$id.'/appRoleAssignments/'.$app;
    $response = $graph->createRequest('PATCH', $newMemberRef)
            ->attachBody([
                "principalId" => $id,
                "principalType" => "User",
                "resourceId" => $app,
                "creationTimestamp" => gmdate("Y-m-d\TH:i:s\Z")])
            ->execute();

  }

  public function modifyPassword($id,$pwd,$username,$oldpwd)
  {

    $token = $this->getUserToken('accounts@appkenya.com','ND0r@ng0');

    $graph = new Graph();
    $graph->setAccessToken($token);

    try {
      $resp = $graph->createRequest('PATCH', "/users/".$id)
        ->attachBody(['passwordProfile' => ["forceChangePasswordNextSignIn" => false,'password' => $pwd]])
        ->setReturnType(Model\User::class)
        ->execute();
    }
    catch(\Exception $e)
    {
      $this->errorReporting($e,'Modify password');
    }
  }

  public function modifyUser($action,$id)
  {
    $token = $this->getToken();
    $graph = new Graph();
    $graph->setAccessToken($token);

    $user = $this->getUser($id);

    //$user->setExtensions(['user.extensionattribute1' => 'Supplier']);

    $graph->createRequest('PATCH', "/users")
          ->attachBody($user)
          ->setReturnType(Model\User::class)
          ->execute();
  }
  public function createExtension($id,$description,$targetTypes)
  {
    $token = $this->getToken();
    // $graph = new Graph();
    // $graph->setAccessToken($token);

    $headers = [
        'Authorization: Bearer '.$token,
        'Content-Type: application/json'
    ];

    $data = json_encode(['id' => 'appkenya.com', 'description' => $description, 'targetTypes' => ["User"], "owner" => "eb1e7d00-3971-42a5-ab63-d08218456401","properties" => [
      array(
      "name" => "companyName",
      "type" => "String")
    ,
    array(
      "name" => 'appId',
      "type" => "Integer"),
      array("name" => "registrationDate",
      "type" => "String"
    ),
    array("name" => "registrationNumber",
    "type" => "String"),
    array(  "name" => "description",
      "type" => "String"),
    array("name" => "website",
    "type" => "String"),
    array("name" => "createdAt",
    "type" => "DateTime"),
    array("name" => "natureOfBusiness",
    "type" => "String")]]);

    $ch = curl_init('https://graph.microsoft.com/beta/schemaExtensions');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $arr = json_decode(curl_exec($ch),true);
    $logger = $this->container->get('monolog.logger.azure');
    $logger->info('Values',['ch' => $arr]);
    return $arr->id;
  }

  public function getUser($id)
  {
    $token = $this->getToken();
    $graph = new Graph();
    $graph->setAccessToken($token);

    $user = $graph->createRequest('GET', "/users/".$id)
  				      ->setReturnType(Model\User::class)
  				      ->execute();
  }

  public function createExtensionProperty($id,$name,$type)
  {
    $em = $this->container->get('doctrine');

    $token = $this->getToken();

    $data = [
      "@odata.type" => "microsoft.graph.openTypeExtension",
      "extensionName"   => $name,
      "dataType" => $dataType,
      "properties" => [
        array(
        "name" => "company",
        "type" => "String")
      ,
      array(
        "name" => 'id',
        "type" => "Integer"),
      array("name" => "registration_date",
      "type" => "string"
    ),
    ]];

    $headers = [
        'Authorization: Bearer '.$token,
        'Content-Type: application/json'
    ];

    $curl=curl_init();
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_URL,'https://graph.microsoft.com/beta/schemaExtensions');
    curl_setopt($curl,CURLOPT_CUSTOMREQUEST,'POST');
    curl_setopt($curl,CURLOPT_HEADER,false);
    curl_setopt($curl,CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);

    $out = curl_exec($curl);
    $codeCurl = curl_getinfo($curl,CURLINFO_HTTP_CODE);
    curl_close($curl);

    $arr = json_decode(json_encode($out),true);
    $logger = $this->container->get('monolog.logger.azure');
    $logger->info('Section',[$out]);
    $extension = new AzureExtension();
    $extension->setId($arr['objectId']);
    $extension->setDataType($arr['dataType']);
    $extension->setName($arr['name']);
    $em->persist($extension);
    $em->flush();

    // $extension = new AzureExtension();
    // $extension->setId($arr->objectId);
    // $extension->setDataType($arr->dataType);
    // $extension->setName($arr->name);
    // $extension->setTargetObjects($arr->targetObjects);
    // $em->persist($extension);
    // $em->flush();
  }


}
