<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class DraftRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * バリデーションルール
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|max:20',
			'email' => 'required|email',
			'pj_title' => 'required|max:50',
			'target_amount' => 'required|max:7',
			'overview' => 'required|max:400',
			'image_url' => '|max:100',
			'return' => 'max:200',
			'faq1' => 'max:200',
			'faq2' => 'max:200',
		];
	}

	/**
	 * [attributes description]
	 * @return [type] [description]
	 */
	public function attributes()
	{
		return [
			'name' => '氏名',
			'email' => 'メールアドレス',
			'pj_title' => 'プロジェクト名',
			'target_amount' => '目標額',
			'overview' => 'プロジェクト概要',
			'image_url' => 'イメージ画像',
			'return' => 'リターン',
			'faq1' => '質問1',
			'faq2' => '質問2',
		];
	}
}
