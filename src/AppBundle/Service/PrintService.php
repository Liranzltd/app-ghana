<?php

namespace AppBundle\Service;
use AppBundle\Entity\JobUpdate;
use AppBundle\Entity\JobAssignment;

Class PrintService
{
  protected $container;

  public function  __construct($container)
  {
      $this->container = $container;
      $this->em = $this->container->get('doctrine')->getManager();
  }

  //keep track of actions for each job
  public function generatePDF($template,$filename,$options = array())
  {
    $this->container->get('knp_snappy.pdf')->setOption('margin-left', 0);
    $this->container->get('knp_snappy.pdf')->setOption('margin-right', 0);
    $this->container->get('knp_snappy.pdf')->setOption('margin-top', 0);
    $this->container->get('knp_snappy.pdf')->setOption('margin-bottom', 0);
    $this->container->get('knp_snappy.pdf')->setOption('minimum-font-size',8);

    $templateContent = $this->container->get('twig')->loadTemplate($template);
    $html = $templateContent->render(array('options' => $options));

    $this->container->get('knp_snappy.pdf')->generateFromHtml($html,$filename,array(),true);
  }

}
