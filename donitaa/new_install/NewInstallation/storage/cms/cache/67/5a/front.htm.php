<?php 
use \Spot\Shipment\Models\Settings;use RainLab\Translate\Classes\Translator;use RainLab\Translate\Components\LocalePicker;class Cms5ffbfd967fe42286481224_8887629f230eeafca7cdd0402b796b18Class extends Cms\Classes\LayoutCode
{



protected $translator;
public function onMyRegister()
{
    $data['role_id']         = 5;
    $this['account']->onRegister();
}
}
