<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Payment_v2 extends Model
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
            'key'   =>  'item_id',
            'delete'    =>   true,
        ],
        'transaction' => [
            '\Spot\Shipment\Models\Transaction',
            'key'   =>  'transaction_id',
            'delete'    =>   true,
        ],
        'user_from' => [
            '\RainLab\User\Models\User',
            'key'   =>  'from_id',
            //'conditions' => 'type = 1'
        ],
        'user_for' => [
            '\RainLab\User\Models\User',
            'key'   =>  'for_id',
            //'conditions' => 'type = 1'
        ],
        'user_by' => [
            '\RainLab\User\Models\User',
            'key'   =>  'payment_with',
            //'conditions' => 'type = 1'
        ],
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_payment_v2';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
