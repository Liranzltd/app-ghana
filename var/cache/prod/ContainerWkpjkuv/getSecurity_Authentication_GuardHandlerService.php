<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.guard_handler' shared service.

$this->services['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, []);

$instance->setSessionAuthenticationStrategy(${($_ = isset($this->services['security.authentication.session_strategy.admin']) ? $this->services['security.authentication.session_strategy.admin'] : ($this->services['security.authentication.session_strategy.admin'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))) && false ?: '_'});

return $instance;
