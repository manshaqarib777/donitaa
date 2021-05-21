<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCurrencyTableAddDecimalFormatAndRightColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->integer('symbol_format')->default(1);
            $table->integer('decimal_separator')->default(1);
            $table->integer('no_of_decimals')->default(1);
            $table->integer('symbol_space')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currencies', function (Blueprint $table) {
            $table->dropColumn('symbol_format');
            $table->dropColumn('decimal_separator');
            $table->dropColumn('no_of_decimals');
            $table->dropColumn('symbol_space');
        });
    }
}
