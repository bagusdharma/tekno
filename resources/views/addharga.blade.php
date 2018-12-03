@extends('master')

@section('content')
<div class="ui segment">
	<form class="ui form" method="post" action="{{ route('harga.store') }}">
		<h4 class="ui dividing header">Edit Harga</h4>
		@csrf
		<br>
		<input type="hidden" name="toko" value={{ $user }}>
		<div class="field">
			<label>Ukuran Kertas</label>
			<input type="text" name="ukuran" placeholder="Ukuran Kertas">
		</div>
		<div class="field">
			<label>Harga Berwarna</label>
			<input type="text" name="berwarna" placeholder="Harga Berwarna">
		</div>
		<div class="field">
			<label>Harga Hitam Putih</label>
			<input type="text" name="bnw" placeholder="Harga Hitam Putih">
		</div>
		<button class="ui button green" type="submit">Tambahkan</button>
	</form>
</div>


@if(!empty(Session::get('message')))
<div class="ui mini modal" id="message">
    <div class="header">Berhasil!</div>
    <div class="content">
        <p>{{ Session::get('message') }}</p>
    </div>
    <div class="actions">
        <div class="ui green ok inverted button">
            <i class="checkmark icon"></i>Ok
        </div>
    </div>
</div>

<script>
    $(function() {
        $('#message').modal('show');
    });
</script>
@endif

@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.main.menu  .ui.dropdown').dropdown({
                on: 'hover'
        });
    });

</script>
@endsection