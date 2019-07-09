@extends('layouts.default.app')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Event Laravel</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, totam, dolore? Deleniti minus beatae, ducimus a dolorem nesciunt. Nihil eius autem aliquid consequatur aut, amet dolor sapiente earum cumque quidem.</p>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam iste labore qui animi dignissimos excepturi eaque corrupti. Repudiandae, dolorum in.</p>
        <a href="#" class="btn btn-primary btn-lg">See Event</a>
    </div>
</div>

<!-- Content -->
<main>
    <section class="bg-light">
        <div class="container">
            <h1 class="text-center">See the Event</h1>
            <div class="row">
                @foreach($event as $e)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="{{route('explore.show', ['id' => $e->id])}}">
                                <img src="{{url('gambar/'.$e->gambar)}}" alt="" class="card-img-top" height="200" width="300">
                            </a>
                            <div class="card-body">
                                <a href="{{route('explore.show', ['id' => $e->id])}}" class="text-dark text-decoration-none">
                                    <h5 class="card-title font-weight-bold d-inline-block">{{$e->nama}}</h5>
                                </a>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus ipsa temporibus ullam blanditiis</p>
                                <p class="card-text">{{\Carbon\Carbon::parse($e->tanggal_mulai)->toFormattedDateString()}}</p>
                                <p class="card-text">{{$e->alamat}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="explore/all" class="btn btn-primary">See more Event</a>
            </div>
        </div>
    </section>
</main>
@endsection