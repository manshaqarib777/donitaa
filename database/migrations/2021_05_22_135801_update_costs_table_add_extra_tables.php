<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCostsTableAddExtraTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('costs', function (Blueprint $table) {
            $table->integer('extra_shipping_cost')->default(0);
            $table->integer('extra_tax')->default(0);
            $table->integer('extra_insurance')->default(0);
            $table->integer('extra_return_cost')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('costs', function (Blueprint $table) {
            $table->dropColumn('extra_return_cost');
            $table->dropColumn('extra_shipping_cost');
            $table->dropColumn('extra_tax');
            $table->dropColumn('extra_insurance');
        });
    }
}
