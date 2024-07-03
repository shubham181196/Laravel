<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'jobs'=>[
            'title'=>'Director',
            'salary'=>'$50,000'
        ],[
            'title'=>'Director',
            'salary'=>'$50,000'
        ]
    ]);
});

Route::get('/create', function () {
    return view('create');
});

Route::post('/store', function () {
    return view('about');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contact');
});
