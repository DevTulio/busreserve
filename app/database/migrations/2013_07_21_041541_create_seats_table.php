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
<<<<<<< HEAD
			$table->increments('seatid');
			$table->string('seatno');
			$table->integer('ticketno');			
			$table->integer('busid');
=======
			$table->integer('ticketno');
			$table->string('gender');
			$table->string('seatno');
			$table->integer('busno');


>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76
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