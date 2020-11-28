<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.core.flashmessage.manager' shared service.

return $this->services['sonata.core.flashmessage.manager'] = new \Sonata\Twig\FlashMessage\FlashManager(${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ['success' => ['success' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_success' => ['domain' => 'SonataAdminBundle'], 'sonata_user_success' => ['domain' => 'SonataUserBundle'], 'fos_user_success' => ['domain' => 'FOSUserBundle']], 'warning' => ['warning' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_info' => ['domain' => 'SonataAdminBundle']], 'danger' => ['error' => ['domain' => 'SonataCoreBundle'], 'sonata_flash_error' => ['domain' => 'SonataAdminBundle'], 'sonata_user_error' => ['domain' => 'SonataUserBundle']]], ['success' => 'success', 'warning' => 'warning', 'danger' => 'danger']);
