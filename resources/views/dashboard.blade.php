@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Event Terdekat Minggu ini</h1>

  <div class="row">
  	@foreach($event[1] as $e)
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-3">{{$e->nama}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <h1 class="h3 mb-4 text-gray-800">Event Terbaru</h1>

  <div class="row">
    @foreach($event[0] as $e)
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-3">{{$e->nama}}</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <h1 class="h3 mb-4 text-gray-800">Informasi</h1>

  <div class="row">
  	<div class="col-xl-3 col-md-6 mb-4">
  	  <div class="card border-left-primary shadow h-100 py-2">
  	    <div class="card-body">
  	      <div class="row no-gutters align-items-center">
  	        <div class="col mr-2">
  	          <div class="font-weight-bold text-primary text-uppercase mb-3">My Events</div>
  	          <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
  	        </div>
  	        <div class="col-auto">
  	          <i class="fas fa-calendar fa-2x text-gray-300"></i>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
  	</div>

  	<div class="col-xl-3 col-md-6 mb-4">
  	  <div class="card border-left-success shadow h-100 py-2">
  	    <div class="card-body">
  	      <div class="row no-gutters align-items-center">
  	        <div class="col mr-2">
  	          <div class="font-weight-bold text-success text-uppercase mb-3">My Tickets</div>
  	          <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
  	        </div>
  	        <div class="col-auto">
  	          <i class="fas fa-calendar fa-2x text-gray-300"></i>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
  	</div>
  </div>

</div>
<!-- End Page Content -->
@endsection
