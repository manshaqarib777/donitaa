<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotShipmentPaymentV2 extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('spot_shipment_payment_v2', 'transaction_id')) {
            Schema::table('spot_shipment_payment_v2', function($table)
            {
                $table->integer('transaction_id')->nullable();
            });
        }
    }
    
    public function down()
    {
        Schema::table('spot_shipment_payment_v2', function($table)
        {
            $table->dropColumn('transaction_id');
        });
    }
}
