<?php namespace Snowsoft\MultiTabFormBuilder\Fields;

class Tag extends FormFieldsView {

    protected function getTemplate()
    {
        return 'tag';
    }


    protected function getDefaults()
    {
        return [
            'default_value'          => ''
        ];
    }
}