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
						$table->integer('disable');
						$table->integer('dis_reason');
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
