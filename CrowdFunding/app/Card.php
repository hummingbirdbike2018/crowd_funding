<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $table = "card_info";

	protected $fillable = [
			'card_no', 'user_id', 'card_csv', 'exp_mon',
			'exp_year', 'first_name', 'last_name',
	];
}
