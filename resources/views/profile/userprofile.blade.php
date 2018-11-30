@extends('master')

@section('content')
<div class="ui segment">
	<div class="ui form">
		<div class="field">
			<div class="ui message">
				<div class="header">Upgrade Account?</div>
				<p>Anda pemilik bisnis printing? Upgrade akun anda menjadi akun Toko Printing sekarang!</p>
				<a><div class="ui button primary">Upgrade Akun</div></a>
			</div>
		</div>
		<div class="field">
			<img class="ui medium centered image" src="/img/profile.jpg">
		</div>
		<div class="two fields">
			<div class="field">
				<div class="field">
					<div class="ui input">
						<input id="name" type="text" value="{{ $user->name }}" placeholder="Nama">
					</div>
				</div>
			</div>
		</div>
		<div class="two fields">
			<div class="field">
				<div class="ui input">
					<input type="text" value="{{ $user->email }}" placeholder="Email">
				</div>
			</div>
		</div>
		<a><div class="ui button">Update Akun</div></a>
	</div>
</div>
@endsection