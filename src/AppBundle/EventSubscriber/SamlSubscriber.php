<?php

namespace AppBundle\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use AdactiveSas\Saml2BridgeBundle\SAML2\Event\Saml2Events;
use AdactiveSas\Saml2BridgeBundle\SAML2\Event\GetAuthnResponseEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class SamlSubscriber implements EventSubscriberInterface
{
    protected $token_storage;

    public function __construct(TokenStorageInterface $token_storage)
    {
      $this->token_storage = $token_storage;
    }

    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return array(
               'Saml2Events::SSO_AUTHN_GET_RESPONSE' => 'addEmail',
        );
    }

    public function addEmail(GetAuthnResponseEvent $event)
    {
      $assertionBuilders = $event->getAuthnResponseBuilder()->getAssertionBuilders();
      $assertionBuilders[0]->setAttribute('email',[$this->token_storage->getToken()->getUser()->getEmail()]);
      $event->getAuthnResponseBuilder()->setAssertionBuilders($assertionBuilders);
      return $event->getAuthnResponseBuilder()->getResponse();
    }
  }

 ?>
