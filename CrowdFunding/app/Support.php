<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{

	public function rewards()
	{
		return $this->belongsTo('App\Reward','id');//rewardsテーブルとのリレーション
	}

	public function projects()
	{
		return $this->belongsTo('App\Project','pj_id'); //projectsテーブルとのリレーション
	}


	protected $fillable = [
		 'reward_id', 'user_id',
	 ];
}
