<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'monolog.handler.import' shared service.

$this->services['monolog.handler.import'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/import.log'), 100, true, NULL, false);

$instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});

return $instance;
