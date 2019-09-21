<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

	public function rewards()
	{
		return $this->hasMany('App\User','id');//Usersテーブルとのリレーション
	}

	protected $table = "card_info";

	protected $fillable = [
			'card_no', 'user_id', 'card_csv', 'exp_mon',
			'exp_year', 'card_holder_name', 
	];
}
