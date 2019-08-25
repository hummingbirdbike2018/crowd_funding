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

	public function reports(){
		return $this->hasMany('App\Report','pj_id');//reportsテーブルとのリレーション
	}

	public function planners(){
		return $this->belongsTo('App\Planner','id');//plannersテーブルとのリレーション
	}

	protected $fillable = [
		'id', 'pj_title', 'target_amount', 'planner_id',
		'target_amount', 'period',
		'product_detail_heading_1','product_detail_heading_2','product_detail_heading_3',
		'product_detail_heading_4','product_detail_heading_5','product_detail_heading_6',
		'product_detail_heading_7','product_detail_heading_8','product_detail_heading_9',
		'product_detail_heading_10',
		'product_detail_1','product_detail_heading_2','product_detail_heading_3',
		'product_detail_4','product_detail_heading_5','product_detail_heading_6',
		'product_detail_7','product_detail_heading_8','product_detail_heading_9',
		'product_detail_10',
		'product_img_1','product_img_2','product_img_3',
		'product_img_4','product_img_5','product_img_6',
		'product_img_7','product_img_8','product_img_9',
		'product_img_10',
	];
}
