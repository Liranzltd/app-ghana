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
use AppBundle\Entity\CompanySubscription;
use AppBundle\Entity\CompanyReference;

class ImportUpdateCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('update:suppliers:subscription')
            ->setDescription('User confirmation')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $file = file_get_contents($this->getContainer()->getParameter('uploads_directory').'supplier.json');
      $suppliers = json_decode($file, true);
      $em = $this->getContainer()->get('doctrine')->getManager();
      foreach($suppliers as $supplier)
      {
        $company = $em->getRepository('AppBundle:Company')->findOneBy(['name' => trim(ucwords(strtolower($supplier['CompanyName'])))]);
        if($supplier['Validated'])
        {
          $company->setIiaValidated(true);
        }
        $company->setCreatedAt(new \DateTime($supplier['CreatedOn']));
        $company->setAmountDue($company->getMembershipCategory() == 'Local Supplier' ? $this->getContainer()->getParameter('supplier.registration.amountl') :  $this->getContainer()->getParameter('supplier.registration.amounti'));

        if(array_key_exists('SupplyBoundaries', $supplier) && count($supplier['SupplyBoundaries']) > 0)
        {
          foreach ($supplier['SupplyBoundaries'] as $boundary) {
            $province = $em->getRepository('AppBundle:Province')->findOneBy(['name' => trim($boundary['Name'])]);
            if($province && !$company->getProvinces()->contains($province))
            {
              $province->addCompany($company);
              $company->addProvince($province);
              $em->persist($province);
            }
          }
        }

        $expiryDate = new \DateTime($supplier['MembershipExpiresOn']);
        $now = new \DateTime();
        $isActive = false;
        $subscription = new CompanySubscription();
        $subscription->setExpiryDate($expiryDate);
        $subscription->setCompany($company);
        $subscription->setIsActive($expiryDate > $now ? true : false);
        $subscriptionDate = new \DateTime($supplier['MembershipExpiresOn']);
        $subscription->setSubscriptionDate($subscriptionDate->sub(new \DateInterval('P1Y')));
        $company->setSubscriptionDate($subscriptionDate);
        $em->persist($subscription);
        $em->persist($company);
        $em->flush();
        if($company->getSubscriptionStatus() == 'Active')
        {
          $company->setIsFullyPaidUp(true);
          $companyService = $this->getContainer()->get('app.company.service');
          //$companyService->pushToApis($em,$company);
          $em->persist($company);
          $em->flush();
        }
        $output->write('Company: '.$company->getName().' Subscription Status: '. $company->getSubscriptionStatus().' Account Renewal: '.$company->getAccountRenewal()->format('d/m/Y'));
      }
    }
}
