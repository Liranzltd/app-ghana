<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.guesser.orm_datagrid_chain' shared service.

return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain([0 => ${($_ = isset($this->services['sonata.admin.guesser.orm_datagrid']) ? $this->services['sonata.admin.guesser.orm_datagrid'] : ($this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser())) && false ?: '_'}]);
