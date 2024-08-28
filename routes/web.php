<?php
use Illuminate\Support\Facades\Route;
Route::get('/Content', function () {
     return view('Content'); 
    });
Route::get('/About', function () { 
    return view('About'); 
});
Route::get('/Cv', function () { 
    return view('Cv'); 
});
Route::get('/', function () { 
    return view('welcome'); 
});