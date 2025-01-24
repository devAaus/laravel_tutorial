<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'title' => 'PHP Developer',
                'salary' => '$50,000'
            ],
            [
                'id' => '2',
                'title' => 'Python Developer',
                'salary' => '$60,000'
            ],
            [
                'id' => '3',
                'title' => 'Java Developer',
                'salary' => '$70,000'
            ],
        ]
    ]);
});

Route::get('/job/{id}', function ($id) {

    $jobs = [
        [
            'id' => '1',
            'title' => 'PHP Developer',
            'salary' => '$50,000'
        ],
        [
            'id' => '2',
            'title' => 'Python Developer',
            'salary' => '$60,000'
        ],
        [
            'id' => '3',
            'title' => 'Java Developer',
            'salary' => '$70,000'
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    if (!$job) {
        abort(404);
    }

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
