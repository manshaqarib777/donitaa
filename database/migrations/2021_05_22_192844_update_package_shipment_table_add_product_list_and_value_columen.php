<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePackageShipmentTableAddProductListAndValueColumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_shipment', function (Blueprint $table) {
            $table->integer('shipment_price')->default(0);
            $table->integer('shipment_insurance')->default(0);
            $table->json('package_list')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('package_shipment', function (Blueprint $table) {
            $table->dropColumn('shipment_price');
            $table->dropColumn('shipment_insurance');
            $table->dropColumn('package_list');
        });
    }
}
