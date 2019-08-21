@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Detail Event</h1>
	

	<table class="table table-bordered table-hover">
		@foreach($event as $e)
		<tr>
			<th>Nama Event</th>
			<td>{{$e->nama}}</td>
		</tr>
		<tr>
			<th>Tanggal Mulai</th>
			<td>{{\Carbon\Carbon::parse($e->tanggal_mulai)->format('M d Y, H:i')}}</td>
		</tr>
		<tr>
			<th>Tanggal Selesai</th>
			<td>{{\Carbon\Carbon::parse($e->tanggal_selesai)->format('M d Y, H:i')}}</td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td>{{$e->alamat}}</td>
		</tr>
		<tr>
			<th>User Joined</th>
			<td>{{count($userevent)}}</td>
		</tr>
		@endforeach
	</table>
</div>
@endsection