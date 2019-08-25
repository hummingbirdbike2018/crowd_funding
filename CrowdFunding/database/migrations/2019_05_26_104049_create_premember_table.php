<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrememberTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('premembers', function (Blueprint $table) {
			$table->increments('id');
			$table->string('email', 255);
			$table->string('password');
			$table->string('token', 250);
			$table->tinyInteger('status');
			$table->dateTime('expiration_datetime');
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
		Schema::dropIfExists('premembers');
	}
}
