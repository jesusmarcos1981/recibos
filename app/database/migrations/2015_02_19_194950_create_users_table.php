<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('full_name');
			$table->string('username');
			$table->string('e-mail');
			$table->string('password');
			$table->enum('user_type', ['admin', 'user']);
			$table->boolean('user_cashier');
			$table->boolean('user_presentedby');
			$table->boolean('avalible');
			$table->string('remember_token')->nullable();
			$table->string('slug');
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
		Schema::drop('users');
	}

}
