<?php

use Illuminate\Database\Migrations\Migration;

class CreateBusRoutesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::create('bus_routes',function($table){
			$table->integer('busid');
			$table->date('day');
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
		Schema::drop('bus_routes');
	}

}