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
			$table->increments('id');
			$table->string('pj_title');
			$table->unsignedInteger('planner_id');
			for($i = 1; $i <= 10; $i++) {
			$table->string('product_detail_heading_'.$i)->nullable();
			}
			for($i = 1; $i <= 10; $i++) {
			$table->text('product_detail_'.$i)->nullable();
			}
			for($i = 1; $i <= 10; $i++) {
			$table->string('product_img_'.$i)->nullable();
			}
			$table->integer('target_amount');
			$table->integer('period');
			$table->integer('status')->default(1);
			$table->string('dis_reason')->nullable();
			$table->timestamps();
			//外部キー
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
			Schema::dropIfExists('projects');
	}
}
