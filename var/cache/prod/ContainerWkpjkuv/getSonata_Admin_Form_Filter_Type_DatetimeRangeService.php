<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.form.filter.type.datetime_range' shared service.

return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
