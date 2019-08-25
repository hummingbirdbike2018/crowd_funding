<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planner extends Model
{

	public function projects(){
		return $this->hasMany('App\Project','planner_id');//projectsテーブルとのリレーション
	}

	public function reports(){
		return $this->hasMany('App\Report','planner_id');//reportsテーブルとのリレーション
	}

	protected $fillable = [
		'id', 'name', 'name_kana', 'tel', 'post_code', 'address', 'building',
		'email', 'status', 'intro', 'icon_img', 'dis_reason', 'remember_token',
		'facebook', 'web_site',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'reuser_token',
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
}
