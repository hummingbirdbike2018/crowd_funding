<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

	public function rewards() {
		return $this->hasMany('App\Reward','reward_id');//Rewardテーブルとのリレーション
	}

	public function supports(){
				return $this->hasMany('App\Support','reward_id');//supportテーブルとのリレーション
		}

	protected $fillable = [
			'pj_title', 'target_amount',
			'product_detail_1', 'product_detail_2', 'product_detail_3',
	];
}
