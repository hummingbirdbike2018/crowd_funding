@extends('layouts.layout')

@section('content')
<!-- パンくずリスト -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ url('/') }}">TOP</a></li>
		<li class="breadcrumb-item active" aria-current="page">掲載に関するご相談</li>
	</ol>
</nav>

<div class="container ">
	<ul class="nav nav-pills my-3 active" id="pills-tab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active show" id="pills-products-tab" data-toggle="pill" href="#pills-products" role="tab" aria-controls="pills-products" aria-selected="true">起案に関するお問い合わせ(プロダクト系)</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="pills-not-products-tab" data-toggle="pill" href="#pills-not-products" role="tab" aria-controls="pills-not-products" aria-selected="false">起案に関するお問い合わせ(プロダクト以外)</a>
		</li>
	</ul>
	<div class="tab-content" id="pills-tabContent">

		<div class="tab-pane fade show active" id="pills-products" role="tabpanel" aria-labelledby="pills-products-tab">
			<!-- プロダクト起案フォーム -->
			<div class= "container">
				<div class="border bg-light rounded p-4 shadow p-3 mb-5 w-90 p-3 ">
				<form action="{{ 'draft/store' }}" method="POST">
					@csrf
						<div class="contact_form row">
							<div class= "contact_form is_products w-75 ">
								<div class="form-group form-content">
									<label for="name" class="font-weight-bold">{{ __('氏名') }}</label>
									<span class="required-item text-danger">*</span>
									<input id="name" class="form-control  mb-4" placeholder="例：山田　太郎" value="{{ old('name') }}">
									<label for="email" class="font-weight-bold">{{ __('メールアドレス') }}</label>
									<span class="required-item text-danger">*</span>
									<input id="email" class="form-control  mb-4" placeholder="例：example@crowdfunding.com" value="{{ old('email') }}">
									<label for="pj_title" class="font-weight-bold">{{ __('プロジェクト名') }}</label>
									<span class="required-item text-danger">*</span>
									<p>
									<small>仮のタイトルで結構です。</small>
									<input id="pj_title" class="form-control  mb-3" placeholder="" value="{{ old('pj_title') }}">
									<label for="target_amount" class="font-weight-bold">{{ __('目標額 (円)') }}</label>
									<span class="required-item text-danger">*</span>
									<p>
									<small>総額でどの程度の金額を集めたいか入力してください。</small>
									<input id="target_amount" class="form-control  mb-5" placeholder="例：500000" value="{{ old('target_amount') }}">
									<label for="overview" class="font-weight-bold">{{ __('プロジェクト概要') }}</label>
									<span class="required-item text-danger">*</span>
									<textarea class="form-control  mt-2 mb-5" id="overview" rows="5" placeholder="" value="{{ old('overview') }}"></textarea>
									<label for="pj_image" class="font-weight-bold">{{ __('企画のイメージ画像') }}</label>
									<p>
									<small>行いたい企画内容が伝わる画像や写真があれば、添付してください（JPG、GIFもしくはPNG形式）。</small>
									<input type="file" class="form-control-file" id="pj_image">
									<label for="retrun" class="font-weight-bold mt-5">{{ __('リターン') }}</label>
									<p>
									<small>支援者へお返しの想定。空欄の場合は追ってご相談させていただきます。</small>
									<textarea class="form-control  mb-4" id="return" rows="3" placeholder="" value="{{ old('return') }}"></textarea>
									<label for="faq1" class="font-weight-bold">{{ __('過去にクラウドファンディングの経験はありますか？') }}</label>
									<textarea class="form-control  mb-4" id="faq1" rows="3" placeholder="他社クラウドファンディングサイトで実施経験がある場合はURLをご記入ください" value="{{ old('faq1') }}"></textarea>
									<label for="faq2" class="font-weight-bold">{{ __('どこでCrowdFundingをお知りになりましたか？') }}</label>
									<textarea class="form-control  mb-2" id="faq2" rows="3" placeholder="クラウドファンディング経験のある方からの紹介の場合もお書きください(審査が通りやすくなります)" value="{{ old('faq2') }}"></textarea>
									<small class="required-item text-danger">*は必須入力です。</small>
								</div>
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="terms_chk" required>
										<label class="form-check-label" for="terms-check">
											<a href="{{ 'terms' }}">利用規約</a>に同意する
										</label>
									</div>
									<button type="submit" class="btn btn-primary  mt-3 px-5 float-right">確認画面へ</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="tab-pane fade" id="pills-not-products" role="tabpanel" aria-labelledby="pills-not-products-tab">
			<!-- プロダクト以外 -->
			<div class= "container">
				<div class="border bg-light rounded p-4 shadow p-3 mb-5 w-90 p-3 ">
				<form action="{{ 'store' }}" method="POST">
					@csrf
					<form>
						<div class="contact_form row">
							<div class= "contact_form is_no_products w-75 ">
								<div class="form-group form-content">
									<label for="name" class="font-weight-bold">{{ __('氏名') }}</label>
									<span class="required-item text-danger">*</span>
									<input id="name" class="form-control  mb-4" placeholder="例：山田　太郎" value="{{ old('name') }}">
									<label for="email" class="font-weight-bold">{{ __('メールアドレス') }}</label>
									<span class="required-item text-danger">*</span>
									<input id="email" class="form-control  mb-4" placeholder="例：example@crowdfunding.com" value="{{ old('email') }}">
									<label for="tel" class="font-weight-bold">{{ __('電話番号') }}</label>
									<span class="required-item text-danger">*</span>
									<input id="tel" class="form-control  mb-4" placeholder="例：0120-000-000" value="{{ old('tel') }}">
									<label for="profile" class="font-weight-bold">{{ __('プロフィール/経歴') }}</label>
									<span class="required-item text-danger">*</span>
									<textarea class="form-control  mb-3" id="profile" rows="5" placeholder="" value="{{ old('profile') }}"></textarea>
									<label for="job" class="font-weight-bold">{{ __('ご職業') }}</label>
									<span class="required-item text-danger">*</span>
									<textarea class="form-control  mt-2 mb-3" id="job" rows="2" placeholder="" value="{{ old('job') }}"></textarea>
									<label for="twitter" class="font-weight-bold">{{ __('Twitter') }}</label>
									<textarea class="form-control  mb-3" id="twitter" rows="2" placeholder="アカウントを複数お持ちの場合はすべて入力してください。" value="{{ old('twitter') }}"></textarea>
									<label for="facebook" class="font-weight-bold">{{ __('Facebook') }}</label>
									<textarea class="form-control  mb-3" id="facebook" rows="2" placeholder="アカウントを複数お持ちの場合はすべて入力してください。" value="{{ old('facebook') }}"></textarea>
									<label for="instagram" class="font-weight-bold">{{ __('Instagram') }}</label>
									<textarea class="form-control  mb-3" id="instagram" rows="2" placeholder="アカウントを複数お持ちの場合はすべて入力してください。" value="{{ old('instagram') }}"></textarea>
									<label for="web_page" class="font-weight-bold">{{ __('その他WEBサイト') }}</label>
									<textarea class="form-control  mb-5" id="web_page" rows="2" placeholder="複数お持ちの場合はすべて入力してください。" value="{{ old('web_page') }}"></textarea>
									<label for="overview" class="font-weight-bold">{{ __('実施したい企画の内容') }}</label>
									<span class="required-item text-danger">*</span>
									<p>
									<small>あなたがクラウドファンディングを通じて実現したい企画内容を、下記のポイントに従って教えてください。【150－300 文字程度】</small>
									<textarea class="form-control  mb-5" id="overview" rows="5" placeholder="実施したい企画、タイトル案、リターン案など" value="{{ old('overview') }}"></textarea>
									<label for="howto" class="font-weight-bold">{{ __('クラウドファンディングの実施パターン') }}</label>
									<span class="required-item text-danger">*</span>
									<p>
									<small>クラウドファンディングを行いたい期間、集めたい金額について教えてください。</small>
									<textarea class="form-control  mb-5" id="howto" rows="5" placeholder="実施希望期間、目標金額" value="{{ old('howto') }}"></textarea>
									<label for="image_url" class="font-weight-bold">{{ __('企画のイメージ画像') }}</label>
									<p>
									<small>行いたい企画内容が伝わる画像や写真があれば、添付してください（JPG、GIFもしくはPNG形式）。</small>
									<input type="file" class="form-control-file mb-4" id="image_url">
									<label for="faq1" class="font-weight-bold mt-4">{{ __('過去にクラウドファンディングの経験はありますか？') }}</label>
									<textarea class="form-control  mb-4" id="faq1" rows="3" placeholder="他社クラウドファンディングサイトで実施経験がある場合はURLをご記入ください" value="{{ old('faq1') }}"></textarea>
									<label for="faq2" class="font-weight-bold">{{ __('どこでCrowdFundingをお知りになりましたか？') }}</label>
									<textarea class="form-control  mb-2" id="faq2" rows="3" placeholder="クラウドファンディング経験のある方からの紹介の場合もお書きください(審査が通りやすくなります)" value="{{ old('faq2') }}"></textarea>
									<small class="required-item text-danger">*は必須入力です。</small>
								</div>
									<div class="form-group form-check">
										<input type="checkbox" class="form-check-input" id="terms_chk" required>
										<label class="form-check-label" for="terms-check">
											<a href="{{ 'terms' }}">利用規約</a>に同意する
										</label>
									</div>
									<button type="submit" class="btn btn-primary  mt-3 px-5 float-right">送信する</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@include('footer')
