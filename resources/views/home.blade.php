@extends('layouts.default.app')

@section('content')
<!-- Content -->
<section class="bg-light">
    <div class="container">
        <h1 class="text-center">See the Event</h1>
        <div class="row">
            @foreach($event as $e)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="http://placehold.jp/302x200.png" alt="" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">{{$e->nama}}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ipsa temporibus ullam blanditiis</p>
                            <p class="card-text">{{\Carbon\Carbon::parse($e->tanggal_mulai)->toFormattedDateString()}}</p>
                            <p class="card-text">{{$e->alamat}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">See more Event</a>
        </div>
    </div>
</section>
@endsection