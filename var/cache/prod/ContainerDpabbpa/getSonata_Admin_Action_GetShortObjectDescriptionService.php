<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.action.get_short_object_description' shared service.

return $this->services['sonata.admin.action.get_short_object_description'] = new \Sonata\AdminBundle\Action\GetShortObjectDescriptionAction(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->load('getTwigService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->load('getSonata_Admin_PoolService.php')) && false ?: '_'});
