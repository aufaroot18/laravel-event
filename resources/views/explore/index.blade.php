@extends('layouts.default.app')

@section('content')
<!-- Content -->
<main class="content">
    <section>
        <div class="container">
            <h2 class="text-center">See the Event</h2>
            <form action="{{route('explore.search')}}" method="GET">
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <input class="form-control" type="text" placeholder="Search Event" name="search" required="required">
                    </div>
                    <div class="form-group col-md-2">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>
            </form>
            <div class="text-right mb-3">
                <div class="row">
                    <div class="col-md-10 text-left">
                        @error('search')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-2 pl-0">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle btn-block" type="button" data-toggle="dropdown">
                                @if (isset($statusDropdown))
                                    {{$statusDropdown}}
                                @else
                                    Sort
                                @endif
                            </button>
                            <div class="dropdown-menu">
                                <a href="{{route('explore.week')}}" class="dropdown-item">This Week</a>
                                <a href="{{route('explore.month')}}" class="dropdown-item">This Month</a>
                                <a href="{{route('explore.all')}}" class="dropdown-item">All Event</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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