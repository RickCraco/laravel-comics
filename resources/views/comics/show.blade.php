@extends('layouts.app')

@section('title', 'Comic Details')

@section('content')

<main>
    <section class="container">
        <h1>{{$comic['series]}}</h1>
        <div class="row gy-4">
            <div class="col-8">
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic['series']}}</h5>
                        <p class="card-text">{!! $comic['description'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>