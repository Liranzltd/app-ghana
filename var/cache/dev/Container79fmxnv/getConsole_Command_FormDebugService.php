<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->load('getForm_RegistryService.php')) && false ?: '_'}, [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 2 => 'Sonata\\CoreBundle\\Form\\Type', 3 => 'Sonata\\Form\\Type', 4 => 'Sonata\\BlockBundle\\Form\\Type', 5 => 'Sonata\\AdminBundle\\Form\\Type', 6 => 'Sonata\\AdminBundle\\Form\\Type\\Filter', 7 => 'FOS\\UserBundle\\Form\\Type', 8 => 'Sonata\\UserBundle\\Form\\Type', 9 => 'FOS\\OAuthServerBundle\\Form\\Type', 10 => 'Ivory\\CKEditorBundle\\Form\\Type'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 4 => 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType', 5 => 'Sonata\\CoreBundle\\Form\\Type\\BooleanType', 6 => 'Sonata\\CoreBundle\\Form\\Type\\CollectionType', 7 => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 8 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType', 9 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType', 10 => 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType', 11 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType', 12 => 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType', 13 => 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType', 14 => 'Sonata\\CoreBundle\\Form\\Type\\EqualType', 15 => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 16 => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 17 => 'Sonata\\Form\\Type\\ImmutableArrayType', 18 => 'Sonata\\Form\\Type\\BooleanType', 19 => 'Sonata\\Form\\Type\\CollectionType', 20 => 'Sonata\\Form\\Type\\DateRangeType', 21 => 'Sonata\\Form\\Type\\DateTimeRangeType', 22 => 'Sonata\\Form\\Type\\DatePickerType', 23 => 'Sonata\\Form\\Type\\DateTimePickerType', 24 => 'Sonata\\Form\\Type\\DateRangePickerType', 25 => 'Sonata\\Form\\Type\\DateTimeRangePickerType', 26 => 'Sonata\\Form\\Type\\EqualType', 27 => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 28 => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 29 => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 30 => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 31 => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 32 => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 33 => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 34 => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 35 => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 36 => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 37 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 38 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 39 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 40 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 41 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 42 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 43 => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 44 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 45 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 46 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 47 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 48 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 49 => 'FOS\\UserBundle\\Form\\Type\\GroupFormType', 50 => 'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType', 51 => 'Sonata\\UserBundle\\Form\\Type\\RolesMatrixType', 52 => 'Sonata\\UserBundle\\Form\\Type\\UserGenderListType', 53 => 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', 54 => 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\FormTypeFieldExtension', 9 => 'Sonata\\AdminBundle\\Form\\Extension\\Field\\Type\\MopaCompatibilityTypeFieldExtension', 10 => 'Sonata\\AdminBundle\\Form\\Extension\\ChoiceTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser']);

$instance->setName('debug:form');

return $instance;
