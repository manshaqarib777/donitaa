<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiverAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receiver_addresses', function (Blueprint $table) {

		$table->increments('id')->unsigned();
		$table->string('name');
		$table->string('phone');
		$table->string('type');
		$table->integer('receiver_id')->unsigned();
		$table->string('address')->nullable();
		$table->integer('area_id')->unsigned()->nullable();
		$table->integer('state_id')->unsigned()->nullable();
		$table->integer('country_id')->unsigned()->nullable();
		$table->tinyInteger('is_archived')->default(0);
		$table->string('created_by_type')->nullable();
		$table->unsignedBigInteger('created_by')->default(0);
		$table->unsignedBigInteger('updated_by')->default(0);
		$table->timestamp('created_at');
		$table->timestamp('updated_at');
		

        });
    }

    public function down()
    {
        Schema::dropIfExists('receiver_addresses');
    }
}
