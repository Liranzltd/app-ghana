<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.core.form.type.date_picker' shared service.

return $this->services['sonata.core.form.type.date_picker'] = new \Sonata\Form\Type\DatePickerType(${($_ = isset($this->services['sonata.core.date.moment_format_converter']) ? $this->services['sonata.core.date.moment_format_converter'] : ($this->services['sonata.core.date.moment_format_converter'] = new \Sonata\Form\Date\MomentFormatConverter())) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
