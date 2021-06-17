<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateShipmentsTableAddNewColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shipments', function (Blueprint $table) {
            $table->renameColumn('reciver_street_address_map', 'receiver_street_address_map');
            $table->renameColumn('reciver_lat', 'receiver_lat');
            $table->renameColumn('reciver_lng', 'receiver_lng');
            $table->renameColumn('reciver_url', 'receiver_url');
            $table->renameColumn('reciver_phone', 'receiver_phone');
            $table->renameColumn('reciver_name', 'receiver_name');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shipments', function (Blueprint $table) {
            $table->renameColumn('receiver_street_address_map','reciver_street_address_map');
            $table->renameColumn('receiver_lat','reciver_lat');
            $table->renameColumn('receiver_lng','reciver_lng');
            $table->renameColumn('receiver_url','reciver_url');
            $table->renameColumn('receiver_phone','reciver_phone');
            $table->renameColumn('receiver_name','reciver_name');

        });
    }
}
