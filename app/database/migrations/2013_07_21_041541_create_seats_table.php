<?php

use Illuminate\Database\Migrations\Migration;

class CreateSeatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('seats',function($table){
			$table->integer('ticketno');
			$table->string('gender');
			$table->string('seatno');
			$table->integer('busno');


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

	Schema::drop('seats');
	}

}