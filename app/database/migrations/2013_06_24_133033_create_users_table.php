<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table)
		{
<<<<<<< HEAD
			$table->increments('user_id');
=======
			$table->increments('id');
>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76
			$table->string('Email');
			$table->string('First_Name');
			$table->string('Last_Name');
			$table->string('Phone_Number');
			$table->string('Password',64);
			$table->string('Mailing_Address');
			$table->string('Street_Address');
<<<<<<< HEAD
			$table->enum('Account_type',array('A','B','C'));
=======
>>>>>>> 68e73d9c135d506b4132806aa724a99149109e76
			$table->enum('isFB',array('0','1'))->default(0);
			$table->enum('Regconfirm',array('0','1'))->default(0);
			$table->timestamps();
		}
		);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}