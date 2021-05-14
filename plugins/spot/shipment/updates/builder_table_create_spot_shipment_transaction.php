<?php namespace Spot\Shipment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSpotShipmentTransaction extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('spot_shipment_transaction')) {
            Schema::create('spot_shipment_transaction', function($table)
            {
                $table->engine = 'InnoDB';
                $table->increments('id')->unsigned();
                $table->integer('order_id')->nullable()->unsigned();
                $table->integer('user_id')->unsigned();
                $table->decimal('amount', 10, 2)->nullable()->default(0);
                $table->integer('status')->nullable()->default(0);
                $table->integer('done')->nullable()->default(0);
                $table->date('date')->nullable();
                $table->timestamp('created_at')->nullable();
                $table->timestamp('updated_at')->nullable();
                $table->timestamp('deleted_at')->nullable();
            });
        }
    }
    
    public function down()
    {
        Schema::dropIfExists('spot_shipment_transaction');
    }
}
