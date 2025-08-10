@extends('layouts.main')
@php
    // dd(config('comics'));
    $comics = config('comics');
@endphp

@section('contenuto-comics')
    <div class="container">
        <h1>Questa è la pagina comics</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src={{ $comic['thumb'] }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['title'] }}</h5>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
