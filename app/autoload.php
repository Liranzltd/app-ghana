<?php

use Composer\Autoload\ClassLoader;

/** @var ClassLoader $loader */
$loader = require __DIR__.'/../vendor/autoload.php';
// $classMap = array(
//     'ApiHost' => __DIR__.'/../vendor/hubtel/ApiHost.php',
//     'ApiMessage' => __DIR__.'/../vendor/hubtel/ApiMessage.php',
// );
// $loader->addClassMap($classMap);
$loader->add('DoctrineExtensions', __DIR__.'/../vendor/beberlei/lib/DoctrineExtensions');
return $loader;
