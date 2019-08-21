@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">My Events</h1>
	<div class="row">
		@foreach($myEvent as $m)
			<div class="col-md-3 mb-4">
				<div class="card h-100 border-bottom-primary">
					<div class="card-body">
						<h5 class="text-primary card-title font-weight-bold">
							<a class="text-primary text-decoration-none" href="{{route('explore.show', ['id' => $m->id])}}">{{$m->nama}}</a>
						</h5>
						<p class="card-text">{{\Carbon\Carbon::parse($m->tanggal_mulai)->toFormattedDateString()}}</p>
						<p class="card-text">{{$m->alamat}}</p>
					</div>
					<div class="card-footer">
						<a href="{{action('EventController@editEvent', ['id' => $m->id])}}" class="btn btn-primary">Edit</a>
						<a href="{{action('EventController@detailEvent', ['id' => $m->id])}}" class="btn btn-success">Detail</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection