<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => ${($_ = isset($this->services['form.extension']) ? $this->services['form.extension'] : $this->load('getForm_ExtensionService.php')) && false ?: '_'}], ${($_ = isset($this->services['form.resolved_type_factory']) ? $this->services['form.resolved_type_factory'] : $this->load('getForm_ResolvedTypeFactoryService.php')) && false ?: '_'});
