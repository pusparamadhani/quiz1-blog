@extends('layouts.app')

@section('content')

<div class="container">
	<h3>TAMBAH DATA ALBUM</h3>
	<form method="POST" action="{{ url('/album/' . $album->id) }}">
		@csrf
		<table>
			<tr>
				<td>NAMA BARANG</td>
				<td><input type="text" name="name" value="{{ $album->name }}"></td>
			</tr>
			<tr>
				<td>TEXT</td>
				<td><input type="text" name="text" value="{{ $album->text }}"></td>
			</tr>
            <tr>
				<td>ID PHOTO</td>
				<td><input type="text" name="photos_id" value="{{ $album->photos_id }}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-primary" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>
@endsection