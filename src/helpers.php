<?php

use Snowsoft\MultiTabFormBuilder\Fields\FormField;

if (!function_exists('form_widget_view')) {

    function form_widget_view(FormField $formField, array $options = [])
    {
        return $formField->view($options, false, true, false);
    }

}

if (!function_exists('form_view')) {

    function form_view(\Snowsoft\MultiTabFormBuilder\FormView $form, array $options = [])
    {
        return $form->renderFormView($options);
    }

}

if (!function_exists('form_rest_view')) {

    function form_rest_view(\Snowsoft\MultiTabFormBuilder\FormView $form)
    {
        return $form->renderRestView();
    }

}