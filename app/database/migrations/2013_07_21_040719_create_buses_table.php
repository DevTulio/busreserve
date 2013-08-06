<?php

use Illuminate\Database\Migrations\Migration;

class CreateBusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('buses',function($table){
			$table->string('bustype');
			$table->integer('capacity');
			$table->integer('availableseats');		
			$table->integer('busid');
			$table->string('status');



		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('buses');
	}

}