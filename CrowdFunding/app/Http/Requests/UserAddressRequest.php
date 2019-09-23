<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserAddressRequest extends FormRequest
{

	public function authorize()
	{
			return true;
	}


	public function rules()
	 {

			 return  [
					 'name' => 'required|string|between:1,30',
					 'name_kana' => 'required|string|between:1,40',
					 'tel' => 'required|string|between:10,13',
					 'post_code' => 'required|string|between:7,8',
					 'address' => 'required|string|between:5,30',
					 'building' => 'string|between:3,20',
					 ];
	 }

	 public function attributes()
	 {
			 return [
					 'name' => '氏名',
					 'name_kana' => 'ふりがな',
					 'tel' => '電話番号',
					 'post_code' => '郵便番号',
					 'address' => '住所',
					 'building' => '建物名'
			 ];
	 }

	 public function messages()
	 {

			 return [
					 //
			 ];
	 }
}
