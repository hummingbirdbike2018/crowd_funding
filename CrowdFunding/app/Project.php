<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	protected $fillable = [
			'pj_title', 'target_amount',
			'product_detail_1', 'product_detail_2', 'product_detail_3',
	];
}
