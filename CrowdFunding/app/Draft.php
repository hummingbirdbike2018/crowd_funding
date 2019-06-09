<?php

namespace App;

use Http\Controllers\DraftController;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
	protected $fillable = [
			'name', 'email', 'pj_title', 'target_amount',
			'overview', 'image_url', 'return', 'faq1', 'faq2',
	];
}
