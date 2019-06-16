<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
<<<<<<< HEAD
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id')->unsigned;
			$table->integer('user_id');
			$table->string('display')->nullable();
			$table->string('name')->nullable();
			$table->string('name_kana')->nullable();
			$table->integer('tel')->nullable();
			$table->integer('post_code')->nullable();
			$table->string('address')->nullable();
			$table->string('building')->nullable();
			$table->string('email')->unique();
			$table->string('password');
			$table->integer('disable')->nullable();
			$table->integer('dis_reason')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}
=======
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('users', function (Blueprint $table) {
						$table->increments('id')->unsigned;
						$table->integer('user_id');
						$table->string('display');
						$table->string('name');
						$table->string('furigana');
						$table->integer('tel');
						$table->integer('post_code');
						$table->string('address');
						$table->string('building');
						$table->string('email')->unique();
						$table->string('password');
						$table->string('user_image');
						$table->integer('disable');
						$table->integer('dis_reason');
						$table->rememberToken();
						$table->timestamps();
				});
		}
>>>>>>> create

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
