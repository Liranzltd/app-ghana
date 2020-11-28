<?php

namespace AppBundle\Service;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\CrbCheck;


Class CRBService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
  }

  public function checkIdVerification($idNumber,$name1,$company,$passport = null,$alienID = null,$name2 = null,$name3 = null,$name4 = null)
  {
    $xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ws="http://ws.crbws.transunion.ke.co/">
                          <soapenv:Header/>
                          <soapenv:Body>
                            <ws:getProduct102>
                              <username>'.$this->container->getParameter('crbUser').'</username>
                              <password>'.$this->container->getParameter('crbPassword').'</password>
                              <code>'.$this->container->getParameter('crbCode').'</code>
                              <infinityCode>'.$this->container->getParameter('crbInfinityCode').'</infinityCode>
                              <name1>'.$name1.'</name1>
                              <name2>'.$name2.'</name2>
                              <name3>'.$name3.'</name3>
                              <name4>'.$name4.'</name4>
                              <nationalID>'.$idNumber.'</nationalID>
                              <passportNo>'.$passport.'</passportNo>
                              <alienID>'.$alienID.'</alienID>
                              <reportReason>1</reportReason>
                            </ws:getProduct102>
                          </soapenv:Body>
                        </soapenv:Envelope>';   // data from the form, e.g. some ID number
        $result = $this->getResult($xml_post_string,'getProduct102Request');
        $file = fopen($this->container->getParameter ('uploads_directory').'Supplier Documents/'.$company.'/.102.txt', 'w');
        fwrite($file,$result);

  }

  public function comprehensiveConsumerReport($idNumber,$name1,$company,$passport = null,$alienID = null,$name2 = null,$name3 = null,$name4 = null)
  {
    $xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ws="http://ws.crbws.transunion.ke.co/">
                          <soapenv:Header/>
                          <soapenv:Body>
                            <ws:getProduct109>
                              <username>'.$this->container->getParameter('crbUser').'</username>
                              <password>'.$this->container->getParameter('crbPassword').'</password>
                              <code>'.$this->container->getParameter('crbCode').'</code>
                              <infinityCode>'.$this->container->getParameter('crbInfinityCode').'</infinityCode>
                              <name1>'.htmlspecialchars($name1).'</name1>
                              <name2>'.htmlspecialchars($name2).'</name2>
                              <name3>'.htmlspecialchars($name3).'</name3>
                              <name4>'.htmlspecialchars($name4).'</name4>
                              <nationalID>'.$idNumber.'</nationalID>
                              <passportNo>'.$passport.'</passportNo>
                              <alienID>'.$alienID.'</alienID>
                              <reportSector>2</reportSector>
                              <reportReason>1</reportReason>
                            </ws:getProduct109>
                          </soapenv:Body>
                        </soapenv:Envelope>';   // data from the form, e.g. some ID number
        $reponse = $this->getResult($xml_post_string,'getProduct109');
        $this->persistCheck($company,$reponse);

  }
  public function comprehensiveCorporateReport($company)
  {
    $xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ws="http://ws.crbws.transunion.ke.co/">
                           <soapenv:Header/>
                           <soapenv:Body>
                              <ws:getProduct152>
                                 <username>'.$this->container->getParameter('crbUser').'</username>
                                 <password>'.$this->container->getParameter('crbPassword').'</password>
                                 <code>'.$this->container->getParameter('crbCode').'</code>
                                 <infinityCode>'.$this->container->getParameter('crbInfinityCode').'</infinityCode>
                                 <companyName>'.htmlspecialchars($company->getName()).'</companyName>
                                 <companyRegNo>'.htmlspecialchars($company->getRegistrationNumber()).'</companyRegNo>
                                 <taxID>'.$company->getGraTinNumber().'</taxID>
                                 <reportSector>2</reportSector>
                                 <reportReason>1</reportReason>
                              </ws:getProduct152>
                           </soapenv:Body>
                        </soapenv:Envelope>';
        $reponse = $this->getResult($xml_post_string,'getProduct152');
        $this->persistCheck($company,$reponse);
  }
  public function persistCheck($company,$response)
  {
    $msg = '';
    $logger = $this->container->get('monolog.logger.crb');

    if(is_array($response))
    {
      switch ($response['responseCode'])
      {
          case 200:
              $msg = 'Product request processed successfully';
              break;
          case 301:
              $msg = 'Insufficient Credit';
              break;
          case 202:
              $msg = 'Company not found or has not borrowed from any lenders';
              break;
          case 402:
              $msg = 'Required input missing';
              break;
          case 403:
              $msg = 'General Application Error';
              break;
          case 404:
              $msg = 'Service temporarily unavailable';
              break;
          case 408:
              $msg = 'Unable to verify National ID of Sole Proprietor';
              break;
          default:
              $msg = 'Unknown error, please contact CRB and give response code <b>'.$response['responseCode'].'</b>';
      }

      $crbReport = new CrbCheck();
      if(!array_key_exists('summary',$response))
      {
        $fname = 'crbcheck';
      }
      else {
        $fname = $response['header']['productDisplayName'];
        if(array_key_exists('lastPAListingDate',$response['summary']))
        {
          if(is_array($response['summary']['lastPAListingDate']))
          {
            if(array_key_exists('mySector',$response['summary']['lastPAListingDate']))
            {
              $mySectorDate = new \DateTime($response['summary']['lastPAListingDate']['mySector']);
              $crbReport->setLastPAListingDate($mySectorDate);
            }
            if(array_key_exists('otherSectors',$response['summary']['lastPAListingDate']))
            {
              $otherSectorsDate = new \DateTime($response['summary']['lastPAListingDate']['otherSectors']);
              $crbReport->setLastPAListingDate($otherSectorsDate);
            }
          }
        }
        if(array_key_exists('lastNPAListingDate',$response['summary']))
        {
          if(is_array($response['summary']['lastNPAListingDate']))
          {
            if(array_key_exists('mySector',$response['summary']['lastNPAListingDate']))
            {
              $mySectorDate = new \DateTime($response['summary']['lastNPAListingDate']['mySector']);
              $crbReport->setLastNPAListingDate($mySectorDate);
            }
            if(array_key_exists('otherSectors',$response['summary']['lastNPAListingDate']))
            {
              $otherSectorsDate = new \DateTime($response['summary']['lastNPAListingDate']['otherSectors']);
              $crbReport->setLastNPAListingDate($otherSectorsDate);
            }
          }
        }

        if(array_key_exists('lastLegalSuitDate',$response['summary']))
        {
          if(is_array($response['summary']['lastLegalSuitDate']))
          {
            if(array_key_exists('mySector',$response['summary']['lastLegalSuitDate']))
            {
              $mySectorDate = new \DateTime($response['summary']['lastLegalSuitDate']['mySector']);
              $crbReport->setLastLegalSuitDate($mySectorDate);
            }
            if(array_key_exists('otherSectors',$response['summary']['lastLegalSuitDate']))
            {
              $otherSectorsDate = new \DateTime($response['summary']['lastLegalSuitDate']['otherSectors']);
              $crbReport->setLastLegalSuitDate($otherSectorsDate);
            }
          }
        }

        if(array_key_exists('lastBouncedChequeDate',$response['summary']))
        {
          if(is_array($response['summary']['lastBouncedChequeDate']))
          {
            if(array_key_exists('mySector',$response['summary']['lastBouncedChequeDate']))
            {
              $mySectorDate = new \DateTime($response['summary']['lastBouncedChequeDate']['mySector']);
              $crbReport->setLastBouncedChequeDate($mySectorDate);
            }
            if(array_key_exists('otherSectors',$response['summary']['lastBouncedChequeDate']))
            {
              $otherSectorsDate = new \DateTime($response['summary']['lastBouncedChequeDate']['otherSectors']);
              $crbReport->setLastBouncedChequeDate($otherSectorsDate);
            }
          }
        }

        if(array_key_exists('lastFraudDate',$response['summary']))
        {
          if(is_array($response['summary']['lastFraudDate']))
          {
            if(array_key_exists('mySector',$response['summary']['lastFraudDate']))
            {
              $mySectorDate = new \DateTime($response['summary']['lastFraudDate']['mySector']);
              $crbReport->setLastFraudDate($mySectorDate);
            }
            if(array_key_exists('otherSectors',$response['summary']['lastFraudDate']))
            {
              $otherSectorsDate = new \DateTime($response['summary']['lastFraudDate']['otherSectors']);
              $crbReport->setLastFraudDate($otherSectorsDate);
            }
          }
        }

        if(array_key_exists('lastCreditApplicationDate',$response['summary']))
        {
          if(is_array($response['summary']['lastCreditApplicationDate']))
          {
            if(array_key_exists('mySector',$response['summary']['lastCreditApplicationDate']))
            {
              $mySectorDate = new \DateTime($response['summary']['lastCreditApplicationDate']['mySector']);
              $crbReport->setLastCreditApplicationDate($mySectorDate);
            }
            if(array_key_exists('otherSectors',$response['summary']['lastCreditApplicationDate']))
            {
              $otherSectorsDate = new \DateTime($response['summary']['lastCreditApplicationDate']['otherSectors']);
              $crbReport->setLastCreditApplicationDate($otherSectorsDate);
            }
          }
        }

        $crbReport->setCreditHistory(array_key_exists('creditHistory',$response['summary']) ?  $response['summary']['creditHistory']['mySector'] + $response['summary']['creditHistory']['otherSectors'] : 0);
        $crbReport->setNpaAccounts(array_key_exists('npaAccounts',$response['summary']) ?  $response['summary']['npaAccounts']['mySector'] + $response['summary']['npaAccounts']['otherSectors'] : 0);

        if(array_key_exists('npaTotalValueList',$response['summary']))
        {
          $crbReport->setNpaTotalValue($response['summary']['npaTotalValueList']['mySector'] + $response['summary']['npaTotalValueList']['otherSectors']);
          $crbReport->setNpaTotalValueCurrency($response['summary']['npaTotalValueList']['currency']);
        }
        if(array_key_exists('paTotalValueList',$response['summary']))
        {
          $crbReport->setpaTotalValue($response['summary']['paTotalValueList']['mySector'] + $response['summary']['paTotalValueList']['otherSectors']);
          //$crbReport->setNpaTotalValueCurrency($response['summary']['npaTotalValueList']['currency']);
        }

        $crbReport->setOpenAccounts(array_key_exists('openAccounts',$response['summary']) ?  $response['summary']['openAccounts']['mySector'] + $response['summary']['openAccounts']['otherSectors'] : 0);
        $crbReport->setClosedAccounts(array_key_exists('closedAccounts',$response['summary']) ?  $response['summary']['closedAccounts']['mySector'] + $response['summary']['closedAccounts']['otherSectors'] : 0);
        $crbReport->setPaAccounts(array_key_exists('paAccounts',$response['summary']) ?  $response['summary']['paAccounts']['mySector'] + $response['summary']['paAccounts']['otherSectors'] : 0);
        $crbReport->setPaTotalValue(array_key_exists('paTotalValue',$response['summary']) ?  $response['summary']['paTotalValue']['mySector'] + $response['summary']['paTotalValue']['otherSectors'] : 0);
        $crbReport->setPaOpenAccounts(array_key_exists('paOpenAccounts',$response['summary']) ?  $response['summary']['paOpenAccounts']['mySector'] + $response['summary']['paOpenAccounts']['otherSectors'] : 0);
        $crbReport->setPaClosedAccounts(array_key_exists('paClosedAccounts',$response['summary']) ?  $response['summary']['paClosedAccounts']['mySector'] + $response['summary']['paClosedAccounts']['otherSectors'] : 0);
        $crbReport->setLegalSuits(array_key_exists('legalSuits',$response['summary']) ? $response['summary']['legalSuits']['mySector'] + $response['summary']['legalSuits']['otherSectors'] : 0);
        $crbReport->setBouncedCheques(array_key_exists('bouncedCheques',$response['summary']) ? $response['summary']['bouncedCheques']['mySector'] + $response['summary']['bouncedCheques']['otherSectors'] : 0);
        $crbReport->setFraudulentCases(array_key_exists('fraudulentCases',$response['summary']) ? $response['summary']['fraudulentCases']['mySector'] + $response['summary']['fraudulentCases']['otherSectors'] : 0);
        $crbReport->setCreditApplications(array_key_exists('creditApplications',$response['summary']) ? $response['summary']['creditApplications']['mySector'] + $response['summary']['creditApplications']['otherSectors'] : 0);
        $crbReport->setEnquiriesLast30Days(array_key_exists('enquiriesLast30Days',$response['summary']) ? $response['summary']['enquiriesLast30Days']['mySector'] + $response['summary']['enquiriesLast30Days']['otherSectors'] : 0);
        $crbReport->setFraudulentCases(array_key_exists('fraudulentCases',$response['summary']) ? $response['summary']['fraudulentCases']['mySector'] + $response['summary']['fraudulentCases']['otherSectors'] : 0);
        $crbReport->setEnquiries31to60Days(array_key_exists('enquiries31to60Days',$response['summary']) ? $response['summary']['enquiries31to60Days']['mySector'] + $response['summary']['enquiries31to60Days']['otherSectors'] : 0);
        $crbReport->setEnquiriesLast30Days(array_key_exists('enquiriesLast30Days',$response['summary']) ? $response['summary']['enquiriesLast30Days']['mySector'] + $response['summary']['enquiriesLast30Days']['otherSectors'] : 0);
        $crbReport->setEnquiries61to90Days(array_key_exists('enquiries61to90Days',$response['summary']) ? $response['summary']['enquiries61to90Days']['mySector'] + $response['summary']['enquiries61to90Days']['otherSectors'] : 0);
        $crbReport->setEnquiries91Days(array_key_exists('enquiries91Days',$response['summary']) ? $response['summary']['enquiries91Days']['mySector'] + $response['summary']['enquiries91Days']['otherSectors'] : 0);
      }
      if(file_exists($this->container->getParameter('uploads_directory')."Supplier Documents/".$company->getName()))
      {
        $file = fopen($this->container->getParameter('uploads_directory')."Supplier Documents/".$company->getName()."/".$fname.".txt", "w");
      }
      elseif (file_exists($this->container->getParameter('uploads_directory')."Supplier Documents/".$company->getTradingName())) {
        $file = fopen($this->container->getParameter('uploads_directory')."Supplier Documents/".$company->getTradingName()."/".$fname.".txt", "w");
      }
      else {
        mkdir($this->container->getParameter('uploads_directory')."Supplier Documents/temp/".$company->getId());
        $file = fopen($this->container->getParameter('uploads_directory')."Supplier Documents/temp/".$company->getId()."/".$fname.".txt", "w");
      }
      fwrite($file, json_encode($response));
      fclose($file);
      $em = $this->container->get('doctrine')->getManager();

      $crbReport->setResponse($msg);
      $crbReport->setCompany($company);
      $em->persist($crbReport);
      $company->setCrbChecked(true);
      $em->persist($company);
      $em->flush();
    }
  }
  public function getResult($xml_post_string,$url)
  {

    $headers = array(
                 "Content-type: text/xml;charset=\"utf-8\"",
                 "Accept: text/xml",
                 "Cache-Control: no-cache",
                 "Pragma: no-cache",
                 "SOAPAction: ".$this->container->getParameter('crbBaseURL').$url,
                 "Content-length: ".strlen($xml_post_string),
             ); //SOAPAction: your op URL

    // PHP cURL  for https connection with auth
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_URL, $this->container->getParameter('crbWSDL'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, $this->container->getParameter('crbAuthUsername').":".$this->container->getParameter('crbAuthPassword')); // username and password - declared at the top of the doc
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // $logger = $this->container->get('monolog.logger.crb');
    // $logger->info('Values',['xml' => $xml_post_string]);
    // converting
    $response = curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    //$logger->info('Response',[$response]);

    $dom = new \DOMDocument();
    $dom->loadXML($response);

    $xpath = new \DOMXPath($dom);
    $result = array();


    foreach ($xpath->query('//*[count(*) = 0]') as $node) {
        $path = array();
        $val = $node->nodeValue;

        do {
            if ($node->hasAttributes()) {
                foreach ($node->attributes as $attribute) {
                    $path[] = sprintf('%s[%s]', $attribute->nodeName, $attribute->nodeValue);
                }
            }
            $path[] = $node->nodeName;
        }
        while ($node = $node->parentNode);
        $keys = (array_slice(array_reverse($path), 5));
        $result[implode('/',$keys)] = $val;
    }
    $results=array();
    foreach($result as $key => $value)
    {
        $string="";
        $numberOfWords=explode("/", $key);
        //print_r($numberOfWords);
        foreach($numberOfWords as $newValue)
        {
            $string.="['$newValue']";
        }
        eval('$results'.$string."= \"$value\";");
    }
    return $results;
  }
}
