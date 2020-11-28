<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\UserBundle\Action\SendEmailAction' shared service.

return $this->services['Sonata\\UserBundle\\Action\\SendEmailAction'] = new \Sonata\UserBundle\Action\SendEmailAction(${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load('getTemplatingService.php')) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->load('getSonata_Admin_PoolService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.global_template_registry']) ? $this->services['sonata.admin.global_template_registry'] : $this->load('getSonata_Admin_GlobalTemplateRegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.user.mailer.default']) ? $this->services['sonata.user.mailer.default'] : $this->load('getSonata_User_Mailer_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.token_generator']) ? $this->services['fos_user.util.token_generator'] : ($this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator())) && false ?: '_'}, 7200);
