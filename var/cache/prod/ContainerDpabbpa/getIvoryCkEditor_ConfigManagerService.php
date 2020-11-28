<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'ivory_ck_editor.config_manager' shared service.

$this->services['ivory_ck_editor.config_manager'] = $instance = new \Ivory\CKEditorBundle\Model\ConfigManager();

$instance->setConfigs(['my_config' => ['toolbar' => 'standard', 'uiColor' => '#000000']]);
$instance->setDefaultConfig('my_config');

return $instance;
