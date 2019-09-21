<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('supports', function (Blueprint $table) {
				$table->increments('id');
				$table->unsignedInteger('user_id');
				$table->unsignedInteger('reward_id');
				$table->unsignedInteger('pj_id');
				$table->string('comment')->nullable();
				$table->string('name');
				$table->string('name_kana');
				$table->string('post_code');
				$table->string('address');
				$table->string('building')->nullable();
				$table->string('tel');
				$table->string('card_no');
				$table->timestamps();

				// 外部キーを設定する
				$table->foreign('user_id')->references('id')->on('users');
				// 外部キーを設定する
				$table->foreign('reward_id')->references('id')->on('rewards');
				// 外部キーを設定する
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
				Schema::dropIfExists('supports');
		}
}
