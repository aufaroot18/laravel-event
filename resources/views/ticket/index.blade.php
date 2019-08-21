@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">My Tickets</h1>
	<div class="row">
		@foreach($myEventJoined as $m)
			<div class="col-md-3 mb-4">
				<div class="card h-100 border-bottom-primary">
					<div class="card-body">
						<h5 class="text-primary card-title font-weight-bold">
							<a class="text-primary text-decoration-none" href="{{route('explore.show', ['id' => $m->event_id])}}">{{$m->nama}}</a>
						</h5>
						<p>
						  <i class="fas fa-calendar-week mr-2"></i>{{\Carbon\Carbon::parse($m->tanggal_mulai)->format('M d Y, H:i')}}
						</p>
						<p>
						  <i class="fas fa-map-marker-alt mr-2"></i>{{$m->alamat}}
						<p>
					</div>
					<div class="card-footer">
						<a href="{{route('dashboard.ticket.pdf', ['id' => $m->event_id])}}" class="btn btn-primary btn-block">Download Ticket</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection