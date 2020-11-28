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

class ConfirmationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('set:confirmation')
            ->setDescription('User confirmation')
        ;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $tokenGenerator = $this->getContainer()->get('fos_user.util.token_generator');
        $users = $em->getRepository('ApplicationSonataUserBundle:User')->findBy(array('confirmationToken' => NULL));

        foreach($users as $user)
        {
          $user->setConfirmationToken($tokenGenerator->generateToken());
          $em->merge($user);
          $em->flush();
        }
    }

}
