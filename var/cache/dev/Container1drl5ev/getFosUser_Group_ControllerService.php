<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.group.controller' shared service.

$this->services['fos_user.group.controller'] = $instance = new \FOS\UserBundle\Controller\GroupController(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.group.form.factory']) ? $this->services['fos_user.group.form.factory'] : $this->load('getFosUser_Group_Form_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.group_manager']) ? $this->services['fos_user.group_manager'] : $this->load('getFosUser_GroupManagerService.php')) && false ?: '_'});

$instance->setContainer($this);

return $instance;
