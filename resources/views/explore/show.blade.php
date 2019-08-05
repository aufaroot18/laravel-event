@extends('layouts.default.app')

@section('content')
<main class="detail">
	<div class="head">
		<div class="container">
			<div class="row head">
				<div class="col-md-7">
					<img src="{{url('gambar/'.$event->gambar)}}" class="img-fluid rounded">
				</div>
				<div class="col-md-5">
					<h1>{{$event->nama}}</h1>
					<p><i class="fas fa-map-marker-alt"></i>{{$event->alamat}}</p>
					<p>
						<i class="fas fa-calendar-week"></i>{{\Carbon\Carbon::parse($event->tanggal_mulai)->toFormattedDateString()}} - {{\Carbon\Carbon::parse($event->tanggal_akhir)->toFormattedDateString()}}
					</p>
					<p><i class="far fa-user"></i>Created by {{$user->name}}</p>
					<a href="#" class="btn btn-primary">Join Event</a>
				</div>
			</div>
		</div>
	</div>
	<div class="body">
		<div class="container">
			<div class="row">
				<div class="col-8">
					<h3>Deskripsi</h3>
					{!! $event->deskripsi !!}
				</div>
			</div>
		</div>
	</div>
</main>
@endsection