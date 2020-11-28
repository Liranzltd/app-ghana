<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\DriverManager;
use AppBundle\Utils;

class DBBackupCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('db:backup')
            ->setDescription('User confirmation')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $date = date("Y-m-d-H-i-s");
      $backupFile = $this->getContainer()->getParameter('database_name') . $date . '.gz';
      $command = "mysqldump --opt -h ".$this->getContainer()->getParameter('database_host')." --user=".$this->getContainer()->getParameter('database_user')." --password=".$this->getContainer()->getParameter('database_password')." ".$this->getContainer()->getParameter('database_name')." | gzip > $backupFile";
      //$output->writeln('Command' [$command]);
      system($command);
      system('sudo dropbox_uploader upload '.$backupFile.' /');
      system('sudo rm -rf '.$backupFile);
      //system('cd /var/zpanel/hostdata/zadmin/public_html/appkenya_com/web/uploads/');
      system('sudo zip -r /var/zpanel/hostdata/zadmin/public_html/appkenya_com/web/uploads/docs.zip /var/zpanel/hostdata/zadmin/public_html/appkenya_com/web/uploads/documents');
      //system('sudo dropbox_uploader delete /docs.zip');
      system('sudo dropbox_uploader upload /var/zpanel/hostdata/zadmin/public_html/appkenya_com/web/uploads/docs.zip /');
      system('sudo rm -rf /var/zpanel/hostdata/zadmin/public_html/appkenya_com/web/uploads/docs.zip');
    }
}
