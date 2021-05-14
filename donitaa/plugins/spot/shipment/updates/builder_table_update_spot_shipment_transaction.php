<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSpotShipmentTransaction extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('spot_shipment_transaction', 'deleted_at')) {
            Schema::table('spot_shipment_transaction', function($table)
            {
                $table->dropColumn('deleted_at');
            });
        }
    }
    
    public function down()
    {
        Schema::table('spot_shipment_transaction', function($table)
        {
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
