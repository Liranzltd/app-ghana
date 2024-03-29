<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

$a = new \Symfony\Component\Config\Loader\LoaderResolver();

$b = ${($_ = isset($this->services['file_locator']) ? $this->services['file_locator'] : ($this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources'), [0 => ($this->targetDirs[3].'\\app')]))) && false ?: '_'};
$c = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

$d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($c);
$e = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($c);

$a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$a->addLoader($d);
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));
$a->addLoader(${($_ = isset($this->services['sonata.admin.route_loader']) ? $this->services['sonata.admin.route_loader'] : $this->load('getSonata_Admin_RouteLoaderService.php')) && false ?: '_'});
$a->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader(${($_ = isset($this->services['assetic.asset_manager']) ? $this->services['assetic.asset_manager'] : $this->load('getAssetic_AssetManagerService.php')) && false ?: '_'}, []));
$a->addLoader($e);
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $e));
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $e));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, $a);
