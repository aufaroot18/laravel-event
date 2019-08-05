@extends('layouts.default.app')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Create, Join, and Share Event.</h1>
        <p class="lead w-75">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, totam, dolore? Deleniti minus beatae, ducimus a dolorem nesciunt. Nihil eius autem aliquid consequatur aut, amet dolor sapiente earum cumque quidem.</p>
        <a href="#see" class="btn btn-primary btn-lg">See Event</a>
    </div>
</div>

<!-- Content -->
<main class="content">
    <section>
        <div class="container">
            <h2 class="text-center" id="see">See the Event</h2>
            <div class="row">
                @foreach($event as $e)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="{{route('explore.show', ['id' => $e->id])}}">
                                <img src="{{url('gambar/'.$e->gambar)}}" alt="" class="card-img-top" height="200" width="300">
                            </a>
                            <div class="card-body">
                                <a href="{{route('explore.show', ['id' => $e->id])}}" class="text-dark text-decoration-none">
                                    <h5 class="card-title d-inline-block">{{$e->nama}}</h5>
                                </a>
                                <p class="card-text"><i class="fas fa-calendar-week"></i>{{\Carbon\Carbon::parse($e->tanggal_mulai)->toFormattedDateString()}}</p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i>{{$e->alamat}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- For Fun -->
                @foreach($event as $e)
                    @if($loop->iteration == 5)
                        @break
                    @endif
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="{{route('explore.show', ['id' => $e->id])}}">
                                <img src="{{url('gambar/'.$e->gambar)}}" alt="" class="card-img-top" height="200" width="300">
                            </a>
                            <div class="card-body">
                                <a href="{{route('explore.show', ['id' => $e->id])}}" class="text-dark text-decoration-none">
                                    <h5 class="card-title d-inline-block">{{$e->nama}}</h5>
                                </a>
                                <p class="card-text"><i class="fas fa-calendar-week"></i>{{\Carbon\Carbon::parse($e->tanggal_mulai)->toFormattedDateString()}}</p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i>{{$e->alamat}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($event as $e)
                    @if($loop->iteration == 2)
                        @break
                    @endif
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="{{route('explore.show', ['id' => $e->id])}}">
                                <img src="{{url('gambar/'.$e->gambar)}}" alt="" class="card-img-top" height="200" width="300">
                            </a>
                            <div class="card-body">
                                <a href="{{route('explore.show', ['id' => $e->id])}}" class="text-dark text-decoration-none">
                                    <h5 class="card-title d-inline-block">{{$e->nama}}</h5>
                                </a>
                                <p class="card-text"><i class="fas fa-calendar-week"></i>{{\Carbon\Carbon::parse($e->tanggal_mulai)->toFormattedDateString()}}</p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i>{{$e->alamat}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <!-- For Fun -->

            </div>
            <div class="text-center mt-4">
                <a href="/explore" class="see-all float-right">See All Event</a>
            </div>
        </div>
    </section>
</main>
@endsection