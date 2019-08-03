@extends('layouts.default.app')

@section('content')
<!-- Content -->
<main class="content">
    <section>
        <div class="container">
            <h2 class="text-center">See the Event</h2>
            <div class="row">
                @foreach($event as $e)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <a href="{{route('explore.show', ['id' => $e->id])}}">
                                <img src="{{url('gambar/'.$e->gambar)}}" alt="" class="card-img-top" height="200" width="300">
                            </a>
                            <div class="card-body">
                                <a href="{{route('explore.show', ['id' => $e->id])}}" class="text-dark text-decoration-none">
                                    <h5 class="card-title">{{$e->nama}}</h5>
                                </a>
                                <p class="card-text"><i class="fas fa-calendar-week"></i>{{\Carbon\Carbon::parse($e->tanggal_mulai)->toFormattedDateString()}}</p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i>{{$e->alamat}}</p>
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