<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardInfoTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
				Schema::create('card_info', function (Blueprint $table) {
					$table->increments('id');
					$table->integer('user_id')->unsigned();
					$table->bigInteger('card_no');
					$table->integer('exp_mon');
					$table->integer('exp_year');
					$table->string('first_name');
					$table->string('last_name');
					$table->integer('card_csv');
				});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
				Schema::dropIfExists('card_info');
		}
}
