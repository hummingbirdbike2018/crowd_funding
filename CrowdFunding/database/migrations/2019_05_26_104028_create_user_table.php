<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('display')->nullable();
			$table->string('user_img')->nullable();
			$table->string('name')->nullable();
			$table->string('name_kana')->nullable();
			$table->string('tel')->nullable();
			$table->string('post_code')->nullable();
			$table->string('address')->nullable();
			$table->string('building')->nullable();
			$table->string('email')->unique();
			$table->string('password');
			$table->integer('status')->default(1);
			$table->string('dis_reason')->nullable();
			$table->rememberToken();
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
		Schema::dropIfExists('users');
	}
}
