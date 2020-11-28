<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\Transaction;
use AppBundle\Entity\RequestUpdate;
use AppBundle\Entity\Request;
use AppBundle\Entity\TransactionSync;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;

class CloseRequestsCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('close:requests')
            ->setDescription('Change the status of closed requests')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the request.')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $time = new \DateTime();
        $output->writeln("Runtime ". $time->format('Y-m-d H:i:s'));
        if($input->getArgument('id'))
        {
          $request = $em->getRepository('AppBundle:Request')->find($input->getArgument('id'));
          $this->setUpdate($em,$request,$output);
        }
        else {
          $q = $em->createQueryBuilder();
          //$q->select('r')->from('AppBundle:Request','r')->where('r.deadline BETWEEN TIMESTAMP(DATE_SUB(NOW(), INTERVAL 1 MINUTE)) AND NOW()');
          //$q->select('r')->from('AppBundle:Request','r')->where('r.deadline < :now')->setParameter('now',new \DateTime());
          $q->select('r')->from('AppBundle:Request','r')->where('r.deadline >= :begin')->andWhere('r.deadline < :end')
            ->setParameter('begin',new \DateTime())
            ->setParameter('end',new \DateTime('+1 minutes'));
          $requests = $q->getQuery()->getResult();
          foreach($requests as $request)
          {
            $this->setUpdate($em,$request);
          }
        }
    }

    function setUpdate($em,$request,$output)
    {
      $companyService = $this->getContainer()->get('app.company.service');
      $requestType = $request->getRequestType() ? $request->getRequestType()->getName() : "";
      $buyer = $request->getBuyer()->getName();
      $requestName = $request->getName();
      $time = new \DateTime();
      $output->writeln("Request: ". $request->getName(). ' Time: '. $time->format('Y-m-d H:i:s').' ID: '.$request->getId());
      $companyService->createRequestNotifications($em, $request,"APP GHANA - ".$requestType." closed.",$requestName.' from '.$buyer.' has now closed.');

      $request->setStatus('Closed');
      $update = new RequestUpdate();
      $update->setStatus('Evaluation');
      $update->setRemarks('Closing date');
      $update->setActionDate(new \DateTime());
      $update->setRequest($request);
      $em->persist($request);
      $em->persist($update);
      $em->flush();
    }
}
