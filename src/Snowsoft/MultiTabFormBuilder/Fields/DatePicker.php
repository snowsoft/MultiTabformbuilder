<?php namespace Snowsoft\MultiTabFormBuilder\Fields;

class DatePicker extends FormFieldsView {

    protected function getTemplate()
    {
        return 'datepicker';
    }


    protected function getDefaults()
    {
        return [
            'range'          => false,
            'format'         => 'mm/dd/yyyy',
            'autoclose'      => true,
            'todayHighlight' => true
        ];
    }
}