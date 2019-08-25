<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('reports', function (Blueprint $table) {
					$table->increments('id');
					$table->unsignedInteger('pj_id');
					$table->unsignedInteger('planner_id');
					$table->string('report_title');
					$table->text('report_text_1');
					$table->text('report_text_2')->nullable();
					$table->text('report_text_3')->nullable();
					$table->text('report_text_4')->nullable();
					$table->string('report_img_1');
					$table->string('report_img_2')->nullable();
					$table->string('report_img_3')->nullable();
					$table->string('report_img_4')->nullable();
					$table->timestamps();

					//外部キーを設定する
					$table->foreign('pj_id')->references('id')->on('projects');
					$table->foreign('planner_id')->references('id')->on('planners');
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
				Schema::dropIfExists('reports');
		}
}
