<?php
 use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;

Route::get('/', function () {

    // dd($posts);
    return view('welcome');


});

Route::get('/posts', [Postcontroller::class, 'index']);