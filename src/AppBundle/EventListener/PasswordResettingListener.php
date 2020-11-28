<?php

namespace AppBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

/**
 * Listener responsible to change the redirection at the end of the password resetting
 */
class PasswordResettingListener implements EventSubscriberInterface {
    private $token_storage;
    private $router;

    public function __construct(TokenStorage $token_storage, UrlGeneratorInterface $router) {
        $this->token_storage = $token_storage;
        $this->router = $router;
    }

    public static function getSubscribedEvents() {
        return [
            FOSUserEvents::RESETTING_RESET_SUCCESS => 'onPasswordResettingSuccess',
        ];
    }

    public function onPasswordResettingSuccess(FormEvent $event) {
      $this->token_storage->setToken(null);
      $url = $this->router->generate('fos_user_security_login');
      $event->setResponse(new RedirectResponse($url));
    }
}

 ?>
