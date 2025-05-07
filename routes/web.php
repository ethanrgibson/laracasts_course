<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'greeting' => 'Hello',
        'jobs' => [
            [
                'title' => 'director',
                'salary' => '$50,000'
            ],
            [
                'title' => 'Big Dawg',
                'salary' => '$500,000'
            ],
            [
                'title' => 'Street Sweeper',
                'salary' => '$5,000,000'
            ]
        ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
