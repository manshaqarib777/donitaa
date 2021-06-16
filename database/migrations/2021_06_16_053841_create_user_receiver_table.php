<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReceiverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_receiver', function (Blueprint $table) {

		$table->increments('id')->unsigned();
		$table->integer('user_id')->unsigned();
		$table->integer('receiver_id')->unsigned();
		

        });
    }

    public function down()
    {
        Schema::dropIfExists('user_receiver');
    }
}
