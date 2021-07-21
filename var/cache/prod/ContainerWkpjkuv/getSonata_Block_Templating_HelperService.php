<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.block.templating.helper' shared service.

return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper(${($_ = isset($this->services['sonata.block.manager']) ? $this->services['sonata.block.manager'] : $this->load('getSonata_Block_ManagerService.php')) && false ?: '_'}, $this->parameters['sonata_block.cache_blocks'], ${($_ = isset($this->services['sonata.block.renderer.default']) ? $this->services['sonata.block.renderer.default'] : $this->load('getSonata_Block_Renderer_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['sonata.block.context_manager.default']) ? $this->services['sonata.block.context_manager.default'] : $this->load('getSonata_Block_ContextManager_DefaultService.php')) && false ?: '_'}, ${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['sonata.block.cache.handler.default']) ? $this->services['sonata.block.cache.handler.default'] : ($this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler())) && false ?: '_'}, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'});
