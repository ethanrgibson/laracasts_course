<?php

use \Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs',[
        'greeting' => 'Hello',
        'jobs' => [
            [
                'id' => 1,
                'title' => 'director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Big Dawg',
                'salary' => '$500,000'
            ],
            [
                'id' => 3,
                'title' => 'Street Sweeper',
                'salary' => '$5,000,000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function($id){
    
$jobs = [
            [
                'id' => 1,
                'title' => 'director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Big Dawg',
                'salary' => '$500,000'
            ],
            [
                'id' => 3,
                'title' => 'Street Sweeper',
                'salary' => '$5,000,000'
            ]

        ];

        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

        dd($job );

    return view('job', ['job' => $job ]);
});

Route::get('/contact', function(){
    return view('contact');
});
