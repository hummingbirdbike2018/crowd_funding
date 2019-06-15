<?php

namespace App;

use Http\Controllers\DraftController;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
	//参照先テーブル指定
	protected $table = "draft_product";

	protected $fillable = [
			'name', 'email', 'pj_title', 'target_amount',
			'overview', 'image_url', 'return', 'faq1', 'faq2',
	];
}
