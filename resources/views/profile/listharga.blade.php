@extends('master')

@section('content')
<div class="ui segment">
	<h4 class="ui dividing header">Edit Harga</h4>
	<br>
	@csrf
	<table class="ui four column celled striped table" id="tabelHarga">
		<thead>
			<tr class="center aligned">
				<th>Ukuran</th>
				<th>Berwarna</th>
				<th>Hitam Putih</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if(count($lists)>0)
			<a href="/addharga"><button type="button" class="ui button green">Add New</button></a>
			@foreach($lists as $list)
			<tr class="center aligned">
				<td data-label="Ukuran" id="ukuran">{{ $list->ukuran }}</td>
				<td data-label="Berwarna" id="berwarna">{{ $list->berwarna }}</td>
				<td data-label="BNW" id="bnw">{{ $list->bnw }}</td>
				<td data-label="Action" class="collapsing">
					<a href="{{ route('harga.edit', $list->id) }}"><button type="button" class="ui button">Edit</button></a>
					<a href="{{ route('harga.hapus', $list->id) }}"><button type="button" class="ui button red">Delete</button></a>
				</td>
			</tr>
			@endforeach
			@else
			<tbody>
			<tr id="empty" class="center aligned">
				<td colspan="4" data-label="Action" class="collapsing">
					<a href="/addharga"><button type="button" class="ui button green">Add New</button></a>
				</td>
			</tr>
			@endif
		</tbody>
	</table>
</div>
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