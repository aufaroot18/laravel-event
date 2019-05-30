@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">My Event</h1>
	<div class="row">
		@foreach($myEvent->events as $m)
			<div class="col-md-3 mb-4">
				<div class="card h-100 border-bottom-primary">
					<div class="card-body">
						<h5 class="card-title font-weight-bold">{{$m->nama}}</h5>
						<p class="card-text">{{\Carbon\Carbon::parse($m->tanggal_mulai)->toFormattedDateString()}}</p>
						<p class="card-text">{{$m->alamat}}</p>
					</div>
					<div class="card-footer">
						<a href="{{action('EventController@editEvent', ['id' => $m->id])}}" class="btn btn-primary">Edit</a>
						<a href="#" class="btn btn-success">Detail</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection