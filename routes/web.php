<?php

use App\Models\Tweet;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ["date" => "2024-08-04", "place" => "Kollam"]);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/tweets', function () {
    $tweets = Tweet::all();
    return view('tweets', ["tweets" => $tweets]);
});

Route::get('/tweets/{id}', function ($id) {
    $data = Tweet::find($id);
    return view('pages.tweets.view', ["data" => $data]);

});