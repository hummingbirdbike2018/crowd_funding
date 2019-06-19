<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
	protected $fillable = [
		 'reward_id', 'rw_title',
		 'rw_body', 'rw_image', 'rw_quantity','rw_price','rw_season',
	 ];
}
