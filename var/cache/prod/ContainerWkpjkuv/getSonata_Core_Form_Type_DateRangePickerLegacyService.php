<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.core.form.type.date_range_picker_legacy' shared service.

return $this->services['sonata.core.form.type.date_range_picker_legacy'] = new \Sonata\CoreBundle\Form\Type\DateRangePickerType(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
