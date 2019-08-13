<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

	public function rewards() {
		return $this->hasMany('App\Reward','pj_id');//Rewardテーブルとのリレーション
	}

	public function supports(){
		return $this->hasMany('App\Support','pj_id');//supportテーブルとのリレーション
	}

	public function planners(){
		return $this->belongsTo('App\Planner','id');//plannersテーブルとのリレーション
	}

	protected $fillable = [
		'id', 'pj_title', 'target_amount', 'planner_id','product_img_1', 'product_img_2', 'product_img_3',
		'product_detail_1', 'product_detail_2', 'product_detail_3', 'target_amount', 'period',
	];
}
