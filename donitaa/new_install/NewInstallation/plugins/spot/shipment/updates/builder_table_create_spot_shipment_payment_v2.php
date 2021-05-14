<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentPaymentV2 extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('spot_shipment_payment_v2')) {
            Schema::create('spot_shipment_payment_v2', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id')->unsigned();
                $table->integer('for_id')->unsigned();
                $table->integer('from_id')->unsigned();
                $table->integer('payment_with')->nullable()->unsigned();
                $table->integer('item_id')->unsigned();
                $table->decimal('amount', 10, 2)->default(0);
                $table->string('payment_method', 50)->default('null');
                $table->integer('payment_status')->default(0);
                $table->text('description')->nullable();
                $table->date('date');
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->timestamp('deleted_at')->nullable();
            });
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_shipment_payment_v2');
    }
}
