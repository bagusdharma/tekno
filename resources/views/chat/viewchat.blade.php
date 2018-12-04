@extends('master')

@section ('content')
<div class="ui centered segment">
	<h4 class="ui dividing header">Messages</h4>
	<table class="ui striped celled table">
		<thead>
			<tr class="center aligned">
				<th>Pengguna</th>
				<th>Penjual</th>
			</tr>
		</thead>
		<tbody>
				@php
				foreach($chats as $chat){
					echo '<tr class="center aligned">';
					if($chat["sender_id"] == 1){
						echo '
						<td>'. $chat["message"] .'</td>
						<td></td>
						';
					}
					else{
						echo '
						<td></td>
						<td>'. $chat["message"] .'</td>
						';
					}
					echo '</tr>';
				}
				@endphp
		</tbody>
	</table>
	<form class="ui form">
		<div class="field">
			<input type="text" placeholder="Masukkan pesan anda...">
			<button type="button" class="ui button">Kirim</button>
		</div>
	</form>
</div>
@endsection