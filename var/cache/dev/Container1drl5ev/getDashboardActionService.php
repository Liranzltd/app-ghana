<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\AdminBundle\Action\DashboardAction' shared service.

$this->services['Sonata\\AdminBundle\\Action\\DashboardAction'] = $instance = new \Sonata\AdminBundle\Action\DashboardAction($this->parameters['sonata.admin.configuration.dashboard_blocks'], ${($_ = isset($this->services['sonata.admin.breadcrumbs_builder']) ? $this->services['sonata.admin.breadcrumbs_builder'] : $this->load('getSonata_Admin_BreadcrumbsBuilderService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.global_template_registry']) ? $this->services['sonata.admin.global_template_registry'] : $this->getSonata_Admin_GlobalTemplateRegistryService()) && false ?: '_'}, ${($_ = isset($this->services['sonata.admin.pool']) ? $this->services['sonata.admin.pool'] : $this->getSonata_Admin_PoolService()) && false ?: '_'});

$instance->setContainer($this);

return $instance;
