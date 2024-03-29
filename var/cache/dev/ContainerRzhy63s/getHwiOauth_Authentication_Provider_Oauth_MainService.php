<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.authentication.provider.oauth.main' shared service.

return $this->services['hwi_oauth.authentication.provider.oauth.main'] = new \HWI\Bundle\OAuthBundle\Security\Core\Authentication\Provider\OAuthProvider(${($_ = isset($this->services['hwi_oauth.user.provider.entity.main']) ? $this->services['hwi_oauth.user.provider.entity.main'] : $this->load('getHwiOauth_User_Provider_Entity_MainService.php')) && false ?: '_'}, ${($_ = isset($this->services['hwi_oauth.resource_ownermap.main']) ? $this->services['hwi_oauth.resource_ownermap.main'] : $this->getHwiOauth_ResourceOwnermap_MainService()) && false ?: '_'}, ${($_ = isset($this->services['hwi_oauth.user_checker']) ? $this->services['hwi_oauth.user_checker'] : ($this->services['hwi_oauth.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker())) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
