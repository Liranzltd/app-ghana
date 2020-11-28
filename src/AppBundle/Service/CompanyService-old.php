<?php

namespace AppBundle\Service;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\CrbCheck;
use AppBundle\Entity\Member;
use AppBundle\Entity\Company;
use AppBundle\Entity\CompanyAddress;
use AppBundle\Entity\CompanyContact;
use AppBundle\Entity\CompanyDocumentation;
use AppBundle\Entity\CompanyDirector;
use AppBundle\Entity\CompanyShareholding;
use AppBundle\Entity\CompanyReference;
use AppBundle\Entity\VerificationStep;
use AppBundle\Entity\CompanyVerification;
use AppBundle\Utils;


Class CompanyService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
  }

  public function saveSection1($em,$company,$data,$files,$member)
  {
    $logger = $this->container->get('monolog.logger.deb');
    $logger->info('Section',['section' => 'here']);
    $date = \DateTime::createFromFormat('d/m/Y',$data['registrationDate']);
    $company->setName(trim($data['name']));
    $company->setCompanyType($em->getRepository('AppBundle:CompanyType')->find($data['organisationType']));
    $company->setRegistrationNumber(trim($data['registrationNo']));
    $company->setRegistrationDate($date);
    $company->setGraTinNumber(trim($data['graTinNumber']));
    $company->setDescription(trim($data['description']));
    $company->setParentCompany(trim($data['parentCompany']));
    $company->setTradingName(trim($data['tradingName']));
    $company->setWebsite(trim($data['website']));
    $company->setNatureOfBusiness($data['otherNatureOfBusiness'] == null ? trim($data['natureOfBusiness']) : trim($data['otherNatureOfBusiness']));
    $company->setPowerOfAttorney($data['powerOfAttorney'] == 'Yes' ? true : false);
    if(array_key_exists('learnAboutUs', $data))
    {
      $company->setLearnAboutUs(implode(", ", $data['learnAboutUs']));
    }

    if(array_key_exists('memberType',$data))
    {
      $company->setMemberType(trim($data['memberType']));
    }

    if(array_key_exists('companyLogo',$files) && $files['companyLogo'] != null)
    {
      $logo = $files['companyLogo'];
      $filename = uniqid().'.'.$logo->guessExtension();
      $logo->move($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
      $company->setCompanyLogo($filename);
    }

    // if(array_key_exists('powerOfAttorneyFile',$files) && $files['powerOfAttorneyFile'] != null)
    // {
    //   $pa = $files['powerOfAttorneyFile'];
    //   $filename = uniqid().'.'.$pa->guessExtension();
    //   $pa->move($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
    //   $company->setPowerOfAttorneyFile($filename);
    // }

    $activityService = $this->container->get('app.activity_service');
    $activityService->logUserActivity('RFI','Completed Section One '.$company->getName(),$member);

    try {
      $company->setSection1Complete(true);
      $em->persist($company);
      $em->flush();
      return ['title' => 'Submission successful!','section' => 'General Infomation was saved', 'type' => 'success', 'tab' => 1];
    } catch (Exception $e) {
      return ['title' => 'Submission error!','section' => 'General Infomation not saved', 'type' => 'danger', 'tab' => 1];
    }


  }

  public function saveSection2($em,$company,$data,$member)
  {
    if(array_key_exists('buildingName',$data) && $data['buildingName'] != '')
    {
      $address = $company->getAddresses();
      if(!$address)
      {
        $address = new CompanyAddress();
      }
      $address->setCompany($company);
      $address->setBuildingNumber(trim($data['buildingNumber']));
      $address->setBuildingName(trim($data['buildingName']));
      $address->setStreet(trim($data['street']));
      $address->setTown(trim($data['town']));
      if(array_key_exists('region',$data))
      {
        $region = $em->getRepository('AppBundle:Province')->find($data['region']);
        $address->setRegion($region);
      }
      if(array_key_exists('country',$data))
      {
        $address->setCountry(trim($data['country']));
      }

      $address->setPostalAddress(trim($data['postalAddress']));
      $address->setPostalCode(trim($data['postalCode']));
      $address->setPredominantLandmark(trim($data['predominantLandmark']));
      $company->setNumberOfBranches(trim($data['numberOfBranches']));

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section Two '.$company->getName(),$member);

      try {
        $company->setSection2Complete(true);
        $em->persist($address);
        $em->persist($company);
        $em->flush();
        return ['title' => 'Submission successful!','section' => 'Company address section saved', 'type' => 'success', 'tab' => 2];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Company address section not saved', 'type' => 'danger', 'tab' => 2];
      }
    }
  }

  public function saveSection3($em,$company,$data,$files,$member)
  {
    if(array_key_exists('contacts',$data) && $data['contacts']['name'][0] != '')
    {
        for($j=0;$j<count($data['contacts']['name']);$j++)
        {
          if($data['contacts']['email'][$j] != '' && $data['contacts']['name'][$j] != '')
          {
            $contact = $em->getRepository('AppBundle:CompanyContact')->findOneBy(['email' => $data['contacts']['email'][$j], 'company' => $company]);
            if(!$contact)
            {
              $contact = new CompanyContact();
            }
            $contact->setEmail(trim($data['contacts']['email'][$j]));
            $contact->setName(trim($data['contacts']['name'][$j]));
            $contact->setPhone(trim($data['contacts']['phone'][$j]));
            $contact->setMobile(trim($data['contacts']['mobile'][$j]));
            $contact->setContactAddress(trim($data['contacts']['address'][$j]));
            $contact->setCompany($company);
            $contact->setDesignation(trim($data['contacts']['designation'][$j]));
            $em->persist($contact);
          }
        }

        $activityService = $this->container->get('app.activity_service');
        $activityService->logUserActivity('RFI','Completed Section Three '.$company->getName(),$member);

        try {
          $company->setSection3Complete(true);
          $em->persist($company);
          $em->flush();
          return ['title' => 'Submission successful!','section' => 'Contact information section saved', 'type' => 'success', 'tab' => 3];
        } catch (Exception $e) {
          return ['title' => 'Submission error!','section' => 'Contact information section not saved', 'type' => 'danger', 'tab' => 3];
        }
    }
  }

  public function saveSection4($em,$company,$data,$files,$member)
  {
    $logger = $this->container->get('monolog.logger.deb');
    $logger->info('Section',['section' => 'there']);
    if(array_key_exists('documents',$data) && count($data['documents']['documentNumber'][0]) != 0)
    {
      for($j=0;$j<count($data['documents']['documentNumber']);$j++)
      {
        if($data['documents']['documentNumber'][$j] != null)
        {
          $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find($data['documents']['documentType'][$j]);

          if(array_key_exists('documents',$files) && in_array($doc_type,$files['documents']['file']))
          {
            $doc = $files['documents']['file'][$doc_type];
            $filename = uniqid().'.'.$doc->guessExtension();
            $doc->move($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
            $document->setFile($filename);
          }
          else {
            $filename = null;
          }
          $this->addDocument($em,$company,$doc_type,$filename,trim($data['documents']['documentNumber'][$j]),trim($data['documents']['issuedBy'][$j]),$data['documents']['issueDate'][$j],$data['documents']['expiryDate'][$j],'Awaiting Verification');
        }
      }

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section Four '.$company->getName(),$member);

      try {
        $company->setSection4Complete(true);
        $em->persist($company);
        $em->flush();
        return ['title' => 'Submission successful!','section' => 'Registration documents section saved', 'type' => 'success', 'tab' => 4];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Registration documents section not saved', 'type' => 'danger', 'tab' => 4];
      }
    }
  }
  public function saveSection5($em,$company,$data,$member)
  {
    if($data['numberOfEmployees'] != null || (array_key_exists('roles',$data) && $data['roles']['name'][0] != ''))
    {
      $company->setNumberOfEmployees($data['numberOfEmployees'] == null ? 0 : trim($data['numberOfEmployees']));

      if(array_key_exists('employDisabled',$data))
      {
        $company->setEmployDisabled($data['employDisabled'] == 'Yes' ? true : false);
      }

      if(array_key_exists('roles',$data) && $data['roles']['name'][0] != '')
      {
          for($j=0;$j<count($data['roles']['name']);$j++)
          {
            if($data['roles']['name'][$j] !== null && $data['roles']['role'][$j] != null)
            {
              $role = $em->getRepository('AppBundle:CompanyDirector')->findOneBy(['name' => $data['roles']['name'][$j], 'company' => $company]);
              if(!$role)
              {
                $role = new CompanyDirector();
              }
              $role->setName(trim($data['roles']['name'][$j]));
              $role->setRole(trim($data['roles']['role'][$j]));
              $role->setCompany($company);
              $em->persist($role);
            }
          }
      }


      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section Five '.$company->getName(),$member);

      try {
        $company->setSection5Complete(true);
        $em->persist($company);
        $em->flush();
        return ['title' => 'Submission successful!','section' => 'Organisational Structures section saved', 'type' => 'success', 'tab' => 5];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Organisational Structure section not saved', 'type' => 'danger', 'tab' => 5];
      }
    }
  }
  public function saveSection6($em,$company,$data,$files,$member)
  {
    if($data['shareOfGhanaianEmployees'] != null || $data['shareOfGhanaianManagementEmployees'] != null || $data['shareOfGhanaianDirectors'] != null || array_key_exists('localContent',$data))
    {
      $company->setShareOfKenyanEmployees($data['shareOfGhanaianEmployees'] == null ? 0 : trim($data['shareOfGhanaianEmployees']));
      $company->setShareOfKenyanManagementEmployees($data['shareOfGhanaianManagementEmployees'] == null ? 0 : trim($data['shareOfGhanaianManagementEmployees']));
      $company->setShareOfKenyanDirectors($data['shareOfGhanaianDirectors'] == null ? 0 : trim($data['shareOfGhanaianDirectors']));
      if(array_key_exists('localContent',$data))
      {
        $company->setLocalContent($data['localContent'] == 'Yes' ? true : false);
      }


      if(array_key_exists('localContentFile',$files) && $files['localContentFile'] != null)
      {
        $localContentFile = $files['localContentFile'];
        $filename = uniqid().'.'.$localContentFile->guessExtension();
        $localContentFile->move($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
        $company->setLocalContentFile($filename);
      }

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section Six '.$company->getName(),$member);

      try {
        $company->setSection6Complete(true);
        $em->persist($company);
        $em->flush();
        return ['title' => 'Submission successful!','section' => 'Local Content section saved', 'type' => 'success', 'tab' => 6];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Local Content section not saved', 'type' => 'danger', 'tab' => 6];
      }
    }
  }
  public function saveSection7($em,$company,$data,$files,$member)
  {
    $company->setKenyanOwnershipPercentage($data['ghanaianOwnershipPercentage'] == null ? 0 : trim($data['ghanaianOwnershipPercentage']));
    if(array_key_exists('ownershipWomen',$data))
    {
      $company->setOwnershipWomen($data['ownershipWomen'] == 'Yes' ? true : false);
    }
    if(array_key_exists('ownershipUnder30',$data))
    {
      $company->setOwnershipUnder30($data['ownershipUnder30'] == 'Yes' ? true : false);
    }

    if(array_key_exists('shareholding',$data) && $data['shareholding']['name'][0] != '')
    {
        for($j=0;$j<count($data['shareholding']['name']);$j++)
        {
          if($data['shareholding']['name'][$j] !== null && $data['shareholding']['nationality'][$j] != null && $data['shareholding']['shares'][$j] != null)
          {
            $shareholding = $em->getRepository('AppBundle:CompanyShareholding')->findOneBy(['name' => $data['shareholding']['name'][$j], 'nationality' => $data['shareholding']['nationality'][$j], 'company' => $company]);
            if(!$shareholding)
            {
              $shareholding = new CompanyShareholding();
            }
            $shareholding->setName(trim($data['shareholding']['name'][$j]));
            $shareholding->setShares(trim($data['shareholding']['shares'][$j]));
            $shareholding->setPercentage(trim($data['shareholding']['percentage'][$j]));
            $shareholding->setNationality(trim($data['shareholding']['nationality'][$j]));
            $shareholding->setCompany($company);
            $em->persist($shareholding);
          }
        }
    }

    $activityService = $this->container->get('app.activity_service');
    $activityService->logUserActivity('RFI','Completed Section Seven for '.$company->getName(),$member);

    try {
      $company->setSection7Complete(true);
      $em->persist($company);
      $em->flush();
      return ['title' => 'Submission successful!','section' => 'Ownership structure section saved', 'type' => 'success', 'tab' => 7];
    } catch (Exception $e) {
      return ['title' => 'Submission error!','section' => 'Ownership structure section not saved', 'type' => 'danger', 'tab' => 7];
    }
  }
  public function saveSection8($em,$company,$data,$member)
  {
    if(array_key_exists('provinces',$data) || array_key_exists('categories',$data))
    {
      if(array_key_exists('provinces',$data))
      {
        for($i=0;$i<count($data['provinces']);$i++)
        {
          if($data['provinces'][$i] != null)
          {

            $province = $em->getRepository('AppBundle:Province')->findOneBy(['name' => trim($data['provinces'][$i])]);
            if(!$company->getProvinces()->contains($province))
            {
              $province->addCompany($company);
              $company->addProvince($province);
              $em->persist($province);
            }
          }
        }
      }
      if(array_key_exists('categories',$data))
      {
        for($i=0;$i<count($data['categories']);$i++)
        {
          $category = $em->getRepository('AppBundle:Category')->find($data['categories'][$i]);
          if(!$company->getCategories()->contains($category))
          {
            $category->addCompany($company);
            $company->addCategory($category);
            $em->persist($category);
          }
        }
      }

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section Eight for '.$company->getName(),$member);

      try {
        $company->setSection8Complete(true);
        $em->persist($company);
        $em->flush();
        return ['title' => 'Submission successful!','section' => 'Product / Service Codes section saved', 'type' => 'success', 'tab' => 8];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Product / Service Codes section not saved', 'type' => 'danger', 'tab' => 8];
      }
    }
  }
  public function saveSection9($em,$company,$data,$files,$member)
  {
    // $company->setLargestAssignment($data['largestAssignment'] != null ? trim($data['largestAssignment']) : null);
    // $company->setLargestAssignmentCurrency($data['largestAssignmentCurrency'] != null ? trim($data['largestAssignmentCurrency']) : null);
    // $company->setLargestAssignmentSuccess($data['largestAssignmentSuccess'] == 'Yes' ? 1 : 0);
    // $company->setLargestAssignmentContactName($data['largestAssignmentContactName'] != null ? trim($data['largestAssignmentContactName']) : null);
    // $company->setLargestAssignmentContactTelephone($data['largestAssignmentContactTelephone'] != null ? trim($data['largestAssignmentContactTelephone']) : null);
    // $company->setLargestAssignmentCompanyName($data['largestAssignmentCompanyName'] != null ? trim($data['largestAssignmentCompanyName']) : null);
    // $company->setLargestAssignmentDateEngaged($data['largestAssignmentDateEngaged'] != null ? \DateTime::createFromFormat('d/m/Y',$data['largestAssignmentDateEngaged']) : null);
    // $company->setLargestAssignmentDateTerminated($data['largestAssignmentDateTerminated'] != null ? \DateTime::createFromFormat('d/m/Y',$data['largestAssignmentDateTerminated']) : null);



    // if(array_key_exists('largestAssignmentFile',$files) && $files['largestAssignmentFile'] != null)
    // {
    //   $largestAssignmentFile = $files['largestAssignmentFile'];
    //   $filename = uniqid().'.'.$largestAssignmentFile->guessExtension();
    //   $largestAssignmentFile->move($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
    //   $company->setLargestAssignmentFile($filename);
    // }

    if(array_key_exists('references',$data) && ($data['references']['client']) > 0)
    {
        for($j=0;$j<count($data['references']['client']);$j++)
        {
          if($data['references']['client'][$j] !== null && $data['references']['telephone'][$j] != null && $data['references']['contactPerson'][$j] != null)
          {
            $this->manageReferences($em,$company,trim($data['references']['id'][$j]),trim($data['references']['client'][$j]),trim($data['references']['description'][$j]),trim($data['references']['valueOfContract'][$j]),trim($data['references']['currency'][$j]),trim($data['references']['designation'][$j]),trim($data['references']['email'][$j]),trim($data['references']['telephone'][$j]),trim($data['references']['contactPerson'][$j]));
          }
        }

        $activityService = $this->container->get('app.activity_service');
        $activityService->logUserActivity('RFI','Completed Section Nine for '.$company->getName(),$member);

        try {
          $company->setSection9Complete(true);
          $em->persist($company);
          $em->flush();
          return ['title' => 'Submission successful!','section' => 'Commercial References section saved', 'type' => 'success', 'tab' => 9];
        } catch (Exception $e) {
          return ['title' => 'Submission error!','section' => 'Commercial References section not saved', 'type' => 'danger', 'tab' => 9];
        }
    }
  }
  public function saveSection10($em,$company,$data,$files,$member)
  {
    if($data['bankName'] != null || $data['approxTurnover'] != null || $data['bankBranch'] != null || array_key_exists('bankruptcy',$data) || array_key_exists('creditChecks',$data) || $data['approxTurnover'] != null)
    {
      $company->setBankName($data['bankName'] != null ? trim($data['bankName']) : null);
      $company->setBankBranch($data['bankBranch'] != null ? trim($data['bankBranch']) : null);
      if(array_key_exists('bankruptcy',$data))
      {
        $company->setBankruptcy($data['bankruptcy'] == 'Yes' ? 1 : 0);
      }
      if(array_key_exists('creditChecks',$data))
      {
        $company->setCreditChecks($data['creditChecks'] == 'Yes' ? 1 : 0);
      }

      //$company->setBankTel($data['bankTel'] != null ? trim($data['bankTel']) : null);
      $company->setApproxTurnover($data['approxTurnover'] != null ? trim($data['approxTurnover']) : null);

      if(array_key_exists('auditedStatements',$files) && $files['auditedStatements'] != null)
      {
        $auditedStatements = $files['auditedStatements'];
        $filename = uniqid().'.'.$auditedStatements->guessExtension();
        $auditedStatements->move($this->container->getParameter('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
        $company->setAuditedStatements($filename);
      }

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section Ten for '.$company->getName(),$member);

      try {
        $company->setSection10Complete(true);
        $em->persist($company);
        $em->flush();
        return ['title' => 'Submission successful!','section' => 'Financial Information section saved', 'type' => 'success', 'tab' => 10];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Financial Information section not saved', 'type' => 'danger', 'tab' => 10];
      }
    }
  }
  public function saveSection11($em,$company,$data,$member)
  {
    if(array_key_exists('debarred',$data) || array_key_exists('criminalOffence',$data) || array_key_exists('conflictOfInterest',$data) || array_key_exists('conflictOfInterestIIA',$data) || array_key_exists('declareTrue',$data) || array_key_exists('understandRisks',$data))
    {
      if(array_key_exists('debarred',$data))
      {
        $company->setDebarred($data['debarred'] == 1 ? 1 : 0);
      }

      if(array_key_exists('criminalOffence',$data))
      {
        $company->setCriminalOffence($data['criminalOffence'] == 1 ? 1 : 0);
      }

      if(array_key_exists('conflictOfInterest',$data))
      {
        $company->setConflictOfInterest($data['conflictOfInterest'] == 1  ? 1 : 0);
      }

      if(array_key_exists('conflictOfInterestIIA',$data))
      {
        $company->setConflictOfInterestIIA($data['conflictOfInterestIIA'] == 'Yes' ? 1 : 0);
      }

      if(array_key_exists('declareTrue',$data))
      {
        $company->setDeclareTrue($data['declareTrue'] == 1 ? 1 : 0);
      }

      if(array_key_exists('understandRisks',$data))
      {
        $company->setUnderstandRisks($data['understandRisks'] == 1 ? 1 : 0);
      }

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section Eleven for '.$company->getName(),$member);

      try {
        $company->setSection11Complete(true);
        $em->persist($company);
        $em->flush();
        return ['title' => 'Submission successful!','section' => 'Declarations section saved', 'type' => 'success', 'tab' => 11, 'readyForValidation' => $company->readyForValidation()];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Declarations section not saved', 'type' => 'danger', 'tab' => 11];
      }
    }
  }

  public function addVerificationElements($em,$entity)
  {
    if($entity instanceOf Company)
    {
      $stages = $em->getRepository('AppBundle:VerificationStage')->findAll();
      foreach($stages as $stage)
      {
        foreach($stage->getSteps() as $step)
        {
          $companyStep = $em->getRepository('AppBundle:CompanyVerification')->findOneBy(['verificationStep' => $step, 'company' => $entity]);
          if(!$companyStep)
          {
            $companyStep = new CompanyVerification();
            $companyStep->setCompany($entity);
            $companyStep->setVerificationStep($step);
            $companyStep->setStatus('Not Started');
            $em->persist($companyStep);
          }
        }
      }
    }
    if($entity instanceOf VerificationStep)
    {
      $companies = $em->getRepository('AppBundle:Company')->findAll();
      foreach($companies as $company)
      {
        $companyStep = new CompanyVerification();
        $companyStep->setCompany($company);
        $companyStep->setStatus('Not Started');
        $companyStep->setVerificationStep($entity);
        $em->persist($companyStep);
      }
    }
    $em->flush();
  }
  public function pushToApis($em,$company)
  {
      $company->setStatus('Awaiting Verification');
      $member = $company->getRegisteredBy();
      $hivebrite = $this->container->get('app.hivebrite');

      //register company on hivebrite
      if($company->getHiveBriteId() == null)
      {
        $hbriteCoId = $hivebrite->addCompany($company);
        $logger = $this->container->get('monolog.logger.hivebrite');
        $logger->info(['options', $hbriteCoId]);
        $hid = $hbriteCoId->company->id;
        $company->setHiveBriteId($hid);
        //$company->setIsOnSourceDogg(1);
        $em->persist($company);
        $em->flush();
      }
      else {
        $hid = $company->getHiveBriteId();
      }
      if($company->getHiveBriteNetworkId() == null)
      {
        $network = $hivebrite->addNetwork($company->getName());
        $nid = $network->id;
        $company->setHiveBriteNetworkId($nid);
        $em->persist($company);
        $em->flush();
      }
      else {
        $nid = $company->getHiveBriteNetworkId();
      }


      if($member->getHiveBriteId() == null)
      {
        $hbriteUId = $hivebrite->addUser($nid,$member->getFirstName(),$member->getSurname(),$member->getId(),$member->getMobile(),$member->getEmail());
        $member->setHiveBriteId($hbriteUId->user->id);
        $em->persist($member);
      }

      $notification = $this->container->get('app.notifications');
      $notification->createCompanyNotification($company,'Thank you for taking your time to complete the APP RFI form!! Your company will now undergo a verification process before being awarded Bronze-status.','Congratulations! '.$company->getName() .' has now entered Verification Stage');

      $em->persist($company);
      $em->flush();
      $this->addVerificationElements($em,$company);
  }

  public function addDocument($em,$company,$type,$file,$documentNumber,$issuedBy,$issueDate,$expiryDate = null,$verificationStatus = null,$checkName = null)
  {
    if($checkName == null)
    {
      $document = $em->getRepository('AppBundle:CompanyDocumentation')->findOneBy(['documentType' => $type, 'company' => $company]);
      //echo $checkName.' null';
    }
    else {
      $document = $em->getRepository('AppBundle:CompanyDocumentation')->findOneBy(['documentType' => $type, 'company' => $company, 'documentNumber' => $documentNumber]);
      //echo $checkName;
    }

    if(!$document)
    {
      $document = new CompanyDocumentation();
    }

    if($expiryDate != null)
    {
      $document->setExpiryDate(\DateTime::createFromFormat('d/m/Y',$expiryDate));
    }

    if($issueDate != null)
    {
      $document->setIssueDate(\DateTime::createFromFormat('d/m/Y',$issueDate));
    }

    $document->setDocumentNumber($documentNumber);
    $document->setIssuedBy($issuedBy);
    $document->setVerificationStatus($verificationStatus);
    $document->setDocumentType($type);
    $document->setCompany($company);
    if($file != null)
    {
      $document->setFile($file);
    }
    $em->persist($document);
    $em->flush();
    return $document->getId();
  }
  public function manageReferences($em,$company,$id,$client,$description,$valueOfContract,$currency,$designation,$email,$telephone,$contactPerson,$file = null)
  {
    if(!$id)
    {
      $reference = new CompanyReference();
    }
    else {
      $reference = $em->getRepository('AppBundle:CompanyReference')->find($id);
    }
    if($file)
    {
      $doc = $em->getRepository('AppBundle:CompanyDocumentation')->find($file);
      //echo $doc;
      $reference->setDocument($doc);
    }
    $reference->setClient($client);
    $reference->setDescription($description);
    $reference->setValueOfContract($valueOfContract);
    $reference->setCurrency($currency);
    $reference->setDesignation($designation);
    $reference->setEmail($email);
    $reference->setTelephone($telephone);
    $reference->setContactPerson($contactPerson);
    $reference->setCompany($company);
    $em->persist($reference);
    $em->flush();

  }

  public function generateCertificate($data)
  {
    $json = json_decode(file_get_contents($this->container->getParameter('write_to').'/fillform.json'));
    $pdfSrcPath = $this->container->getParameter('write_to').'/Bronze Cert.pdf';
    $pdf = new \FPDI("L","pt");
    $pdf->SetFont('Arial','B',10);
    //$fontSize = 14;
    $pagecount = $pdf->setSourceFile($pdfSrcPath);

    for ($i = 0; $i < $pagecount; $i++)
    {
      $pdf->AddPage();
      $tplIdx = $pdf->importPage($i + 1);
      $pdf->useTemplate($tplIdx, 0, 0, 0, 0, true);
      $pdf->setAutoPageBreak(false);
      if (isset($json->pages[$i]) && isset($json->pages[$i]->areas))
      {
        for ($j = 0; $j < count($json->pages[$i]->areas); $j++)
        {
          $area = $json->pages[$i]->areas[$j];
          $x    = $area->x;
          $y    = $area->y;
          $w    = $area->width;
          $h    = $area->height;
          $f    = 16;


          //$pdf->SetDrawColor(0, 0, 255);
          //$pdf->SetLineWidth(0.2835);
          //$pdf->Rect($x, $y, $w, $h);

          if ($area->type == "checkbox")
          {
            $pdf->SetDrawColor(0, 255, 0);
            $pdf->SetLineWidth(2.0);
            $pdf->Line($x, $y, $x + $w, $y + $h);
            $pdf->Line($x, $y + $h, $x + $w, $y);
          }
          else if ($area->type == "text")
          {
            // 'Free' text
            $pdf->SetLineWidth(1.0); // border

            $iw       = $w - 2 /* 2 x 1 */ ;
            $v        = utf8_decode($area->name);
            $overflow = ($pdf->GetStringWidth($v) > $iw);
            $pdf->SetXY($x, $y);
            while ($pdf->GetStringWidth($v) > $iw)
            {
              $v = substr($v, 0, -1);
            }
            if ($overflow)
            {
              $v = substr($v, 0, -1) . "\\";
            }
            if($v != 'company')
            {
              $pdf->SetFont('Arial', 'B', 11);  // Set the new font size
              $pdf->MultiCell($w, intval($h), $data[$v], false, 'L');
            }
            else {
              $pdf->SetFont('Arial', 'B', 16);
              $pdf->MultiCell($w, intval($h), $data[$v], false, 'C');
            }
          }
        }
      }
    }
    $pdf->Output($this->container->getParameter('uploads_directory').'Supplier Documents/'.$data['company'].'/'.$data['filename'], "F");
  }

  public function checkVerification($em,$cv)
  {
    $company = $cv->getCompany();
    $vstatus = $company->getValidationStatus('sort');
    if($cv->getVerificationStep()->getName() == 'Confirm all mandatory information supplied')
    {
      $company->setStatus('Verification in Progress');
      $em->persist($company);
      //$em->flush();
    }
    if($company->getCrbChecked() == false && ($cv->getVerificationStep()->getName() == 'Initiated automated check and confirm that run was successful' && $cv->getStatus() == '' && $cv->getApprovalStatus() == 'Deferred') || ($cv->getVerificationStep()->getName() == 'Verification of applicant (Supplier) references of customers' && $cv->getStatus() == 'Done' && $cv->getApprovalStatus() == 'Approved'))
    //if($cv->getVerificationStep()->getName() == 'Verification of applicant (Supplier) references of customers' && $cv->getStatus() == 'Done' && $cv->getApprovalStatus() == 'Approved')
    {
      $crb = $this->container->get('app.crb_service');
      $crb->comprehensiveCorporateReport($company);
    }
    if($cv->getVerificationStep()->getName() == 'APP Manager confirms the supplier is matched to the RIGHT categories of Goods and Services' && $cv->getStatus() == 'Done' && $cv->getApprovalStatus() != 'Verified' && $company->getCrbChecked() == true)
    {
      $this->finaliseVerification($company,$cv->getApprovalStatus(),$em);
    }
  }

  public function finaliseVerification($company,$status,$em)
  {
    $notification = $this->container->get('app.notifications');
    $msg = 'Dear '.$company->getRegisteredBy()->getFirstName().', your company\'s application to join the Africa Partner Pool has been ';
    $dd = new \DateTime();
    if($status == 'Approved')
    {
       $msg .= 'approved after successful verification of details provided';
       $company->setStatus('Verified');

       $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(3);
       $serial = Utils::bronzeSerial();
       $filename = 'Bronze Certificate '.$dd->format('Y').'.pdf';
       $to = new \DateTime();
       $to = $to->modify('+1 year');

       $id = $this->addDocument($em,$company,$doc_type,$filename,$serial,'APP Ghana',$dd->format('d/m/Y'),$to->format('d/m/Y'));

      $notification->sendEmail('email/bronze.html.twig','Congratulations on Successful Verification on APP',$company->getRegisteredBy()->getEmail(),['name' => $company->getName(), 'url' => $this->container->getParameter('base_url').'/portal/downloadfile/'.$id ]);

       $this->generateCertificate(['company' => $company->getName(), 'from' => $dd->format('jS \of F Y'), 'to' => $to->format('jS \of F Y'), 'serial' => $serial, 'filename' => $filename]);
       $remarks = 'Bronze Certificate issued, email and SMS sent';
    }
    elseif($status == 'Rejected')
    {
      $msg .= 'rejected after verification of details provided. You can get in touch with us for clarification';
      $company->setStatus('Rejected');
      $us = $company->getRegisteredBy()->getUser();
      $us->setEnabled(false);
      $em->persist($us);
      $remarks = 'SMS sent to '.$company->getRegisteredBy()->getMobile().' notify of supplier. Log in has been disabled.';

    }
    else
    {
      $msg .= 'deferred after verification of details provided. You can get in touch with us for clarification';
      $company->setStatus('Verification Deferred');
      $remarks = 'SMS sent to '.$company->getRegisteredBy()->getMobile().' notify of supplier.';
    }
    $em->persist($company);
    $q = $em->createQueryBuilder();
    $f = $em->createQueryBuilder();
    $q->select('v')->from('AppBundle:CompanyVerification','v')->join('v.verificationStep','s')->where('s.name = \'SMS/ Email notification sent by the system\'')->andWhere('v.company = '.$company->getId());
    $vStep = $q->getQuery()->getOneOrNullResult();
    if($vStep)
    {
      $vStep->setStatus('Done');
      $vStep->setVerificationDate($dd);
      $vStep->setRemarks($remarks);
      $vStep->setApprovalStatus($status);
      $em->persist($vStep);
    }

    $f->select('i')->from('AppBundle:CompanyVerification','i')->join('i.verificationStep','t')->where('t.name = \'System will run appropriate actions based on decision\'')->andWhere('i.company = '.$company->getId());
    $fStep = $f->getQuery()->getOneOrNullResult();
    if($fStep)
    {
      $fStep->setStatus('Done');
      $fStep->setVerificationDate($dd);
      $fStep->setRemarks($remarks);
      $fStep->setApprovalStatus($status);
      $em->persist($fStep);
    }
    $em->flush();
    //$notification->sendSMS($company->getRegisteredBy()->getMobile(),$msg);
  }
  public function createRequestNotifications($em, $request)
  {
    if($request->getIsPublished())
    {
      if($request->getIsPublic() == false)
      {
        $companies = [];
        foreach ($request->getResponses() as $re) {
          if($re->getCompany()->getStatus() == 'Verified')
          {
            array_push($companies,$re->getCompany());
          }
        }
      }
      else {
        $q = $em->createQueryBuilder();
        $q->select('c')->from('AppBundle:Company','c')->where('c.status = :status')->join('c.categories','ca')->andWhere('ca.id in (:ids)');
        $q->setParameters(['status' => 'verified', 'ids' => $request->getTags()->map( function( $obj ) { return $obj->getId(); } )]);
        $companies = $q->getQuery()->getResult();
      }
      foreach($companies as $company)
      {
        $notification = $this->container->get('app.notifications');
        $notification->createCompanyNotification($company,'A new buyer request that may interest you has been published on the APP. Click <a href="'.$this->container->getParameter('base_url').'/tenderspace/tenders/'.$request->getSlug().'">here</a> to find out more information.',$request->getRequestType()->getName().' Alert!',$request->getBuyer());
        $notification->sendEmail('email/request-notification.html.twig','African Partner Pool - New Tender',$company->getRegisteredBy()->getEmail(),$options = ['id' => $request->getId(),'buyer' => $request->getBuyer(), 'name' => $request->getName(), 'description' => $request->getDescription(), 'deadline' => $request->getDeadline()->format('d/m/Y H:i')],$cc = []);
        $notification->sendSMS($company->getRegisteredBy()->getMobile(),'A new request that may interest you has been published on the African Partner Pool (APP). More information at http://bit.ly/2huAaqp');
      }
    }
  }

  public function markPayment($em,$company,$payment,$val,$sub,$firstName = null,$lastName = null)
  {
    $remarks = '';
    $promo_code = $company->getPromoCode();
    $now = new \DateTime();
    if($promo_code)
    {
      $ded = $company->getPromoCode()->getIsPercentage() == true ? $sub * ($company->getPromoCode()->getAmountOff() / 100) : $company->getPromoCode()->getAmountOff();
      $amount = $sub - $ded;
    }
    else {
      $amount = $sub;
    }
    $payment->setCompany($company);
    $company->setPaymentReceived(true);

    if($amount > $val)
    {
      $amnt = $amount - $val;
      $payment->setStatus('Partial Payment Received. Balance '.$amnt);

    }
    elseif($amount < $val) {
      $amnt =  $val - $amount;
      $payment->setStatus('Overpaid subscription by '. $amnt);
      $company->setIsFullyPaidUp(true);
      if($company->getIiaValidated() == true)
      {
        $company->setStatus('Active');
        $company->setSubscriptionDate($now);
      }
    }
    else
    {
      $payment->setStatus('Full payment received');
      $company->setIsFullyPaidUp(true);
      if($company->getIiaValidated() == true)
      {
        $company->setStatus('Active');
        $company->setSubscriptionDate($now);
      }
    }

    if($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      $user = $this->container->get('security.token_storage')->getToken()->getUser();
      $remarks = $payment->getRemarks().'. Reference corrected by '.$user->getFirstName();
      $payment->setRemarks($remarks);
      $payment->setPaymentReference($company->getPaymentReference());
    }

    $company->setIsReceipted(true);
    $em->persist($company);
    $em->persist($payment);
    $invoice = $this->container->get('app.print_service');
    $invoice->generatePDF('email/receipt.html.twig',$this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/receipt-'.$company->getPaymentReference().'.pdf',['company' => $company, 'amount' => $val]);
    $notification = $this->container->get('app.notifications');
    $notification->createCompanyNotification($company,'A receipt for your payment for invoice number '.$company->getPaymentReference().' has been generated. <br/><a href="/uploads/documents/'.$company->getName().'/receipt-'.$company->getPaymentReference().'.pdf">Download Receipt</a>','Acknowledgement of Payment');


    $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(2);
    $id = $this->addDocument($em,$company,$doc_type,'receipt-'.$company->getPaymentReference().'.pdf','Receipt for Payment - '.$payment->getMode(),'APP Ghana',$now->format('d/m/Y'),'',null);

    $notification->sendEmail('email/payment_notification.html.twig','APP Ghana Payment Notification',$company->getRegisteredBy()->getEmail(),$options = ['company' => $company, 'amount' => $val, 'receipt' => $id, 'mode' => $payment->getMode(), 'paidBy' => $firstName.' '.$lastName],['Ibrahima.Aminu@investinafrica.com']);
    return $remarks;
  }

  public function createCompanyRequestNotifications($em, $request)
  {
    $message = '';
    $notification = $this->container->get('app.notifications');
    if($request->getStatus() == 'Awarded')
    {
      $message = 'We are pleased to notify you that your bid has been Successful and you have been awarded this Tender. Please follow the next set of procedures as outlined in the Information section. Select an appropriate tab in order to continue. Congratulations.';
      if($request->getRequest()->getFinancingAvailable())
      {
        $message = $message.' You may qualify for financing of this request.';
      }
    }
    if($request->getStatus() == 'Unsuccessful' || $request->getStatus() == 'Disqualified') {
      $message = 'We regret to notify you that due to the set out Terms of Reference and Minimum Operation Requirements set out for this Tender, your application has been unsuccessful. Keep visiting this page for more Tenders. Thank You. Invest in Africa-Ghana Team.';
    }
    if($request->getStatus() == 'Submitted Response') {
      $message = 'Your response to this procurement request has been submitted. Good luck!';
      $notification->sendEmail('email/internal-response-notification.html.twig','New tender response submitted','app@investinafrica.com',['name' => $request->getRequest()->getName(), 'buyer' => $request->getRequest()->getBuyer()->getName(), 'description' => $request->getRequest()->getDescription(), 'deadline' => $request->getRequest()->getDeadline()->format('d/m/Y H:i'), 'remarks' => $request->getSupplierRemarks(), 'company' => $request->getCompany(), 'applicationDate' => $request->getResponseDate()->format('d/m/Y H:i')]);
    }
    if($message != '')
    {
      $notification->createCompanyNotification($request->getCompany(),$message,$request->getRequest()->getName().' Alert!');
      $notification->sendSMS($request->getCompany()->getRegisteredBy()->getMobile(),$request->getRequest()->getName().' alert. '.preg_replace('/([^?!.]*.).*/', '\\1', $message));
    }
  }
}
