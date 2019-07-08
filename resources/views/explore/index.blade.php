@extends('layouts.default.app')

@section('content')
<!-- Content -->
<main>
    <section class="">
        <div class="container">
            <h1 class="text-center">See the Event</h1>
            <div class="row">
                @foreach($event as $e)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{url('gambar/'.$e->gambar)}}" alt="" class="card-img-top" height="200" width="300">
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
            {{$event->links()}}
        </div>
    </section>
</main>
@endsection