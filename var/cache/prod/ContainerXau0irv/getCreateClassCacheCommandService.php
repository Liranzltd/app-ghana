<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Sonata\AdminBundle\Command\CreateClassCacheCommand' shared service.

@trigger_error('The "Sonata\\AdminBundle\\Command\\CreateClassCacheCommand" service is deprecated since version sonata-project/admin-bundle 3.39.0 and will be removed in 4.0.', E_USER_DEPRECATED);

$this->services['Sonata\\AdminBundle\\Command\\CreateClassCacheCommand'] = $instance = new \Sonata\AdminBundle\Command\CreateClassCacheCommand($this->targetDirs[0], false);

$instance->setName('cache:create-cache-class');

return $instance;
