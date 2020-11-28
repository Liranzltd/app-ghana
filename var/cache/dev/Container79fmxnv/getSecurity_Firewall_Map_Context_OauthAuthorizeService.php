<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.oauth_authorize' shared service.

$a = ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->getSecurity_HttpUtilsService()) && false ?: '_'};

return $this->services['security.firewall.map.context.oauth_authorize'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ${($_ = isset($this->services['security.channel_listener']) ? $this->services['security.channel_listener'] : $this->load('getSecurity_ChannelListenerService.php')) && false ?: '_'};
    yield 1 => ${($_ = isset($this->services['security.context_listener.1']) ? $this->services['security.context_listener.1'] : $this->load('getSecurity_ContextListener_1Service.php')) && false ?: '_'};
    yield 2 => ${($_ = isset($this->services['security.authentication.listener.form.oauth_authorize']) ? $this->services['security.authentication.listener.form.oauth_authorize'] : $this->load('getSecurity_Authentication_Listener_Form_OauthAuthorizeService.php')) && false ?: '_'};
    yield 3 => ${($_ = isset($this->services['security.authentication.listener.anonymous.oauth_authorize']) ? $this->services['security.authentication.listener.anonymous.oauth_authorize'] : $this->load('getSecurity_Authentication_Listener_Anonymous_OauthAuthorizeService.php')) && false ?: '_'};
    yield 4 => ${($_ = isset($this->services['security.access_listener']) ? $this->services['security.access_listener'] : $this->load('getSecurity_AccessListenerService.php')) && false ?: '_'};
}, 5), new \Symfony\Component\Security\Http\Firewall\ExceptionListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, $a, 'oauth_authorize', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, $a, '/oauth/v2/auth_login', false), NULL, NULL, ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, false), NULL, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('oauth_authorize', 'security.user_checker', 'security.request_matcher.kenuv22', true, false, 'fos_user.user_provider.username', 'oauth_authorize', 'security.authentication.form_entry_point.oauth_authorize', NULL, NULL, [0 => 'form_login', 1 => 'anonymous'], NULL));
