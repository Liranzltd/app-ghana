<?php
namespace AppBundle\Provider;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use HWI\Bundle\OAuthBundle\Security\Core\Exception\AccountNotLinkedException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Routing\Router;

class OAuthFailureHandler implements AuthenticationFailureHandlerInterface {

  protected $router;

  public function __construct(Router $router)
  {
      $this->router = $router;
  }
  public function onAuthenticationFailure( Request $request, AuthenticationException $exception) {

      if ( !$exception instanceof AccountNotLinkedException ) {
          throw $exception;
      }
      return new RedirectResponse($this->router->generate('user-register'));
  }

}

?>
