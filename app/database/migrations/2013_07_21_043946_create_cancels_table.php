<?php

use Illuminate\Database\Migrations\Migration;

class CreateCancelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cancels',function($table){
		$table->integer('ticketno');
		$table->datetime('time');
		$table->integer('noofseats');
		$table->float('refamount');


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
		Schema::drop('cancels');
	}

}