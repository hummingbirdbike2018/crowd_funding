<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftProductTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('draft_product', function (Blueprint $table) {
					$table->increments('id')->unsigned;
					$table->string('name');
					$table->string('email');
					$table->string('pj_title');
					$table->integer('target_amount');
					$table->string('overview');
					$table->string('image_url');
					$table->string('return');
					$table->string('faq1');
					$table->string('faq2');
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
				Schema::dropIfExists('draft_product');
		}
}
