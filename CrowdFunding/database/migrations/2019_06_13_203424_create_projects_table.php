<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('projects', function (Blueprint $table) {
					$table->increments('pj_id')->unsigned;
					$table->string('pj_title');
					$table->string('planner_id');
					$table->string('product_detail_1');
					$table->string('product_detail_2');
					$table->string('product_detail_3');
					$table->string('product_img_1');
					$table->string('product_img_2');
					$table->string('product_img_3');
					$table->integer('target_amount');
					$table->integer('reward_id');
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
				Schema::dropIfExists('projects');
		}
}
