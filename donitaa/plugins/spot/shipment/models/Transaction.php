<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Transaction extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


     /**
     * @var array Relations
     */
    public $belongsTo = [
        'order' => [
            '\Spot\Shipment\Models\Order',
            'key'   =>  'order_id',
            'delete'    =>   true,
        ],
        'user' => [
            '\RainLab\User\Models\User',
            'key'   =>  'user_id',
            //'conditions' => 'type = 1'
        ]
    ];

    public $hasMany = [
       'payments' => [
           '\Spot\Shipment\Models\Payment_v2',
           'delete' => true
       ]
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_transaction';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
