@extends('master')

@section('content')
<div class="ui segment">
    <h4 class="ui dividing header">Upgrade akun {{ $user->name }}?</h4>
    Beberapa hal di bawah ini akan berlaku setelah anda melakukan upgrade akun ke akun Bisnis:
    <div class="ui bulleted list">
    	<div class="item">Anda hanya dapat melayani proses Printing. Anda tidak dapat melakukan order Print pada Toko Printing yang ada.</div>
    	<div class="item">Anda tidak dapat kembali ke akun Personal.</div>
    	<div class="item">Anda perlu mengupdate harga pada menu Profile -> Update Harga.</div>
    	<div class="item">Warranty</div>
    </div>
    <br>
    <form method="post">
    	@csrf
    	<input type="submit" value="Setuju" class="ui button primary">
    </form>
</div>
@endsection