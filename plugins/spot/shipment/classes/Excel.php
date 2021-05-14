<?php namespace Spot\Shipment\Classes;

class Excel {

    protected static $instance;

    protected $excel;

    private function __construct()
    {
        \App::register('\Maatwebsite\Excel\ExcelServiceProvider');
        //\App::register('\Laravel-Excel\ExcelServiceProvider');

        $facade = \Illuminate\Foundation\AliasLoader::getInstance();
        $facade->alias('Excel', '\Maatwebsite\Excel\Facades\Excel');
        //$facade->alias('Excel', '\Laravel-Excel\Facades\Excel');

        $this->excel = \App::make('excel');
    }

    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            return static::$instance = new static();
        }

        return static::$instance;
    }
    
    public static function excel()
    {
        return self::getInstance()->excel;
    }
}