<?php



namespace Snowsoft\MultiTabFormBuilder;


use Snowsoft\MultiTabFormBuilder\FormValidator;

class MultiForm extends  FormValidator
{

    public function  column($forms)
    {


        return $forms;
  }


    public function tabs($forms)
    {


        return $tabs;
    }
}