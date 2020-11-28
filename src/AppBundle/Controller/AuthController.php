<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* @Route("/auth")
*/
class AuthController extends Controller
{
  /**
   * @Route("/login", name="auth-login")
   */
   public function loginAction(Request $request)
   {
     $data = $request->query->all();
     print_r($data);
     exit;
   }
   /**
    * @Route("/logout", name="auth-logout")
    */
    public function logoutAction(Request $request)
    {
      $data = $request->query->all();
      print_r($data);
      exit;
    }
}
