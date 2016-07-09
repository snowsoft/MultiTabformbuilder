<?php

class StaticLabelTest extends FormTestCase {

    public function testYesNoArray()
    {
        $result = \Snowsoft\MultiTabFormBuilder\Helpers\StaticLabel::yesNo();

        $this->assertTrue(is_array($result));
        $this->assertArrayHasKey(\Snowsoft\MultiTabFormBuilder\Helpers\StaticLabel::STATUS_OFFLINE, $result);
        $this->assertArrayHasKey(\Snowsoft\MultiTabFormBuilder\Helpers\StaticLabel::STATUS_ONLINE, $result);
    }

    public function testYes()
    {
        $result = \Snowsoft\MultiTabFormBuilder\Helpers\StaticLabel::yesNo(\Snowsoft\MultiTabFormBuilder\Helpers\StaticLabel::STATUS_ONLINE);

        $this->assertTrue(is_string($result));
        $this->assertEquals($this->app['translator']->trans('form-builder::form.yes'), $result);
    }

    public function testNa()
    {
        $result = \Snowsoft\MultiTabFormBuilder\Helpers\StaticLabel::yesNo(- 1);

        $this->assertTrue(is_string($result));
        $this->assertEquals($this->app['translator']->trans('form-builder::form.na'), $result);
    }
}