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
use AppBundle\Entity\CompanySubscription;
use AppBundle\Utils;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;

Class CompanyService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
  }

  public function saveSection1($em,$company,$data,$files,$member)
  {
    // $company->setCompanyType($em->getRepository('AppBundle:CompanyType')->find($data['organisationType']));
    $company->setDescription(trim($data['description']));
    $company->setNumberOfBranches(trim($data['numberOfBranches']));
    if(array_key_exists('companyLogo',$files) && $files['companyLogo'] != null)
    {
      $logo = $files['companyLogo'];
      $filename = uniqid().'.'.$logo->guessExtension();
      $logo->move($this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
      $company->setCompanyLogo($filename);
    }

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
    $address->setPredominantLandmark(trim($data['predominantLandmark']));
    if(array_key_exists('county',$data))
    {
      $county = $em->getRepository('AppBundle:County')->find($data['county']);
      $address->setCounty($county);
    }

    $address->setPostalAddress(trim($data['postalAddress']));
    $address->setPostalCode(trim($data['postalCode']));
    $address->setCountry('GH');
    $em->persist($address);
    $em->flush();
    $member = $company->getRegisteredBy();

    for($j=0;$j<count($data['contacts']['name']);$j++)
    {
      $contact = $em->getRepository('AppBundle:CompanyContact')->findOneBy(['email' => $data['contacts']['email'][$j], 'company' => $company]);
      if(!$contact)
      {
        $contact = new CompanyContact();
      }
      $contact->setEmail(trim($data['contacts']['email'][$j]));
      $contact->setName(trim($data['contacts']['name'][$j]));
      $contact->setPhone(trim($data['contacts']['phone'][$j]));
      $contact->setDesignation(trim($data['contacts']['designation'][$j]));
      $contact->setCompany($company);
      $em->persist($contact);
    }

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
    $company->setSection1Complete(true);
    $em->persist($company);
    $em->flush();

    $activityService = $this->container->get('app.activity_service');
    $activityService->logUserActivity('RFI','Completed Section A: General Information for '.$company->getName(),$member);

    try {
        return ['title' => 'Submission successful!','section' => 'Section A: General Infomation was saved.', 'type' => 'success','btn' => 'save and continue'];

    } catch (Exception $e) {
      return ['title' => 'Submission error!','section' => 'Section A: General Infomation not saved', 'type' => 'danger','btn' => 'save'];
    }
  }

  public function saveSection2($em,$company,$data,$files,$member)
  {
    $company->setShareOfGhanaianEmployees($data['shareOfGhanaianEmployees'] == null ? 0 : trim($data['shareOfGhanaianEmployees']));
    $company->setEmployDisabled($data['employDisabled'] == 'Yes' ? true : false);

    $company->setNumberOfEmployees(trim($data['numberOfEmployees']));
    if(array_key_exists('womanOwnershipPercentage',$data))
    {
      $company->setWomanOwnershipPercentage(trim($data['womanOwnershipPercentage']));
    }
    if(array_key_exists('disabledNo',$data))
    {
      $company->setDisabledNo($data['disabledNo'] == null ? 0 : trim($data['disabledNo']));
    }
    //$company->setWomanOwnershipPercentage(trim($data['womanOwnershipPercentage']));

    $company->setLocalContent($data['localContent'] == 'Yes' ? true : false);
    if(array_key_exists('localContentFile',$files) && $files['localContentFile'] != null)
    {
      $localContentFile = $files['localContentFile'];
      $filename = uniqid().'.'.$localContentFile->guessExtension();
      $localContentFile->move($this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
      $company->setLocalContentFile($filename);
    }

    $company->setShareOfGhanaianDirectors($data['shareOfGhanaianDirectors'] == null ? 0 : trim($data['shareOfGhanaianDirectors']));
    $company->setOwnershipWomen($data['ownershipWomen'] == 'Yes' ? true : false);

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
    $activityService->logUserActivity('RFI','Completed Section B: Company Structure & Ownership Structure for '.$company->getName(),$member);

    try {
      $company->setSection2Complete(true);
      $em->persist($company);
      $em->flush();
  return ['title' => 'Submission successful!','section' => 'Section B: Company Structure & Ownership Structure saved', 'type' => 'success','btn' => 'save and continue'];
    } catch (Exception $e) {
      return ['title' => 'Submission error','section' => 'Section B: Company Structure & Ownership Structure not saved', 'type' => 'danger','btn' => 'save'];
    }
  }

  public function saveSection3($em,$company,$data,$member)
  {
    $company->setApproxTurnover($data['approxTurnover'] != null ? trim($data['approxTurnover']) : null);
    $company->setCreditChecks($data['creditChecks'] == 'Yes' ? 1 : 0);

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
        $shareholding->setNationality(trim($data['shareholding']['nationality'][$j]));
        $shareholding->setCompany($company);
        $em->persist($shareholding);
      }
    }
    for($j=0;$j<count($data['references']['client']);$j++)
    {
      if($data['references']['client'][$j] !== null && $data['references']['telephone'][$j] != null && $data['references']['contactPerson'][$j] != null)
      {
        $this->manageReferences($em,$company,trim($data['references']['id'][$j]),trim($data['references']['client'][$j]),trim($data['references']['description'][$j]),trim($data['references']['valueOfContract'][$j]),trim($data['references']['currency'][$j]),trim($data['references']['designation'][$j]),trim($data['references']['email'][$j]),trim($data['references']['telephone'][$j]),trim($data['references']['contactPerson'][$j]));
      }
    }

    try {
      $company->setSection3Complete(true);
      $em->persist($company);
      $em->flush();

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section C: Commercial References and Financial Information for '.$company->getName(),$member);

      return ['title' => 'Submission successful!','section' => 'Commercial References and Financial Information saved', 'type' => 'success','btn' => 'save and continue'];
    } catch (Exception $e) {
      return ['title' => 'Submission error!','section' => 'Commercial References and Financial Information not saved', 'type' => 'danger','btn' => 'save'];
    }
  }
  public function saveSection4($em,$company,$data,$files,$member)
  {
    if(array_key_exists('documents',$data) && count($data['documents']['documentNumber']) != 0)
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
            $doc->move($this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/', $filename);
            $document->setFile($filename);
          }
          else {
            $filename = null;
          }
          $this->addDocument($em,$company,$doc_type,$filename,trim($data['documents']['documentNumber'][$j]),trim($data['documents']['issuedBy'][$j]),$data['documents']['issueDate'][$j],$data['documents']['expiryDate'][$j],'Awaiting Verification');
        }
      }

      $activityService = $this->container->get('app.activity_service');
      $activityService->logUserActivity('RFI','Completed Section D: Registration Documents for '.$company->getName(),$member);

      try {
        $company->setSection4Complete(true);
        $em->persist($company);
        $em->flush();
        return ['title' => 'Submission successful!','section' => 'Section D: Registration Documents saved successfully', 'type' => 'success','btn' => 'save and continue'];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Section D: Registration Documents not saved', 'type' => 'danger','btn' => 'save'];
      }
    }
  }

  public function saveSection5($em,$company,$data,$member)
  {

      $company->setDebarred($data['debarred'] == 1 ? 1 : 0);
      //$company->setCriminalOffence($data['criminalOffence'] == 1 ? 1 : 0);
      $company->setConflictOfInterest($data['conflictOfInterest'] == 1  ? 1 : 0);
      $company->setConflictOfInterestIIA($data['conflictOfInterestIIA'] == 'Yes' ? 1 : 0);
      $company->setDeclareTrue($data['declareTrue'] == 1 ? 1 : 0);
      $company->setUnderstandRisks($data['understandRisks'] == 1 ? 1 : 0);

      try {
        $company->setSection5Complete(true);
        $company->setStatus('Awaiting Verification');
        $em->persist($company);
        $em->flush();

        $activityService = $this->container->get('app.activity_service');
        $activityService->logUserActivity('RFI','Completed Section E: Declarations for '.$company->getName(),$member);

        if($company->readyForValidation() == true)
        {
          //Added this function here temporarily.
          $this->addVerificationElements($em,$company);
          $this->pushToApis($em,$company);
          $activityService->logUserActivity('RFI completed',$company->getName().' pushed to hivebrite and ready for verification',$member);
          $notification = $this->container->get('app.notifications');
          $notification->createCompanyNotification($company,'Thank you for taking your time to complete the APP RFI form!! Your company will now undergo a verification process before being awarded Bronze-status.','Congratulations! '.$company->getName() .' has now entered Verification Stage');
        }
        return ['title' => 'Submission successful!','section' => 'Declarations section saved. Thank you for updating your information', 'type' => 'success','btn' => 'save and continue'];
      } catch (Exception $e) {
        return ['title' => 'Submission error!','section' => 'Declarations section not saved. Thank you for updating your information', 'type' => 'danger','btn' => 'save'];
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
    $hivebrite = $this->container->get('app.hivebrite');

    //register company on hivebrite
    try {
      if($company->getHiveBriteId() == null)
      {
        $hbriteCoId = $hivebrite->addCompany($company);
        $hid = $hbriteCoId->company->id;
        $company->setHiveBriteId($hid);
        $em->persist($company);
      }
      else {
        $hid = $company->getHiveBriteId();
      }
      if($company->getHiveBriteNetworkId() == null)
      {
        $network = $hivebrite->addNetwork($company->getName());
        $nid = $network->sub_network->id;
        $company->setHiveBriteNetworkId($nid);
        $em->persist($company);
        $em->flush();
      }
      else {
        $nid = $company->getHiveBriteNetworkId();
      }

      $member = $company->getRegisteredBy();
      if($member->getHiveBriteId() == null)
      {
        $hbriteUId = $hivebrite->addUser($nid,$member->getFirstName(),$member->getSurname(),$member->getId(),$member->getMobile(),$member->getEmail());
        $member->setHiveBriteId($hbriteUId->user->id);
        //  $azure = $this->container->get('app.azure');
        //$azure->manageUser($em,$member,'POST',$member->getFirstName().$member->getSurname().$member->getId(),$member->getFirstName(),$member->getSurname(),$member->getEmail(),Utils::decrypt($member->getDhot()),'Supplier',$company->getWebsite());
        $hivebrite->addFollowers($this->container->getParameter('hiveBriteGroupId'),$hbriteUId->user->id);
        $em->persist($member);
      }
      else {
        $hivebrite->addFollowers($this->container->getParameter('hiveBriteGroupId'),$member->getHiveBriteId());
      }

      $em->persist($company);
      $em->flush();
    } catch (\Exception $e) {
      error_log($e->getMessage());
    }
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
    $pdf->Output($this->container->getParameter ('uploads_directory').'Supplier Documents/'.$data['company'].'/'.$data['filename'], "F");
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
    if($cv->getVerificationStep()->getName() == 'APP Manager confirms the supplier is matched to the RIGHT categories of Goods and Services' && $cv->getStatus() == 'Done' && $cv->getApprovalStatus() != 'Verified' /*&& $company->getCrbChecked() == true*/)
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
  public function createRequestNotifications($em, $request,$subject,$intro)
  {
    $logger = $this->container->get('monolog.logger.email');
    if($request->getIsPublished())
    {
      if($request->getIsPublic() == false)
      {
        $q = $em->createQueryBuilder();
        $q->select('c')->from('AppBundle:Company','c')->join('c.categories','ca')->where('ca.id in (:ids)');
        $q->setParameters(['ids' => $request->getTags()->map(function($obj){return $obj->getId();})->getValues()]);
        //$q->select('c')->from('AppBundle:Company','c')->where('c.status = :status')->join('c.categories','ca')->andWhere('ca.id in (:ids)');
       // $q->setParameters(['status' => 'Verified', 'currentSubscriptionStatus' => 'Active', 'ids' => $request->getTags()->map(function($obj){return $obj->getId();})->getValues()]);
        // $q->select('c')->from('AppBundle:Company','c')->where('c.currentSubscriptionStatus = :subscription')->join('c.categories','ca')->andWhere('ca.id in (:ids)');
        // $q->setParameters(['status' => 'Verified', 'subscription' => 'Active', 'ids' => $request->getTags()->map(function($obj){return $obj->getId();})->getValues()]);
        $companies = $q->getQuery()->getResult();
      }
      else {
        $companies = $em->getRepository('AppBundle:Company')->findBy(['status' => 'Verified', 'currentSubscriptionStatus' => 'Active']);
      }
      //echo count($companies); exit;
      $notification = $this->container->get('app.notifications');
      foreach($companies as $company)
      {
        try{
          foreach($company->getContacts() as $contact)
          {
            if($contact->getEmail() != null && filter_var($contact->getEmail(), FILTER_VALIDATE_EMAIL))
            {
              $notification->sendEmail('email/request-notification.html.twig',$subject,$contact->getEmail(),$options = ['id' => $request->getId(),'buyer' => $request->getBuyer(), 'name' => $request->getName(),
              'description' => $request->getDescription(), 'deadline' => $request->getDeadline()->format('d/m/Y H:i'), "intro" => $intro, 'link' => $this->container->getParameter('base_url').'tenderspace/tenders/'.$request->getSlug()],$cc = []);
            }
            if($contact->getMobile() != null && is_numeric($contact->getMobile()))
            {
              //$notification->sendSMS($contact->getMobile(),$intro.'. More information at https://bit.ly/2QmTkug');
            }
          }
          $requestType = $request->getRequestType() ? $request->getRequestType()->getName() : "";
          $notification->createCompanyNotification($company,$intro.'. Click <a href="'.$this->container->getParameter('base_url').'tenderspace/tenders/'.$request->getSlug().'">here</a> to find out more information.',$requestType.' Alert!',$request->getBuyer());
        }
        catch(Exception $ex)
        {

        }
      }
    }
  }

  public function markPayment($em,$company,$payment,$val,$sub,$firstName = null,$lastName = null)
  {
    $remarks = '';
    $promo_code = $company->getPromoCode();
    $now = new \DateTime();
    $active = false;
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
        $active = true;
      }
    }
    else
    {
      $payment->setStatus('Full payment received');
      $company->setIsFullyPaidUp(true);

      $active = true;
    }

    if($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
    {
      $user = $this->container->get('security.token_storage')->getToken()->getUser();
      $remarks = 'Payment entered by '.$user->getFirstName();
      $payment->setRemarks($remarks);
      $payment->setPaymentReference($company->getPaymentReference());
    }

    $company->setIsReceipted(true);
    $em->persist($company);

    $doc_type = $em->getRepository('AppBundle:CompanyTypeDocumentation')->find(2);
    $id = $this->addDocument($em,$company,$doc_type,'receipt-'.$company->getPaymentReference().'.pdf','Receipt for Payment - '.$payment->getMode(),'APP Ghana',$now->format('d/m/Y'),'',null);

    if($active)
    {
      $company->setSubscriptionDate($now);
      $sub = new CompanySubscription();
      $sub->setSubscriptionDate($now);
      $sub->setReceipt($em->getRepository('AppBundle:CompanyDocumentation')->find($id));
      $expiryDate = new \DateTime();
      $sub->setExpiryDate($expiryDate->add(new \DateInterval('P1Y')));
      $sub->setIsActive($active);
      $sub->setTier($company->getTier());
      $company->setCurrentSubscriptionStatus('Active');
      $sub->setCompany($company);
      $em->persist($sub);
      $em->flush();
      if($company->getStatus() == "Verified")
      {
        $dd = new \DateTime();
        $serial = Utils::bronzeSerial();
        $filename = 'Bronze Certificate '.$dd->format('Y').'.pdf';
        $to = new \DateTime();
        $to = $to->modify('+1 year');
        $this->generateCertificate(['company' => $company->getName(), 'from' => $dd->format('jS \of F Y'), 'to' => $to->format('jS \of F Y'), 'serial' => $serial, 'filename' => $filename]);
      }
    }

    $em->persist($company);
    $em->persist($payment);
    $invoice = $this->container->get('app.print_service');
    $invoice->generatePDF('email/receipt.html.twig',$this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/receipt-'.$company->getPaymentReference().'.pdf',['company' => $company, 'amount' => $val]);
    $notification = $this->container->get('app.notifications');
    $notification->createCompanyNotification($company,'A receipt for your payment for invoice number '.$company->getPaymentReference().' has been generated. <br/><a href="/uploads/documents/'.$company->getName().'/receipt-'.$company->getPaymentReference().'.pdf">Download Receipt</a>','Acknowledgement of Payment');
    $notification->sendEmail('email/payment_notification.html.twig','APP Ghana Payment Notification',$company->getRegisteredBy()->getEmail(),$options = ['company' => $company, 'amount' => $val, 'receipt' => $id, 'mode' => $payment->getMode(), 'paidBy' => $firstName.' '.$lastName, 'date' => $payment->getTransactionTime()->format('d/m/Y')],['app@investinafrica.com']);
    return $remarks;
  }

  public function createCompanyRequestNotifications($em, $request)
  {
    $message = '';
    $notification = $this->container->get('app.notifications');
    if($request->getStatus() == 'Awarded')
    {
      $message = 'We are pleased to notify you that your bid has been Successful and you have been awarded this Tender. Please follow the next set of procedures as outlined in the Information section. Select an appropriate tab in order to continue. Congratulations.';
      // if($request->getRequest()->getFinancingAvailable())
      // {
      //   $message = $message.' You may qualify for financing of this request.';
      // }
    }
    if($request->getStatus() == 'Unsuccessful' || $request->getStatus() == 'Disqualified') {
      $message = 'We regret to notify you that due to the set out Terms of Reference and Minimum Operation Requirements set out for this Tender, your application has been unsuccessful. Keep visiting this page for more Tenders. Thank You. Invest in Africa-Ghana Team.';
    }
    if($request->getStatus() == 'Submitted Response') {
      $message = 'Your response to this procurement request has been submitted. Good luck!';
      $notification->sendEmail('email/internal_response_notification.html.twig','New tender response submitted','app@investinafrica.com',['name' => $request->getRequest()->getName(), 'buyer' => $request->getRequest()->getBuyer()->getName(), 'description' => $request->getRequest()->getDescription(), 'deadline' => $request->getRequest()->getDeadline()->format('d/m/Y H:i'), 'remarks' => $request->getSupplierRemarks(), 'company' => $request->getCompany(), 'applicationDate' => $request->getResponseDate()->format('d/m/Y H:i')]);
      //$request->setResponsesTotal($request->getResponsesTotal()+1);
    }
    if($message != '')
    {
      $notification->createCompanyNotification($request->getCompany(),$message,$request->getRequest()->getName().' Alert!');
      //$notification->sendSMS($request->getCompany()->getRegisteredBy()->getMobile(),$request->getRequest()->getName().' alert. '.preg_replace('/([^?!.]*.).*/', '\\1', $message));
    }
  }

  public function generateInvoiceFromCommand($company,$kernel)
  {
    $application = new Application($kernel);
    $application->setAutoExit(false);

    $input = new ArrayInput([
       'command' => 'generate:invoice',
       // (optional) define the value of command arguments
       'id' => $company,
       // (optional) pass options to the command
       //'--message-limit' => $messages,
    ]);
    $output = new BufferedOutput();
    // You can use NullOutput() if you don't need the output
    $application->run($input, $output);


    // return the output, don't use if you used NullOutput()
    $content = $output->fetch();

    return $content;
  }
}
