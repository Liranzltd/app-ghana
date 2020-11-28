<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use App\Entity\RequestUpdate;
use AppBundle\Entity\Request;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;
use AppBundle\Entity\Buyer;

class RequestsReminderCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('requests:reminder')
            ->setDescription('Send reminders of expiring requests')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the request.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $time = new \DateTime();
        $em = $this->getContainer()->get('doctrine')->getManager();
        $output->writeln("Runtime ". $time->format('Y-m-d H:i:s'));
        if($input->getArgument('id'))
        {
          $request = $em->getRepository('AppBundle:Request','r')->find($input->getArgument('id'));
          $this->setUpdate($em,$request);
        }
        else {
          $q = $em->createQueryBuilder();
          $q->select('r')->from(Request::class,'r')->where('DATE_DIFF(r.deadline,CURRENT_TIMESTAMP()) = 4');
          //$q->select('r')->from('AppBundle:Request','r')->where('r.deadline < :now')->setParameter('now',new \DateTime());
          $requests = $q->getQuery()->getResult();
          if(count($requests) > 0)
          {
            foreach($requests as $request)
            {
              $this->sendReminder($em,$request,$output);
            }
          }

        }
    }

    function sendReminder($em,$request,$output)
    {
      $time = new \DateTime();
      $output->writeln("Request: ". $request->getName(). ' Time: '. $time->format('Y-m-d H:i:s').' ID: '.$request->getId());
      $companyService = $this->getContainer()->get('app.company.service');
      $requestType = $request->getRequestType() ? $request->getRequestType()->getName() : "";
      $requestName = $request->getName();
      $buyer = $request->getBuyer()->getName();
      $companyService->createRequestNotifications($em, $request,"APP GHANA - ".$requestType." Deadline Approaching",$requestName.' from '.$buyer.' is almost closing soon.');
    }
}
