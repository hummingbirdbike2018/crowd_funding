<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlannersTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('planners', function (Blueprint $table) {
						$table->increments('id');
						$table->string('name');
						$table->string('planner_img');
						$table->string('name_kana');
						$table->string('email')->unique();
						$table->string('password');
						$table->string('tel');
						$table->string('post_code');
						$table->string('address');
						$table->string('building');
						$table->string('intro');
						$table->string('facebook')->nullable();
						$table->string('twitter')->nullable();
						$table->string('instagram')->nullable();
						$table->string('web_site')->nullable();
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
				Schema::dropIfExists('planners');
		}
}
