<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\AdminBundle\Command\GenerateObjectAclCommand' shared service.

$this->services['Sonata\\AdminBundle\\Command\\GenerateObjectAclCommand'] = $instance = new \Sonata\AdminBundle\Command\GenerateObjectAclCommand(${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'}, [], ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});

$instance->setName('sonata:admin:generate-object-acl');

return $instance;
