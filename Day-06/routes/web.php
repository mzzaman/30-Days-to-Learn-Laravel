<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs', function () {
    $jobs = [
        [
            'id'=>1,
            'title'=> 'Director',
            'salary'=> '$50,000',
        ],
        [
            'id'=>2,
            'title'=> 'Programmer',
            'salary'=> '$10,000',
        ],
        [
            'id'=>3,
            'title'=> 'Teacher',
            'salary'=> '$40,000',
        ]
    ];
    return view('jobs', ['jobs'=>$jobs]);
});

Route::get('/contact', function () {
    return view('contact');
});

