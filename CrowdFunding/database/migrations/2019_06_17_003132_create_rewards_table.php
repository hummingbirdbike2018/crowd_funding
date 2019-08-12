<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRewardsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rewards', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('pj_id');
			$table->string('rw_title');
			$table->string('rw_body');
			$table->string('rw_image');
			$table->integer('rw_quantity');
			$table->integer('rw_price');
			$table->string('rw_season');
			$table->integer('status')->default(1);
			$table->string('dis_reason')->nullable();
			$table->timestamps();

			//外部キー
			$table->foreign('pj_id')->references('id')->on('projects');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			Schema::dropIfExists('rewards');
	}
}
