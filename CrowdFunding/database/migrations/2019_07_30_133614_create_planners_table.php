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
						$table->integer('status')->default(1);
						$table->string('dis_reason')->nullable();
						$table->rememberToken();
						$table->timestamps();

						// 外部キーを設定する
						// $table->foreign('id')->references('planner_id')->on('projects');
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
