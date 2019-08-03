@extends('layouts.default.app')

@section('content')
<main>
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<img src="{{url('gambar/'.$event->gambar)}}" class="img-fluid rounded">
			</div>
			<div class="col-md-5">
				<h1>{{$event->nama}}</h1>
				<p>{{$event->alamat}}</p>
				<p>
					{{\Carbon\Carbon::parse($event->tanggal_mulai)->toFormattedDateString()}} - {{\Carbon\Carbon::parse($event->tanggal_akhir)->toFormattedDateString()}}
				</p>
				<p>{{$user->name}}</p>
				<a href="#" class="btn btn-primary">Register</a>
			</div>
		</div>
		<div class="row">
			<div class="col-7">
				<h3>Deskripsi Event</h3>
				{!! $event->deskripsi !!}
			</div>
		</div>
	</div>
</main>
@endsection