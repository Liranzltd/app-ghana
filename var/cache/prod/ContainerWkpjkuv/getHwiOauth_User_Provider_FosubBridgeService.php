<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hwi_oauth.user.provider.fosub_bridge' shared service.

return $this->services['hwi_oauth.user.provider.fosub_bridge'] = new \HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider(${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'}, ['azure' => 'azure_id']);
