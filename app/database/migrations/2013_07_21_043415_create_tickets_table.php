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
			$table->increments('ticketno');
			$table->integer('cusid');
			$table->integer('busid');
			$table->date('date');
			$table->float('amount');
			$table->string('status');
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