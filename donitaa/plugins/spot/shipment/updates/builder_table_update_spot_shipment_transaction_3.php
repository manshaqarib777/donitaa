<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotShipmentTransaction3 extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('spot_shipment_payment_v2', 'description')) {
            Schema::table('spot_shipment_transaction', function($table)
            {
                $table->text('description')->nullable();
            });
        }
    }
    
    public function down()
    {
        Schema::table('spot_shipment_transaction', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
