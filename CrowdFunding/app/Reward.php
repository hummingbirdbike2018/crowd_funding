<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{

	protected $primaryKey = "reward_id";

	public function projects()
		{
				return $this->belongsTo('App\Project','pj_id');//projectテーブルとのリレーション
		}

	public function supports()
		{
				return $this->hasMany('App\Support','reward_id');//supportテーブルとのリレーション
		}

	protected $fillable = [
		 'reward_id', 'rw_title',
		 'rw_body', 'rw_image', 'rw_quantity','rw_price','rw_season',
	 ];
}
