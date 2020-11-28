<?php

namespace AppBundle\Service;
use Application\Sonata\UserBundle\Entity\User;
use FOS\UserBundle\Util\TokenGeneratorInterface;
use AppBundle\Utils;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use AppBundle\Entity\Member;
use AppBundle\Entity\BuyerMembership;

Class UserService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
  }

  //create new user
  public function createUser($name,$lastname,$email,$password,$group,$mobile = null)
  {
    $em = $this->container->get('doctrine')->getManager();
    $tokenGenerator = $this->container->get('fos_user.util.token_generator');

    //find user group
    $group = $em->getRepository('ApplicationSonataUserBundle:Group')->findOneBy(array('name' => $group));

    // $logger = $this->container->get('monolog.logger.email');
    // $logger->info('reg', ['firstname' => $name, 'surname' => $lastname, 'email' => $email, 'browser' => $_SERVER['HTTP_USER_AGENT']]);

    //persist user
    $user = new User();
    $user->setUsername($email);
    $user->setEmail($email);
    $user->setPlainPassword($password);
    $user->setFirstname($name);
    $user->setLastname($lastname);
    $user->setPhone($mobile);
    $user->setConfirmationToken($tokenGenerator->generateToken());
    $user->setEnabled(false);
    $user->addGroup($group);
    $em->persist($user);
    $em->flush();

    return $user;
  }
  public function createBuyerNotifications($em,$firstName,$surname,$email,$gender,$mobile,$tel,$buyer,$isAdmin)
  {
    $templateFile = "AppBundle:Email:buyer.html.twig";
    $tokenGenerator = $this->container->get('fos_user.util.token_generator');
    $group = $em->getRepository('ApplicationSonataUserBundle:Group')->findOneBy(array('name' => 'Buyer'));

    $user = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(['username' => $email]);
    $password = '';
    if(!$user)
    {
      $user = new User();
      $password = Utils::randomChars(10);
      $user->setPlainPassword($password);
      $user->setUsername($email);
      $user->setEmail($email);
      $user->setFirstname($firstName);
      $user->setLastname($surname);
      $user->setPhone($mobile);
      $user->setConfirmationToken($tokenGenerator->generateToken());
      $user->setEnabled(false);
    }
    else {
      $link = $this->container->get('router')->generate('portal',[], UrlGeneratorInterface::ABSOLUTE_URL);
    }
    $user->addGroup($group);
    $em->persist($user);
    $em->flush();

    $member = $em->getRepository('AppBundle:Member')->findOneBy(['email' => $email]);

    if(!$member)
    {
      $member = new Member();
      $member->setFirstName($firstName);
      $member->setSurname($surname);
      $member->setEmail($email);
      $member->setGender($gender);
      $member->setMobile($mobile);
      $member->setTel($tel);
      $member->setUser($user);
      $em->persist($member);
      $azure_service = $this->container->get('app.azure');
      $azureUser = $azure_service->inviteGuestUser($user,'Welcome to the APP Ghana extended services platform. Please complete the account confirmation to be able to access additional functionality of the APP to add value to your business.',$email);
      if($azureUser)
        $member->setAzureId($azureUser->getInvitedUser()->getId());
      $em->persist($member);
    }

    $em->flush();

    $bm = $em->getRepository('AppBundle:BuyerMembership')->findOneBy(['member' => $member]);
    if(!$bm)
    {
      $bm = new BuyerMembership();
    }
    $bm->setIsAdmin($isAdmin);
    $bm->setMember($member);
    $bm->setBuyer($buyer);
    $em->persist($bm);
    $em->flush();


    $notification = $this->container->get('app.notifications');
    $notification->sendEmail($templateFile,'African Partner Pool',$email,['name' => $firstName, 'password' => $password, 'username' => $email, 'link' => $link, 'buyer' => $buyer]);
  }
  public function createStaff($args)
  {
    $entity = $args->getEntity();
    $em = $args->getEntityManager();
    $templateFile = "AppBundle:Email:staff.html.twig";
    $templateContent = $this->container->get('twig')->loadTemplate($templateFile);
    $group = $em->getRepository('ApplicationSonataUserBundle:Group')->findOneBy(array('name' => 'IIA'));

    if($entity->getUser())
    {
        $user = $em->getRepository('ApplicationSonataUserBundle:User')->find($entity->getUser()->getId());
        $title = "Update";
    }
    else {
      $user = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(['username' => $entity->getEmail()]);
      if(!$user)
      {
        $user = new User();
      }
      $title = "Registration";

    }
    $password = $entity->randomPassword();
    $user->setPlainPassword($password);
    $user->setUsername($entity->getEmail());
    $user->setEmail($entity->getEmail());
    $user->setEnabled(true);
    $user->setFirstname($entity->getFirstname());
    $user->setLastname($entity->getLastname());
    // $user->setPhone($entity->getMobile());
    $user->addGroup($group);

    if($title == "Update")
      {
        $em->merge($user);
      }
      else {
        $em->persist($user);
      }
    $entity->setUser($user);
    $em->persist($entity);
    $em->flush();

    $name = $entity->getFirstname();
    $email = $entity->getEmail();


    $body = $templateContent->render(array('name' => $name, 'password' => $password, 'username' => $entity->getEmail()));

    // $message = \Swift_Message::newInstance()
    //         ->setSubject($title.' to African Partner Pool Admin')
    //         ->setFrom(array($this->container->getParameter('noreply') => 'Welcome to African Partner Pool'))
    //         ->setTo($entity->getEmail())
    //         ->setContentType('text/html')
    //         ->setBody($body)
    //     ;
    // $this->container->get('mailer')->send($message);

    $message =  (new \Swift_Message($title.' to African Partner Pool Admin'));
    $message->setFrom(array($this->container->getParameter('noreply') => 'Welcome to African Partner Pool'))
            ->setTo($entity->getEmail())
            //->setCc($cc)
            ->setContentType('text/html')
            ->setBody($body)
        ;
    $this->container->get('mailer')->send($message);

  }
}
