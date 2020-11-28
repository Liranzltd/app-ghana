<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;
use AppBundle\Entity\Member;
use AppBundle\Entity\Company;
use AppBundle\Entity\CompanyMembership;
use AppBundle\Entity\CompanyAddress;
use AppBundle\Entity\CompanyContact;
use AppBundle\Entity\CompanyDirector;
use AppBundle\Entity\CompanyShareholding;
use AppBundle\Entity\CompanyReference;

class ImportSuppliersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('import:suppliers')
            ->setDescription('User confirmation')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $file = file_get_contents($this->getContainer()->getParameter('uploads_directory').'supplier.json');
      $suppliers = json_decode($file, true);
      $output->writeln('Suppliers before '.count($suppliers));
      if($input->getArgument('id'))
      {
        $key = array_search($input->getArgument('id'), array_column($suppliers, 'id'));
        $suppliers = array_splice($suppliers, $key);
        $output->write('Suppliers after '.count($suppliers));
        $output->write('Suppliers 1 '.$suppliers[0]['CompanyName'].' ID '.$suppliers[1]['id']);
      }

      $logger = $this->getContainer()->get('monolog.logger.import');
      $logger->info('count',['number_of_suppliers' => count($suppliers)]);
      $companyService = $this->getContainer()->get('app.company.service');
      $em = $this->getContainer()->get('doctrine')->getManager();

      foreach($suppliers as $supplier)
      {
        $output->writeln('Supplier '.$supplier['CompanyName'].' ID '.$supplier['id']);
        $member = $em->getRepository('AppBundle:Member')->findOneBy(['email' => $supplier['ContactEmail']]);
        if(!$member)
        {
           $member = new Member();
        }

         $mobile = $supplier['ContactPhone'];
         $name = explode(" ",trim($supplier['ContactName']));
         $surname = array_pop($name);
         $firstName = implode(" ", $name);
         $member->setFirstName(ucwords(strtolower($firstName)));
        // $member->setMiddleName($request->request->get('middlename'));
         $member->setSurname(ucwords(strtolower($surname)));
         $member->setGender('');
         $member->setEmail(strtolower($supplier['ContactEmail']));
         $member->setMobile($mobile);

         $user = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(['email' => $supplier['ContactEmail']]);

         if(!$user)
         {
           $user_service = $this->getContainer()->get('app.user');
           $user = $user_service->createUser(ucwords(strtolower($firstName)),ucwords(strtolower($surname)),strtolower($supplier['ContactEmail']),'APPGhanaUpgrade','Members','email/registration.html.twig',$mobile);
           $member->setUser($user);
         }


         $em->persist($member);

         $company = $em->getRepository('AppBundle:Company')->findOneBy(['name' => trim(ucwords(strtolower($supplier['CompanyName'])))]);
         if(!$company)
         {
           $company = new Company();
         }
           $company->setName(trim(ucwords(strtolower($supplier['CompanyName']))));
           $status = 'Awaiting Verification';
           if($supplier['Validated'])
           {
             $status = 'Verified';
           }
           if($supplier['IsDraft'])
           {
             $status = 'New';
           }
           //$company->setMemberType($mtype);
           $company->setStatus($status);
           //$date = \DateTime::createFromFormat('Y-m-d',$request->request->get('registrationDate'));
           $company->setPaymentReference(strtoupper(Utils::randomChars(8)));
           //$company->setPromoCode($em->getRepository('AppBundle:PromoCode')->findOneBy(['code' => $request->request->get('promoCode')]));
           $company->setRegisteredBy($member);
           if(array_key_exists('ValidationMessageTin', $supplier) && strpos($supplier['ValidationMessageTin'], 'Sole Proprietorship') !== false)
           {
             $company->setCompanyType($em->getRepository('AppBundle:CompanyType')->findOneBy(['name' => 'Sole Proprietorship']));
           }
           else {
             $company->setCompanyType($em->getRepository('AppBundle:CompanyType')->findOneBy(['name' => $supplier['OrganisationType']]));
           }

           $company->setRegistrationNumber($supplier["IdentificationNumber"]);
           //$company->setGraTinNumber(trim($request->request->get('graTinNumber')));
           if($supplier['IsCompanyHeadquartersRegisteredOutsideGhana'])
           {
             $company->setMembershipCategory('International Supplier');
           }
           else {
             $company->setMembershipCategory('Local Supplier');
           }
           //$company->setMembershipCategory($request->request->get('membershipCategory'));
           if(array_key_exists('Sectors', $supplier))
           {
             foreach ($supplier['Sectors'] as $sector) {
               $category = $em->getRepository('AppBundle:Category')->findOneBy(['name' => $sector['Name']]);
               if($category && !$company->getCategories()->contains($category))
               {
                 $category->addCompany($company);
                 $company->addCategory($category);
                 $em->persist($category);
               }
             }
           }


           $membership = new CompanyMembership();
           $membership->setMember($member);
           //$membership->setPosition($request->request->get('role'));
           $membership->setIsDisabled(false);
           $membership->setIsAdmin(true);
           $membership->setCompany($company);
           $em->persist($membership);

           $notification = $this->getContainer()->get('app.notifications');
           $notification->createCompanyNotification($company,'Welcome <strong>'.$company->getName().'</strong> on the new APP. You will find notification on this tab each time you log into your account from time to time. Please complete your company\'s profile to increase your chances of winning buyer requests.','Welcome message on registration on to the new APP');

           $em->persist($company);
           $em->flush();

           $logger->info('membership_and_company_creation',['status' => 'member and company created', 'company_id' => $company->getId(), 'member_id' => $member->getId(), 'company_name' => $company->getName()]);

           $company->setDescription(trim($supplier['CompanyDescription']));
           $company->setNumberOfBranches(trim($supplier['NumberOfLocationsInGhana']));
           if($supplier['CompanyLogo'] != null)
           {
             $filename = uniqid().'.'.pathinfo($supplier['CompanyLogo'], PATHINFO_EXTENSION);
             $dstfile = $this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/'.$filename;
             if(!file_exists(dirname($dstfile))) mkdir(dirname($dstfile), 0777, true);
             copy('https://www.appghana.com'.$supplier['CompanyLogo'],$dstfile);
             $company->setCompanyLogo($filename);
           }

           $address = $company->getAddresses();
           if(!$address)
           {
             $address = new CompanyAddress();
           }
           $address->setCompany($company);
           $address->setBuildingNumber(trim(ucwords(strtolower($supplier['BuildingNumber']))));
           $address->setBuildingName(trim(ucwords(strtolower($supplier['BuildingName']))));
           $address->setStreet(trim(ucwords(strtolower($supplier['LocationOrArea']))));
           $address->setTown(trim(ucwords(strtolower($supplier['City']))));
           $address->setPredominantLandmark(trim(ucwords(strtolower($supplier['StreetOrPredominantLandmark']))));
           if(array_key_exists('county',$supplier))
           {
             $county = $em->getRepository('AppBundle:County')->find($supplier['county']);
             $address->setCounty($county);
           }

           $address->setPostalAddress(trim($supplier['PostalAddress']));
           //$address->setPostalCode(trim($supplier['postalCode']));
           $address->setCountry('GH');
           $em->persist($address);

           foreach($supplier['KeyContacts'] as $kcontact)
           {
             $contact = $em->getRepository('AppBundle:CompanyContact')->findOneBy(['email' => $kcontact['ContactEmail'], 'company' => $company]);
             if(!$contact)
             {
               $contact = new CompanyContact();
             }
             $contact->setEmail(trim($kcontact['ContactEmail']));
             $contact->setName(trim(ucwords(strtolower($kcontact['ContactName']))));
             $contact->setPhone(trim($kcontact['ContactPhone']));
             $contact->setDesignation(trim(ucwords(strtolower($kcontact['ContactRole']))));
             $contact->setCompany($company);
             $em->persist($contact);
           }

           $logger->info('section 1',['status' => 'Completed']);
           $em->persist($company);
           $em->flush();

           $company->setShareOfGhanaianEmployees(trim($supplier['ShareGhanaianEmployees']));
           if(array_key_exists('EmployDisabledPeople', $supplier)) $company->setEmployDisabled($supplier['EmployDisabledPeople']);

           $company->setNumberOfEmployees(trim($supplier['NumberOfEmployees']));
           //$company->setWomanOwnershipPercentage(trim($supplier['womanOwnershipPercentage']));

           $company->setLocalContent($supplier['HasLocalContentPolicy']);
           if($supplier['LocalContentPolicy'] != null)
           {
             $filename = uniqid().'.'.pathinfo($supplier['LocalContentPolicy'], PATHINFO_EXTENSION);
             $dstfile = $this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/'.$filename;
             if(!file_exists(dirname($dstfile))) mkdir(dirname($dstfile), 0777, true);
             copy('https://www.appghana.com'.$supplier['LocalContentPolicy'],$dstfile);
             $company->setLocalContentFile($filename);
           }
           $company->setWebsite($supplier['CompanyWebsite']);
           $company->setShareOfGhanaianDirectors($supplier['GhanaianOwnershipPercentage']);
           if(array_key_exists('WomanOwnedBusiness', $supplier)) $company->setOwnershipWomen($supplier['WomanOwnedBusiness']);

           if(array_key_exists('Directors',$supplier))
           {
               foreach($supplier['Directors'] as $director)
               {
                   $role = $em->getRepository('AppBundle:CompanyDirector')->findOneBy(['name' => $director['Name'], 'company' => $company]);
                   if(!$role)
                   {
                     $role = new CompanyDirector();
                   }
                   $role->setName(trim($director['Name']));
                   $role->setRole(trim($director['Role']));
                   $role->setCompany($company);
                   $em->persist($role);
               }
           }
           $logger->info('section 2',['status' => 'Completed']);
           $em->persist($company);
           $em->flush();

           $company->setApproxTurnover($supplier['ApproximateAnnualTurnoverLastFinancialYear'] != null ? trim($supplier['ApproximateAnnualTurnoverLastFinancialYear']) : null);
           if(array_key_exists('AllowCreditCheck', $supplier)) $company->setCreditChecks($supplier['AllowCreditCheck']);

           foreach($supplier['Owners'] as $owner)
           {
             $shareholding = $em->getRepository('AppBundle:CompanyShareholding')->findOneBy(['name' => $owner['Name'], 'nationality' => $owner['Country'], 'company' => $company]);
               if(!$shareholding)
               {
                 $shareholding = new CompanyShareholding();
               }
               $shareholding->setName(trim($owner['Name']));
               $shareholding->setPercentage(trim($owner['Percentage']));
               $shareholding->setNationality(trim($owner['Country']));
               $shareholding->setCompany($company);
               $em->persist($shareholding);
           }

           foreach($supplier['CommercialReferences'] as $reference)
           {
             $companyService->manageReferences($em,$company,"",trim($reference['CompanyName']),"",0,"GHS",trim($reference['ReferenceContactRole']),trim($reference['ReferenceContactEmail']),trim($reference['ReferenceContactTelephone']),trim($reference['ReferenceContactName']));
           }

           $logger->info('section 3',['status' => 'Completed']);
           $em->persist($company);
           $em->flush();

           if($company->getCompanyType())
           {
             $type = $em->getRepository('AppBundle:CompanyType')->find($company->getCompanyType());
             foreach($type->getRequiredDocuments() as $requirement)
             {
               if(array_key_exists('RegistrarGeneralsForm3', $supplier) && $requirement->getDocumentType()->getName() == "Registrar General's Form 3" && $supplier['RegistrarGeneralsForm3'] != null)
               {
                 $filename = uniqid().'.'.pathinfo($supplier['RegistrarGeneralsForm3'], PATHINFO_EXTENSION);
                 $dstfile = $this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/'.$filename;
                 if(!file_exists(dirname($dstfile))) mkdir(dirname($dstfile), 0777, true);
                 copy('https://www.appghana.com'.$supplier['RegistrarGeneralsForm3'],$dstfile);
                 $id = $companyService->addDocument($em,$company,$requirement,$filename,'','','','','Awaiting Verification');
                 $logger->info('section 4',['status' => 'Registrar General\'s Form 3 uploaded', 'id' => $id]);
               }
               if(array_key_exists('TaxClearanceCertificate', $supplier) && $requirement->getDocumentType()->getName() == "Tax Clearance Certificate" && $supplier['TaxClearanceCertificate'] != null)
               {
                 $filename = uniqid().'.'.pathinfo($supplier['TaxClearanceCertificate'], PATHINFO_EXTENSION);
                 $dstfile = $this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/'.$filename;
                 if(!file_exists(dirname($dstfile))) mkdir(dirname($dstfile), 0777, true);
                 copy('https://www.appghana.com'.$supplier['TaxClearanceCertificate'],$dstfile);
                 $id = $companyService->addDocument($em,$company,$requirement,$filename,'','','','','Awaiting Verification');
                 $logger->info('section 4',['status' => 'Tax Clearance Certificate uploaded', 'id' => $id]);
               }
               if(array_key_exists('SocialSecurityAndNationalInsuranceTrust', $supplier) && $requirement->getDocumentType()->getName() == "Social Security & National Insurance Trust Certificate" && $supplier['SocialSecurityAndNationalInsuranceTrust'] != null)
               {
                 $filename = uniqid().'.'.pathinfo($supplier['SocialSecurityAndNationalInsuranceTrust'], PATHINFO_EXTENSION);
                 $dstfile = $this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/'.$filename;
                 if(!file_exists(dirname($dstfile))) mkdir(dirname($dstfile), 0777, true);
                 copy('https://www.appghana.com'.$supplier['SocialSecurityAndNationalInsuranceTrust'],$dstfile);
                 $id = $companyService->addDocument($em,$company,$requirement,$filename,'','','','','Awaiting Verification');
                 $logger->info('section 4',['status' => 'Tax Clearance Certificate uploaded', 'id' => $id]);
               }

               if(array_key_exists('CertificateOfIncorporation', $supplier) && $requirement->getDocumentType()->getName() == "Certificate of Incorporation" && $supplier['CertificateOfIncorporation'] != null)
               {
                 $filename = uniqid().'.'.pathinfo($supplier['CertificateOfIncorporation'], PATHINFO_EXTENSION);
                 $dstfile = $this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/'.$filename;
                 if(!file_exists(dirname($dstfile))) mkdir(dirname($dstfile), 0777, true);
                 copy('https://www.appghana.com'.$supplier['CertificateOfIncorporation'],$dstfile);
                 $id = $companyService->addDocument($em,$company,$requirement,$filename,'','','','','Awaiting Verification');
                 $logger->info('section 4',['status' => 'Certificate of Incorporation uploaded', 'id' => $id]);
               }
             }
           }

           if(array_key_exists('OtherDocuments', $supplier))
           {
             foreach ($supplier['OtherDocuments'] as $document) {

               if($company->getCompanyType())
               {
                 $type = $em->getRepository('AppBundle:CompanyType')->find($company->getCompanyType());
                 if($document["Name"] == "VAT Registration")
                 {
                   //$q->select('t')->from('AppBundle:CompanyTypeDocumentation','t')->join('t.documentType','d')->where('t.companyType = :companyType')->andWhere('d.name = "VAT Registration Certificate"');
                   $sql = "SELECT t.id FROM AppBundle:CompanyTypeDocumentation t INNER JOIN t.documentType d WHERE t.companyType = ".$type->getId()." AND d.name = 'VAT Registration Certificate'";
                   $filename = uniqid().'.'.pathinfo($document["Document"], PATHINFO_EXTENSION);
                   $dt = 'VAT Registration Certificate uploaded';
                 }
                 if($document["Name"] == "Certificate to Commence Business")
                 {
                   $sql = "SELECT t.id FROM AppBundle:CompanyTypeDocumentation t INNER JOIN t.documentType d WHERE t.companyType = ".$type->getId()." AND d.name = 'Certificate to Commence Business'";
                   //$q->select('t')->from('AppBundle:CompanyTypeDocumentation','t')->join('t.documentType','d')->where('t.companyType = :companyType')->andWhere('d.name = "Certificate to Commence Business"');
                   $filename = uniqid().'.'.pathinfo($document["Document"], PATHINFO_EXTENSION);
                   $dt = 'Certificate to Commence Business uploaded';
                 }
                 else {
                   //$q->select('t')->from('AppBundle:CompanyTypeDocumentation','t')->join('t.documentType','d')->where('t.companyType = :companyType')->andWhere('d.name = "Industry Related Certificates"');
                   $sql = "SELECT t.id FROM AppBundle:CompanyTypeDocumentation t INNER JOIN t.documentType d WHERE t.companyType = ".$type->getId()." AND d.name = 'Industry Related Certificates'";
                   $filename = $document["Name"].'-'.uniqid().'.'.pathinfo($document["Document"], PATHINFO_EXTENSION);
                   $dt = 'Industry Related Certificates uploaded';
                 }

                 $query = $em->createQuery($sql)->setMaxResults(1);
                 $doc_type = $query->execute();
                 //print_r($doc_type);
                 if(count($doc_type) > 0)
                 {
                   $dstfile = $this->getContainer()->getParameter ('uploads_directory').'Supplier Documents/'.$company->getName().'/'.$filename;
                   if(!file_exists(dirname($dstfile))) mkdir(dirname($dstfile), 0777, true);
                   copy('https://www.appghana.com'.$document["Document"],$dstfile);
                   $id = $companyService->addDocument($em,$company,$em->getRepository('AppBundle:CompanyTypeDocumentation')->find($doc_type[0]["id"]),$filename,'','','','','Awaiting Verification');
                   $logger->info('section 4',['status' => $dt, 'id' => $id]);
                 }

               }

             }
           }


           $company->setDeclareTrue($supplier['AcceptTerms2']);

           $logger->info('section 5',['status' => 'Completed']);
           $em->persist($company);
           $em->flush();
         }
      }
    }
