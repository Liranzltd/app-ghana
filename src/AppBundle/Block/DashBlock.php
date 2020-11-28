<?php

namespace AppBundle\Block;

use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\BlockBundle\Block\Service\AbstractBlockService;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Util;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 *
 */
class DashBlock extends AbstractBlockService
{

    private $container;

    public function __construct($name, $templating,$container)
    {
        parent::__construct($name,$templating, $container);
        $this->container = $container;
    }

    public function configureSettings(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'url'      => false,
            'title'    => 'Dashboard',
            'template' => 'AppBundle:block:dash.html.twig',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'Dashboard';
    }

    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
      $em = $this->container->get('doctrine')->getManager();
      $companies = $em->getRepository('AppBundle:Company')->findAll();
      $buyers= $em->getRepository('AppBundle:Company')->findBy(['memberType' => 'Buyer']);
      $suppliers = $em->getRepository('AppBundle:Company')->findBy(['memberType' => 'Supplier'],['createdAt' => 'DESC']);
      $incomplete_registrations = $em->getRepository('AppBundle:Company')->findBy(['hiveBriteId' => NULL],['createdAt' => 'DESC']);
      $v = $em->createQueryBuilder();
      $v->select('v')->from('AppBundle:Company','v')->where('v.status = ?0')->orWhere('v.status = ?1')->orderBy('v.createdAt','ASC');
      $v->setParameters(["Awaiting Verification","Verification in Progress"]);
      $verification_companies = $v->getQuery()->getResult();

      $p = $em->createQueryBuilder();
      $p->select('p')->from('AppBundle:Payment','p')->where('DATE(p.createdAt) = CURRENT_DATE()')->orderBy('p.createdAt','DESC');
      $payments = $p->getQuery()->getResult();
      $members = $em->getRepository('AppBundle:Member')->findAll();
        $settings = $blockContext->getSettings();
        return $this->renderResponse($blockContext->getTemplate(), array(
            'block'     => $blockContext->getBlock(),
            'settings'  => $settings,
            'members' => $members,
            'companies' => $companies,
            'payments' => $payments,
            'buyers' => $buyers,
            'suppliers' => $suppliers,
            'incomplete_registrations' => $incomplete_registrations,
            'verification_companies' => $verification_companies
        ), $response);
    }
}
