<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
* @Route("/admin/user-guide")
*/
class UserGuideController extends Controller
{
  /**
     * @Route("/", name="user-guide")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $admin_pool = $this->get('sonata.admin.pool');

        $content = null;

        if($request->query->get('id'))
        {
          $em = $this->container->get('doctrine')->getManager();

          $content = $em->getRepository('AppBundle:UserGuide')->find($request->query->get('id'));
        }
        return array(
            'admin_pool' => $admin_pool, 'content' => $content);
    }
}
