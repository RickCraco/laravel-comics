@extends('layouts.app')

@section('title', 'Home')

@section('content')
<nav>
    <div class="py-4 text-white boack">
        <section class="w-100 sezione-top position-relative">
            <h3 class="bg-primary text-white text-uppercase p-3">Current series</h3>
        </section>
            <section>
            <div class="container py-5">
                <div class="row">
                    @foreach($comics as $comic)
                    <div class="col-2">
                        <div>
                            <img src="{{$comic['thumb']}}" alt="" class="w-100">
                        </div>
                        <div>
                            <h5>{{$comic['series']}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <div class="my-bg" id="div-blu ">
        <div class="container">
            <div class="d-flex nav align-items-center justify-content-center">
                <div class="px-3 nav-item d-flex align-items-center py-4">
                    @foreach($menu as $item)
                    <div>
                        <img src="{{$item['image']}}" alt="" class="my-img">
                    </div>
                    <span class="text-white">{{$item['title']}}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</nav>
@endsection
