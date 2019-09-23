<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserBasicRequest extends FormRequest
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
					'display' => 'max:10',
					// 'email' => 'email|unique:users,email|max:30',
					// 'password' => 'required_with:new_password|same:users,password|min:8',
					// 'new_password' => 'required_with:password|same:confirm_password|min:8',
					// 'confirm_password' => 'required_with:new_password|confirmed|min:8',
					'user_img' => 'image|max:2048',
				];
		}

		public function attributes()
		{
				return [
						'display' => '表示名',
						'email' => 'メールアドレス',
						'password' => '現在のパスワード',
						'new_password' => '新しいパスワード',
						'confirm_password' => '新しいパスワード確認用',
						'image' => '画像'
				];
		}

		public function messages()
		{

				return [
						'display.max' => ':attribute は 10文字以内で入力してください。',
						'email.email' => ':attribute がメールアドレスの形式ではありません。',
						'email.max' => ':attribute は 30文字以内で入力してください。',
						'password.same' => ':attribute が登録されているものと一致しません。',
						'password.required_with' => ':attribute を入力してください。',
						'password_confirmation.confirmed' => '新しいパスワード と :attribute が 一致しません。',
						'user_img.image' => '画像ファイルのみアップロードできます。',
						'user_img.max' => ':attribute のアップロード上限サイズは 2MBまでです。',
				];
		}

}
