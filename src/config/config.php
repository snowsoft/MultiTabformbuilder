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
        'button'         => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\ButtonType',
        'radio'          => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\CheckableType',
        'checkbox'       => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\CheckableType',
        'text'           => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\InputType',
        'email'          => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\InputType',
        'upload'         => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\UploadType',
        'number'         => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\InputType',
        'select'         => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\SelectType',
        'textarea'       => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\TextareaType',
        'tinymce'        => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\Tinymce',
        'tag'            => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\Tag',
        'choice'         => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\ChoiceType',
        'form'           => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\ChildFormType',
        'choice_area'    => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\ChoiceArea',
        'address_picker' => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\AddressPicker',
        'choice_ajax'    => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\ChoiceAjax',
        'datepicker'     => 'Snowsoft\MultiTabMultiTabFormBuilder\Fields\DatePicker',
    ]
];
