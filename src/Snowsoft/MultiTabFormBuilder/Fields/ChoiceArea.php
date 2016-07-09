<?php namespace Snowsoft\MultiTabFormBuilder\Fields;

class ChoiceArea extends FormFieldsView {

    protected function getTemplate()
    {
        return 'choice_area';
    }


    protected function getDefaults()
    {
        return [
            'choices'  => [],
            'selected' => []

        ];
    }
}