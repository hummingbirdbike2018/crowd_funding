<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Http\Controllers\ProjectController;

class Project extends Model
{
	protected $fillable = [
			'pj_id', 'pj_title', 'target_amount', 'reward_id',
			'plannner_id', 'product_detail_1', 'product_detail_2', 'product_detail_3',
	];
}
