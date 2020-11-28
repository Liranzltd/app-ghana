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

/**
 * @Route("/sourcedogg")
 */
class SourceDoggController extends Controller
{

  /**
  * Process request webhooks from sourcedogg
  * @Route("/request", name="sourcedogg-request")
  */
  public function sourceDoggRequestAction(Request $request)
  {

    $data = json_decode($request->getContent(),true);
    // $data = $request->request->all();
    // $logger = $this->container->get('monolog.logger.sourcedogg');
    // $logger->info('Source Dogg Hook',$data);

    $em = $this->container->get('doctrine')->getManager();
    $req = $em->getRepository('AppBundle:Request')->find($data['Id']);
    if(!$req)
    {
      $req = new SourceDoggRequest();
      $req->setId($data['Id']);
    }
    $deadline =  new \DateTime($data['DeadlineDetails']['DeadlineDate']);
    $timezone = new \DateTimeZone($data['DeadlineDetails']['UtcOffset']);
    $deadline->setTimezone($timezone);
    $req->setId($data['Id']);
    $req->setName($data['Name']);
    $req->setDescription($data['Description']);
    $req->setDeadline($deadline);
    //$req->setRequestType($data['RequestType']);
    $req->setRequestType($em->getRepository('AppBundle:Request')->find($data['TypeId']));
    if(array_key_exists('ExpectedDecisionDate',$data))
    {
      $req->setExpectedDecisionDate(new \DateTime($data['ExpectedDecisionDate']));
    }

    $req->setJoinedTotal($data['JoinedTotal']);
    $req->setPublicUrl($data['PublicUrl']);
    $req->setMessagesTotal(serialize($data['MessagesTotal']));
    $req->setNotesTotal($data['NotesTotal']);
    $req->setFilesTotal($data['FilesTotal']);
    $req->setCurrencyId($data['CurrencyId']);
    $req->setDateModified(new \DateTime($data['DateModified']));
    $req->setPublishDate(new \DateTime($data['PublishDate']));
    $req->setInvitationsTotal($data['IvitationsTotal']);
    $req->setResponsesTotal($data['ResponsesTotal']);
    $req->setCreateDate(new \DateTime($data['CreateDate']));
    $em->persist($req);

    foreach($data['Tags'] as $tag)
    {
      $category = $em->getRepository('AppBundle:Category')->findOneBy(['name' => $tag['Name']]);
      if($category)
      {
        if ($req->getTags()->contains($category)){
          // echo "Its already in";
        }else{
           $req->addTag($category);
           $em->persist($req);
        }
      }
    }

    foreach($data['Documents'] as $document)
    {
      $doc = $em->getRepository('AppBundle:RequestDocument')->find($document['Id']);
      if(!$doc)
      {
        $doc = new SourceDoggRequestDocument();
        $doc->setId($document['Id']);
      }
      $doc->setName($document['File']['Name']);
      $doc->setToken($document['File']['Token']);
      $doc->setType($document['File']['Type']);
      $doc->setExtension($document['File']['Extension']);
      $doc->setSize($document['File']['Size']);
      $doc->setUrl($document['File']['Url']);
      $doc->setIsLatest($document['IsLatest']);
      $doc->setUseLatest($document['UseLatest']);
      $doc->setRequest($req);
      $em->persist($doc);
    }

    $em->flush();
    return new Response('Source Dogg');
  }


  /**
   * @Route("/sourcedogg-test", name="sourcedogg-test")
   */
  public function sourceDoggTestAction()
  {
    $sourcedogg = $this->container->get('app.sourcedogg');
    $sourcedogg->logIn();
    return new Response('authorised');
  }
  /**
   * @Route("/sourcedogg-test", name="sourcedogg-test")
   */
  // public function sourceDoggTestAction()
  // {
  //
  //   $sourcedogg = $this->container->get('app.sourcedogg');
  //   $sourcedogg->registerBuyer($company->getOrganisationName(),$country,$company->getAddresses()->getPhoneNumber(),'EAT',$company->getAddresses()->getRegisteredBy()->FirstName(),$company->getAddresses()->getRegisteredBy()->LastName(),$company->getAddresses()->getRegisteredBy()->getEmail(),$company->getAddresses()->getRegisteredBy()->getEmail(),$company->getAddresses()->getRegisteredBy()->getUser()->getPlainPassword(),$company->getAddresses()->getRegisteredBy()->getUser()->getPlainPassword())
  // }
}
