@extends('layouts.admin.app')

@section('content')
<div class="container">
	<h1 class="h3 mb-4 text-gray-800">Create Event</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
	<form action="{{action('EventController@storeEvent')}}" method="POST">
		@csrf
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Nama Event</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="nama" placeholder="Nama Event" name="nama">
				@error('nama')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Alamat</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
				@error('alamat')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Deskripsi</label>
			<div class="col-md-10">
				<textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
				@error('deskripsi')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-12">
				<button type="submit" class="btn btn-primary btn-block">Save</button>
			</div>
		</div>
	</form>
</div>
@endsection