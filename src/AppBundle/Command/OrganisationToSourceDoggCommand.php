<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\Transaction;
use AppBundle\Entity\Member;
use AppBundle\Entity\TransactionSync;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;

class OrganisationToSourceDoggCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('sd:create:company')
            ->setDescription('Register Supplier on SourceDogg')
            ->addArgument('id', InputArgument::REQUIRED, 'The id of the company.')
            ->addArgument('type', InputArgument::REQUIRED, 'The tye of organisation.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $em = $this->getContainer()->get('doctrine')->getManager();
      if($input->getArgument('type') == 'buyer')
      {
        $company = $em->getRepository('AppBundle:Buyer')->find($input->getArgument('id'));
      }
      else
      {
        $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
      }
       $this->pushCompany($company,$em,$output,ucfirst($input->getArgument('type')));
      // else {
      //
      //   $companies = $em->getRepository('AppBundle:Company')->findAll();
      //   foreach ($companies as $company) {
      //     $this->pushCompany($company,$em,$output);
      //   }
      // }
    }

    function pushCompany($company,$em,$output,$type)
    {
      try {
        $token = Utils::getToken($this->getContainer()->getParameter('sourcedogg.token'),
          [
            'username' => $this->getContainer()->getParameter('sourcedogg.user'),
            'password' => $this->getContainer()->getParameter('sourcedogg.pwd'),
            'grant_type' => 'password'
          ]);

        $url = $this->getContainer()->getParameter('sourcedogg.newOrganisation');

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
        ];

        $params = [
          'name' => $company->getName(),
          'typeOfCompany' => $company->getCompanyType(),
          'dateOfRegistration' => $company->getRegistrationDate()->format('d/m/Y'),
          'id' => $company->getId(),
          'subscriptionStatus' => $company->getCurrentSubscriptionStatus(),
          'membershipType' => $type
        ];

        $categories = [];

        foreach ($company->getCategories() as $category) {
          array_push($categories,$category->getName());
        }

        $params["categories"] = $categories;


        $guzzle = new \GuzzleHttp\Client(['headers' => $headers]);

        $result = json_decode($guzzle->post($url, [
            'form_params' => $params
        ])->getBody()->getContents());

        $logger = $this->getContainer()->get('monolog.logger.dumps');
        $logger->info('result',['company added']);
        $company->setIsOnSourceDogg(true);
        $em->persist($company);
        $em->flush();
        $output->writeLn($company->getName().' Created Successful');
      }
        catch (\Exception $e) {
          $notifications = $this->getContainer()->get('app.notifications');
          Utils::errorReporting($e,'SD Company Creation  Company id: '.$company->getId().' Company name: '.$company->getName(),$notifications);
          $output->writeLn('error occured');
        }
    }

}
