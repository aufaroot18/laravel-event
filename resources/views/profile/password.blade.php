@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Profile</h1>
  <form>
  	<div class="form-group row">
  	  <label class="col-md-2 col-form-label">Current Passowrd</label>
  	  <div class="col-md-10">
  	    <input type="text" class="form-control" id="name" placeholder="Current Password">
  	  </div>
  	</div>
    <div class="form-group row">
      <label class="col-md-2 col-form-label">New Password</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="name" placeholder="New Password">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-2 col-form-label">Confirm New Password</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="name" placeholder="Confirm New Password">
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-block">Save</button>
      </div>
    </div>
  </form>

</div>
<!-- End Page Content -->
@endsection
