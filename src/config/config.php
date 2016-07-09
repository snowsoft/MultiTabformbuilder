<?php

return [
    'defaults'       => [
        'wrapper_class'       => 'form-group',
        'wrapper_error_class' => 'has-error',
        'label_class'         => 'control-label',
        'field_class'         => 'form-control',
        'error_class'         => 'help-block text-danger'
    ],
    'moxy_manager_path'=>'/assets/moxiemanager/plugin.min.js',
    // Templates
    'form'           => 'multi-tab-form-builder::form.partial.form',
    'text'           => 'multi-tab-form-builder::form.partial.text',
    'textarea'       => 'multi-tab-form-builder::form.partial.textarea',
    'button'         => 'multi-tab-form-builder::form.partial.button',
    'radio'          => 'multi-tab-form-builder::form.partial.radio',
    'checkbox'       => 'multi-tab-form-builder::form.partial.checkbox',
    'select'         => 'multi-tab-form-builder::form.partial.select',
    'choice'         => 'multi-tab-form-builder::form.partial.choice',
    'repeated'       => 'multi-tab-form-builder::form.partial.repeated',
    'child_form'     => 'multi-tab-form-builder::form.partial.child_form',
    'tinymce'        => 'multi-tab-form-builder::form.partial.tinymce',
    'tag'            => 'multi-tab-form-builder::form.partial.tag',
    'choice_area'    => 'multi-tab-form-builder::form.partial.choice_area',
    'address_picker' => 'multi-tab-form-builder::form.partial.address_picker',
    'choice_ajax'    => 'multi-tab-form-builder::form.partial.choice_ajax',
    'datepicker'     => 'multi-tab-form-builder::form.partial.datepicker',
    'upload'         => 'multi-tab-form-builder::form.partial.upload',

    'custom_fields'  => [
        'button'         => 'Snowsoft\MultiTabFormBuilder\Fields\ButtonType',
        'radio'          => 'Snowsoft\MultiTabFormBuilder\Fields\CheckableType',
        'checkbox'       => 'Snowsoft\MultiTabFormBuilder\Fields\CheckableType',
        'text'           => 'Snowsoft\MultiTabFormBuilder\Fields\InputType',
        'email'          => 'Snowsoft\MultiTabFormBuilder\Fields\InputType',
        'upload'         => 'Snowsoft\MultiTabFormBuilder\Fields\UploadType',
        'number'         => 'Snowsoft\MultiTabFormBuilder\Fields\InputType',
        'select'         => 'Snowsoft\MultiTabFormBuilder\Fields\SelectType',
        'textarea'       => 'Snowsoft\MultiTabFormBuilder\Fields\TextareaType',
        'tinymce'        => 'Snowsoft\MultiTabFormBuilder\Fields\Tinymce',
        'tag'            => 'Snowsoft\MultiTabFormBuilder\Fields\Tag',
        'choice'         => 'Snowsoft\MultiTabFormBuilder\Fields\ChoiceType',
        'form'           => 'Snowsoft\MultiTabFormBuilder\Fields\ChildFormType',
        'choice_area'    => 'Snowsoft\MultiTabFormBuilder\Fields\ChoiceArea',
        'address_picker' => 'Snowsoft\MultiTabFormBuilder\Fields\AddressPicker',
        'choice_ajax'    => 'Snowsoft\MultiTabFormBuilder\Fields\ChoiceAjax',
        'datepicker'     => 'Snowsoft\MultiTabFormBuilder\Fields\DatePicker',
    ]
];
