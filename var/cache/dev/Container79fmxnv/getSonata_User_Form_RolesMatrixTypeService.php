<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.user.form.roles_matrix_type' shared service.

return $this->services['sonata.user.form.roles_matrix_type'] = new \Sonata\UserBundle\Form\Type\RolesMatrixType(${($_ = isset($this->services['sonata.user.matrix_roles_builder']) ? $this->services['sonata.user.matrix_roles_builder'] : $this->getSonata_User_MatrixRolesBuilderService()) && false ?: '_'});
