<?php namespace Snowsoft\MultiTabFormBuilder\Fields;

class UploadType extends FormFieldsView {

    protected function getTemplate()
    {
        return 'upload';
    }


    protected function getDefaults()
    {
        return [
            'extensions' => '',
            'view'       => '',
        ];
    }
}