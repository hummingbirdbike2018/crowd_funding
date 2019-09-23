<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Support extends Model
{

	public function rewards()
	{
		return $this->belongsTo('App\Reward','id');//rewardsテーブルとのリレーション
	}

	public function projects()
	{
		return $this->belongsTo('App\Project','id'); //projectsテーブルとのリレーション
	}


	protected $fillable = [
		 'reward_id', 'user_id', 'pj_id', 'comment', 'name', 'name_kana', 'address',
		 'building', 'tel', 'post_code', 'card_no'
	 ];

}
