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

class AddToGroupCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('company:to:hivebrite:group')
            ->setDescription('Add to HiveBrite Group')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        if($input->getArgument('id'))
        {
          $company = $em->getRepository('AppBundle:Company')->find($input->getArgument('id'));
          $this->pushToApis($em,$company,$output);
        }
        else {
          $q = $em->createQueryBuilder();
          $q->select('c')->from('AppBundle:Company','c')->join('c.subscription','s')->where('s.isActive = 1');
          $companies = $q->getQuery()->getResult();
          foreach($companies as $company)
          {
            $this->pushToApis($em,$company,$output);
          }
        }
    }

    protected function pushToApis($em,$company,$output)
    {
      $hivebrite = $this->getContainer()->get('app.hivebrite');
      $output->writeLn('Company: '.$company->getName());

      //register company on hivebrite
      try {
        if($company->getHiveBriteId() == null)
        {
          $hbriteCoId = $hivebrite->addCompany($company);
          //$output->writeLn('no hivebrite id');
          $output->writeLn('HiveBrite Company id: '.$hbriteCoId->company->id);
          $hid = $hbriteCoId->company->id;
          $company->setHiveBriteId($hid);
          $em->persist($company);
        }
        else {
          $hid = $company->getHiveBriteId();
          $output->writeLn('has hivebrite id');
        }
        if($company->getHiveBriteNetworkId() == null)
        {
          $network = $hivebrite->addNetwork($company->getName());
          //$output->writeLn($network);
          $output->writeLn('HiveBrite Network id: '.$network->sub_network->id);
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
          print_r($hbriteUId);
          $member->setHiveBriteId($hbriteUId->user->id);
          $output->writeLn('HiveBrite User id: '.$hbriteUId->user->id);
          //  $azure = $this->container->get('app.azure');
          //$azure->manageUser($em,$member,'POST',$member->getFirstName().$member->getSurname().$member->getId(),$member->getFirstName(),$member->getSurname(),$member->getEmail(),Utils::decrypt($member->getDhot()),'Supplier',$company->getWebsite());
          $hivebrite->addFollowers($this->getContainer()->getParameter('hiveBriteGroupId'),$hbriteUId->user->id);
          $em->persist($member);
        }
        else {
          $hivebrite->addFollowers($this->getContainer()->getParameter('hiveBriteGroupId'),$member->getHiveBriteId());
        }

        $em->persist($company);
        $em->flush();
      } catch (\Exception $e) {
        error_log($e->getMessage());
        $output->writeLn($e->getMessage());
      }
    }
}
