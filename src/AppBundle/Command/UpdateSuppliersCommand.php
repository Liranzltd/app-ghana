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

class UpdateSuppliersCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('update:suppliers')
            ->setDescription('User confirmation')
            ->addArgument('id', InputArgument::OPTIONAL, 'The id of the company.')
        ;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $members = $this->csv_to_array($this->getContainer()->getParameter('uploads_directory').'active.csv');
        //print_r($members);
        $em = $this->getContainer()->get('doctrine')->getManager();
        $logger = $this->getContainer()->get('monolog.logger.import');
        foreach($members as $member)
        {
          $m = $em->getRepository('AppBundle:Member')->findOneBy(['email' => $member['ContactEmail']]);
          $m->setMobile($member['ContactPhone']);
          $em->persist($m);
          $c = $em->getRepository('AppBundle:Company')->findOneBy(['registeredBy' => $m]);
          $c->setStatus('Verified');
          $em->persist($c);
          $output->write($m->getId().'\l\n');
          $logger->info('result',['member' => $m->getFirstName(), 'Company' => $c->getId()]);
        }
        $em->flush();
    }

    function csv_to_array($filename='', $delimiter=',')
    {
        if(!file_exists($filename) || !is_readable($filename))
            return FALSE;

        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
            {
                if(!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }
        return $data;
    }
}
