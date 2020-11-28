<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.extension' shared service.

return $this->services['form.extension'] = new \Sonata\CoreBundle\Form\Extension\DependencyInjectionExtension($this, ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'Sonata\\CoreBundle\\Form\\Type\\ImmutableArrayType' => 'sonata.core.form.type.array_legacy', 'Sonata\\CoreBundle\\Form\\Type\\BooleanType' => 'sonata.core.form.type.boolean_legacy', 'Sonata\\CoreBundle\\Form\\Type\\CollectionType' => 'sonata.core.form.type.collection_legacy', 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType' => 'sonata.core.form.type.translatable_choice', 'Sonata\\CoreBundle\\Form\\Type\\DateRangeType' => 'sonata.core.form.type.date_range_legacy', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangeType' => 'sonata.core.form.type.datetime_range_legacy', 'Sonata\\CoreBundle\\Form\\Type\\DatePickerType' => 'sonata.core.form.type.date_picker_legacy', 'Sonata\\CoreBundle\\Form\\Type\\DateTimePickerType' => 'sonata.core.form.type.datetime_picker_legacy', 'Sonata\\CoreBundle\\Form\\Type\\DateRangePickerType' => 'sonata.core.form.type.date_range_picker_legacy', 'Sonata\\CoreBundle\\Form\\Type\\DateTimeRangePickerType' => 'sonata.core.form.type.datetime_range_picker_legacy', 'Sonata\\CoreBundle\\Form\\Type\\EqualType' => 'sonata.core.form.type.equal_legacy', 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType' => 'sonata.core.form.type.color_selector', 'Sonata\\CoreBundle\\Form\\Type\\ColorType' => 'sonata.core.form.type.color_legacy', 'Sonata\\Form\\Type\\ImmutableArrayType' => 'sonata.core.form.type.array', 'Sonata\\Form\\Type\\BooleanType' => 'sonata.core.form.type.boolean', 'Sonata\\Form\\Type\\CollectionType' => 'sonata.core.form.type.collection', 'Sonata\\Form\\Type\\DateRangeType' => 'sonata.core.form.type.date_range', 'Sonata\\Form\\Type\\DateTimeRangeType' => 'sonata.core.form.type.datetime_range', 'Sonata\\Form\\Type\\DatePickerType' => 'sonata.core.form.type.date_picker', 'Sonata\\Form\\Type\\DateTimePickerType' => 'sonata.core.form.type.datetime_picker', 'Sonata\\Form\\Type\\DateRangePickerType' => 'sonata.core.form.type.date_range_picker', 'Sonata\\Form\\Type\\DateTimeRangePickerType' => 'sonata.core.form.type.datetime_range_picker', 'Sonata\\Form\\Type\\EqualType' => 'sonata.core.form.type.equal', 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType' => 'sonata.block.form.type.block', 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType' => 'sonata.block.form.type.container_template', 'Sonata\\AdminBundle\\Form\\Type\\AdminType' => 'sonata.admin.form.type.admin', 'Sonata\\AdminBundle\\Form\\Type\\ModelType' => 'sonata.admin.form.type.model_choice', 'Sonata\\AdminBundle\\Form\\Type\\ModelListType' => 'sonata.admin.form.type.model_list', 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType' => 'sonata.admin.form.type.model_reference', 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType' => 'sonata.admin.form.type.model_hidden', 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType' => 'sonata.admin.form.type.model_autocomplete', 'Sonata\\AdminBundle\\Form\\Type\\CollectionType' => 'sonata.admin.form.type.collection', 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType' => 'sonata.admin.doctrine_orm.form.type.choice_field_mask', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType' => 'sonata.admin.form.filter.type.number', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType' => 'sonata.admin.form.filter.type.choice', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType' => 'sonata.admin.form.filter.type.default', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType' => 'sonata.admin.form.filter.type.date', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType' => 'sonata.admin.form.filter.type.daterange', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType' => 'sonata.admin.form.filter.type.datetime', 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType' => 'sonata.admin.form.filter.type.datetime_range', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'FOS\\UserBundle\\Form\\Type\\GroupFormType' => 'fos_user.group.form.type', 'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType' => 'sonata.user.form.type.security_roles', 'Sonata\\UserBundle\\Form\\Type\\RolesMatrixType' => 'sonata.user.form.roles_matrix_type', 'Sonata\\UserBundle\\Form\\Type\\UserGenderListType' => 'sonata.user.form.gender_list', 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType' => 'fos_oauth_server.authorize.form.type', 'Ivory\\CKEditorBundle\\Form\\Type\\CKEditorType' => 'ivory_ck_editor.form.type'], ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => [0 => 'form.type_extension.form.transformation_failure_handling', 1 => 'form.type_extension.form.http_foundation', 2 => 'form.type_extension.form.validator', 3 => 'form.type_extension.upload.validator', 4 => 'form.type_extension.csrf', 5 => 'sonata.admin.form.extension.field', 6 => 'sonata.admin.form.extension.field.mopa'], 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => [0 => 'form.type_extension.repeated.validator'], 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => [0 => 'form.type_extension.submit.validator'], 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => [0 => 'sonata.admin.form.extension.choice']], [0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'], ['form' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 'birthday' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType', 'checkbox' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType', 'choice' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 'collection' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType', 'country' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType', 'date' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType', 'datetime' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType', 'email' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType', 'file' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 'hidden' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType', 'integer' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType', 'language' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType', 'locale' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType', 'money' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType', 'number' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType', 'password' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType', 'percent' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType', 'radio' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType', 'repeated' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType', 'search' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType', 'textarea' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType', 'text' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType', 'time' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType', 'timezone' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType', 'url' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType', 'button' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType', 'submit' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType', 'reset' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType', 'currency' => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType', 'entity' => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 'sonata_type_immutable_array' => 'Sonata\\Form\\Type\\ImmutableArrayType', 'sonata_type_boolean' => 'Sonata\\Form\\Type\\BooleanType', 'sonata_type_collection' => 'Sonata\\Form\\Type\\CollectionType', 'sonata_type_translatable_choice' => 'Sonata\\CoreBundle\\Form\\Type\\TranslatableChoiceType', 'sonata_type_date_range' => 'Sonata\\Form\\Type\\DateRangeType', 'sonata_type_datetime_range' => 'Sonata\\Form\\Type\\DateTimeRangeType', 'sonata_type_date_picker' => 'Sonata\\Form\\Type\\DatePickerType', 'sonata_type_datetime_picker' => 'Sonata\\Form\\Type\\DateTimePickerType', 'sonata_type_date_range_picker' => 'Sonata\\Form\\Type\\DateRangePickerType', 'sonata_type_datetime_range_picker' => 'Sonata\\Form\\Type\\DateTimeRangePickerType', 'sonata_type_equal' => 'Sonata\\Form\\Type\\EqualType', 'sonata_type_color' => 'Sonata\\CoreBundle\\Form\\Type\\ColorType', 'sonata_type_color_selector' => 'Sonata\\CoreBundle\\Form\\Type\\ColorSelectorType', 'sonata_block_service_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ServiceListType', 'sonata_type_container_template_choice' => 'Sonata\\BlockBundle\\Form\\Type\\ContainerTemplateType', 'sonata_type_admin' => 'Sonata\\AdminBundle\\Form\\Type\\AdminType', 'sonata_type_model' => 'Sonata\\AdminBundle\\Form\\Type\\ModelType', 'sonata_type_model_list' => 'Sonata\\AdminBundle\\Form\\Type\\ModelListType', 'sonata_type_model_reference' => 'Sonata\\AdminBundle\\Form\\Type\\ModelReferenceType', 'sonata_type_model_hidden' => 'Sonata\\AdminBundle\\Form\\Type\\ModelHiddenType', 'sonata_type_model_autocomplete' => 'Sonata\\AdminBundle\\Form\\Type\\ModelAutocompleteType', 'sonata_type_native_collection' => 'Sonata\\AdminBundle\\Form\\Type\\CollectionType', 'sonata_type_choice_field_mask' => 'Sonata\\AdminBundle\\Form\\Type\\ChoiceFieldMaskType', 'sonata_type_filter_number' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\NumberType', 'sonata_type_filter_choice' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\ChoiceType', 'sonata_type_filter_default' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DefaultType', 'sonata_type_filter_date' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateType', 'sonata_type_filter_date_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateRangeType', 'sonata_type_filter_datetime' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeType', 'sonata_type_filter_datetime_range' => 'Sonata\\AdminBundle\\Form\\Type\\Filter\\DateTimeRangeType', 'tab' => 'Mopa\\Bundle\\BootstrapBundle\\Form\\Type\\TabType', 'fos_user_username' => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 'fos_user_profile' => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 'fos_user_registration' => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 'fos_user_change_password' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 'fos_user_resetting' => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 'fos_user_group' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType', 'sonata_security_roles' => 'Sonata\\UserBundle\\Form\\Type\\SecurityRolesType', 'sonata_user_profile' => 'Sonata\\UserBundle\\Form\\Type\\ProfileType', 'sonata_user_gender' => 'Sonata\\UserBundle\\Form\\Type\\UserGenderListType', 'sonata_user_registration' => 'Sonata\\UserBundle\\Form\\Type\\RegistrationFormType', 'sonata_user_api_form_group' => 'Sonata\\UserBundle\\Form\\Type\\ApiGroupType', 'sonata_user_api_form_user' => 'Sonata\\UserBundle\\Form\\Type\\ApiUserType'], ['form' => [0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'form.type_extension.form.data_collector', 4 => 'sonata.admin.form.extension.field', 5 => 'mopa_bootstrap.form.type_extension.help', 6 => 'mopa_bootstrap.form.type_extension.legend', 7 => 'mopa_bootstrap.form.type_extension.error', 8 => 'mopa_bootstrap.form.type_extension.widget', 9 => 'mopa_bootstrap.form.type_extension.horizontal', 10 => 'mopa_bootstrap.form.type_extension.widget_collection', 11 => 'mopa_bootstrap.form.type_extension.tabbed'], 'repeated' => [0 => 'form.type_extension.repeated.validator'], 'submit' => [0 => 'form.type_extension.submit.validator'], 'choice' => [0 => 'sonata.admin.form.extension.choice'], 'button' => [0 => 'mopa_bootstrap.form.type_extension.button'], 'date' => [0 => 'mopa_bootstrap.form.type_extension.date']], []);
