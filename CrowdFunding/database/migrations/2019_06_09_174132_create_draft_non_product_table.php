<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDraftNonProductTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('draft_non_product', function (Blueprint $table) {
				 $table->increments('id')->unsigned;
				 $table->string('name');
				 $table->string('email');
				 $table->string('pj_title');
				 $table->string('tel');
				 $table->string('profile');
				 $table->string('job');
				 $table->string('twitter');
				 $table->string('facebook');
				 $table->string('instagram');
				 $table->string('web_page');
				 $table->string('overview');
				 $table->string('howto');
				 $table->string('image_url');
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
				Schema::dropIfExists('draft_non_product');
		}
}
