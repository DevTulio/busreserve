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
<<<<<<< HEAD
		$table->increments('cancelid');
		$table->integer('busid');
		$table->datetime('time');
		$table->string('seatno');
		$table->integer('ticketno');
		$table->float('refamount');
		$table->enum('reason',array('CANCELLED BY USER','EXPIRED'));

		});

=======
		$table->integer('ticketno');
		$table->datetime('time');
		$table->integer('noofseats');
		$table->float('refamount');


		});
>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76
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