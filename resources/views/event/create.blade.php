@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Create Event</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
	<form action="{{action('EventController@storeEvent')}}" method="POST" enctype="multipart/form-data">
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
			<label class="col-md-2 col-form-label">Tanggal Mulai</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" id="tanggal_mulai" placeholder="Tanggal Mulai" name="tanggal_mulai" value="2019-12-25T08:30">
				@error('tanggal_mulai')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Selesai</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" id="tanggal_selesai" placeholder="Tanggal Selesai" name="tanggal_selesai" value="2019-12-25T12:00">
				@error('tanggal_selesai')
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
			<label class="col-md-2 col-form-label">Gambar</label>
			<div class="col-md-10">
				<input type="file" class="form-control-file" id="gambar" name="gambar">
				@error('gambar')
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