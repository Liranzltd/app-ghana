<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\AdminBundle\Command\ExplainAdminCommand' shared service.

$this->services['Sonata\\AdminBundle\\Command\\ExplainAdminCommand'] = $instance = new \Sonata\AdminBundle\Command\ExplainAdminCommand(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->load('getSonata_Admin_PoolService.php')) && false ?: '_'}, ${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'});

$instance->setName('sonata:admin:explain');

return $instance;
