<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

	public function projects()
	{
		return $this->belongsTo('App\Project', 'id');//projectテーブルとのリレーション
	}

	public function planners()
	{
		return $this->belongsTo('App\Planner', 'id');//plannersテーブルとのリレーション
	}

	protected $fillable = [
		 'id', 'pj_id', 'planner_id', 'report_title',
		 'report_text_1', 'report_text_2', 'report_text_3', 'report_text_4',
		 'report_img_1', 'report_img_2', 'report_img_3', 'report_img_4',
	 ];
}
