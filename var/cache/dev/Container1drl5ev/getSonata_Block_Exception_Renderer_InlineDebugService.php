<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.block.exception.renderer.inline_debug' shared service.

return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer(${($_ = isset($this->services['sonata.templating']) ? $this->services['sonata.templating'] : $this->load('getSonata_TemplatingService.php')) && false ?: '_'}, '@SonataBlock/Block/block_exception_debug.html.twig', true, true);
