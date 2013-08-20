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
<<<<<<< HEAD
		   Schema::create('buses',function($table){
			$table->increments('busid');		
			$table->string('bustype');
			$table->integer('capacity');
			$table->integer('availableseats');		
			$table->enum('status',array('ONROAD','WAITING'));//onroad or waiting
			$table->string('busplate_no');
			$table->timestamps();
=======
		Schema::create('buses',function($table){
			$table->string('bustype');
			$table->integer('capacity');
			$table->integer('availableseats');		
			$table->integer('busid');
			$table->string('status');



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
		Schema::drop('buses');
	}

}