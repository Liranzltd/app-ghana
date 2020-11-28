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

class UserToSourceDoggCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('sd:create:user')
            ->setDescription('Register User on SourceDogg')
            ->addArgument('id', InputArgument::REQUIRED, 'The id of the user.')
            //->addArgument('company', InputArgument::REQUIRED, 'The organisation.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $em = $this->getContainer()->get('doctrine')->getManager();
      $member = $em->getRepository('AppBundle:Member')->find($input->getArgument('id'));
      $this->pushMember($member,$em,$output);
      // else {
      //   $em = $this->getContainer()->get('doctrine')->getManager();
      //   $companies = $em->getRepository('AppBundle:Company')->findAll();
      //   foreach ($companies as $company) {
      //     $this->pushCompany($company,$em,$output);
      //   }
      // }
    }

    function pushMember($member,$em,$output)
    {
      try {
        $token = Utils::getToken($this->getContainer()->getParameter('sourcedogg.token'),
          [
            'username' => $this->getContainer()->getParameter('sourcedogg.user'),
            'password' => $this->getContainer()->getParameter('sourcedogg.pwd'),
            'grant_type' => 'password'
          ]);

        $url = $this->getContainer()->getParameter('sourcedogg.newUser');

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
        ];

        $params = [
          'firstName' => $member->getFirstName(),
          'surname' => $member->getSurname(),
          'email' => $member->getEmail(),
          'memberId' => $member->getId(),
          'enabled' => $member->getUser()->isEnabled(),
          'registrationDate' => $member->getCreatedAt()->format("Y-m-d H:i:s"),
          'country' => 'GH',
          "telephone" => $member->getMobile()
        ];

        $companies = [];

        foreach ($member->getCompanies() as $company) {
          array_push($companies,$company->getName());
        }

        $params["companies"] = $companies;

        $guzzle = new \GuzzleHttp\Client(['headers' => $headers]);

        $result = json_decode($guzzle->post($url, [
            'form_params' => $params
        ])->getBody()->getContents());

        $logger = $this->getContainer()->get('monolog.logger.dumps');
        $logger->info('result',['user added']);

        $output->writeLn($result);
        $member->setIsOnSourceDogg(true);
        $em->persist($member);
        $em->flush();
        $output->writeLn($member->getFirstName().' Created Successful');
      }
        catch (\Exception $e) {
          $notifications = $this->getContainer()->get('app.notifications');
          Utils::errorReporting($e,'SD member Creation  member id: '.$member->getId().' member name: '.$member->getFirstName(),$notifications);
          $output->writeLn('error occured');
        }
    }

}
