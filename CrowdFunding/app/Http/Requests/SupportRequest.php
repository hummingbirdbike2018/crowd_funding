<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupportRequest extends FormRequest
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
		 * Get the validation rules that apply to the request.
		 *
		 * @return array
		 */
		public function rules()
		{

				return [
					'comment' => 'max:30',
					'name' => 'required|string|max:10',
					'name_kana' => 'required|string|max:30',
					'post_code' => 'required|string|max:8',
					'address' => 'required|string|max:30',
					'building' => 'max:20',
					'tel' => 'required|string|max:13',
					'card_no' => 'required|digits:16',
					'exp_mon' => 'required',
					'exp_year' => 'required',
					'card_csv' => 'required|digits:3',
					'first_name' => 'required|alpha|max:20',
					'last_name' => 'required|alpha|max:20',
					'terms_check' => 'required',
				];
		}

		public function attributes()
		{
				return [
					'comment' => 'コメント',
					'name' => '名前',
					'name_kana' => 'ふりがな',
					'post_code' => '郵便番号',
					'address' => '住所',
					'building' => '建物名',
					'tel' => '電話番号',
					'card_no' => 'カード番号',
					'exp_mon' => '有効期限/月',
					'exp_year' => '有効期限/年',
					'card_csv' => 'セキュリティ番号',
					'first_name' => 'カード名義(名)',
					'last_name' => 'カード名義(氏)',
					'terms_check' => '利用規約',
				];
		}

		public function messages()
		{
				return [
					'comment.max' => ':attribute は :max  文字以内で入力してください。',
					'name.required' => ':attribute を入力してください。',
					'name_kana.required' => ':attribute を入力してください。',
					'post_code.required' => ':attribute を入力してください。',
					'address.required' => ':attribute を入力してください。',
					'building.max' => ':attribute は :max 文字以内 で入力してください。',
					'tel.required' => ':attribute を入力してください。。',
					'card_no.required' => ':attribute を入力してください。',
					'exp_mon.required' => ':attribute を選択してください。',
					'exp_year.required' => ':attribute を選択してください',
					'card_csv.required' => ':attribute を入力してください。',
					'first_name.required' => ':attribute を入力してください。',
					'last_name.required' => ':attribute を入力してください。',
					'terms_check.required' => ':attribute に同意してください。',
				];
		}
}
