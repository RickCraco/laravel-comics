<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config('comics.comics');
    $menu = config('menu.navcontent');
    return view('home', compact('comics'), compact('menu'));
});

Route::get('/characters', function () {
    return(view('characters'));
});

Route::get('/comics',function(){
    $comics = config('comics.comics');
    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/comics/{index}',function($index){
    $comics = config('comics.comics');

    if($index >= 0 && $index < count($comics)){
        $comic = $comics[$index];
        return view('comics.show', compact('comic'));
    }else{
        abort(404);
    }
})->name('comics.show');
