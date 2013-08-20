<?php

use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tickets',function($table){
<<<<<<< HEAD
			$table->increments('ticketno');			
			$table->integer('route_id');
			$table->integer('busid');
			$table->date('date');
			$table->float('amount');
			$table->float('discount');			
=======
			$table->increments('ticketno');
			$table->integer('cusid');
			$table->integer('busid');
			$table->date('date');
			$table->float('amount');
			$table->string('status');
>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76
			$table->timestamps();


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
		Schema::drop('tickets');
	}

}