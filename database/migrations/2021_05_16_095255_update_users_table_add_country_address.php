<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTableAddCountryAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table)
		{
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('area_id')->nullable();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
		{
            $table->dropColumn('country_id');
            $table->dropColumn('state_id');
            $table->dropColumn('area_id');
		});
    }
}
