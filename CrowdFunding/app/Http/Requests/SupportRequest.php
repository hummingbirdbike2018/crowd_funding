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
					'comment' => 'max:50',
					'name' => 'required|string|max:30',
					'name_kana' => 'required|string|max:30',
					'post_code' => 'required|string|max:8',
					'address' => 'required|string|max:30',
					'building' => 'string|max:30',
					'tel' => 'required|string|max:13',
					'card_csv' => 'required_if:paymentSelectRadio, option2|digits:3',
					'card_holder_name' => 'required_if:paymentSelectRadio, option2|string|max:30',
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
					'card_csv' => 'セキュリティ番号',
					'card_holder_name' => 'カード名義',
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
					'card_csv.digits' => ':attribute下 :digits ケタを入力してください。',
					'card_holder_name.required' => ':attribute を入力してください。',
					'card_holder_name.alpha' => ':attribute は半角英字で入力してください。',
					'terms_check.required' => ':attribute に同意してください。',
				];
		}
}
