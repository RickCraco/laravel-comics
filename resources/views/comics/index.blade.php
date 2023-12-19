@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<main>
    <section class="container">
        <h1>Comics</h1>
        <div class="row gy-4">
            @foreach($comics as $key=> $comic)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['series'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic['series'] }}</h5>
                            <p class"card-text">{!! substr($comic['description'], 0, 100) . '...' !!}</p>
                            <a href="{{ route('comics.show', $key) }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>

@endsection