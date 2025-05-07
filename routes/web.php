<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
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

Route::get('/contact', function(){
    return view('contact');
});
