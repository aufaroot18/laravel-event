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
						<i class="fas fa-calendar-week"></i>{{\Carbon\Carbon::parse($event->tanggal_mulai)->format('M d Y, H:i')}} - {{\Carbon\Carbon::parse($event->tanggal_selesai)->format('M d Y, H:i')}}
					</p>
					<p><i class="far fa-user"></i>Created by {{$user->name}}</p>
					@auth
						@if($statusJoin)
							<a href="#" class="btn btn-outline-primary disabled mr-2">Joined</a>
							<a href="{{route('dashboard.ticket.pdf', ['id' => $event->id])}}" class="btn btn-primary">Download Ticket</a>
						@else
							<a href="/explore/{{$event->id}}/join" class="btn btn-primary">Join Event</a>
						@endif
					@endauth
					@guest
						<a href="/explore/{{$event->id}}/join" class="btn btn-primary">Join Event</a>
					@endguest
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