<?php

namespace AppBundle\Service;
use AppBundle\Entity\UserActivity;

Class ActivityService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
      $this->em = $this->container->get('doctrine')->getManager();
  }

  //keep track of actions for each job
  public function logUserActivity($module,$action,$member)
  {
    $activity = new UserActivity();
    $activity->setModule($module);
    $activity->setActivity($action);
    $activity->setMember($member);
    $activity->setCreatedAt(new \DateTime());
    $this->em->persist($activity);
    $this->em->flush();
  }

}
