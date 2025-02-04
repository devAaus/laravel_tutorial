<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// index route
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(8);

    return view('jobs/index', [
        'jobs' => $jobs
    ]);
});


// create route
Route::get('/jobs/create', function () {
    return view('jobs/create');
});


// show route
Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs/show', [
        'job' => $job
    ]);
});


// store route
Route::post('/jobs', function () {

    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required|numeric'
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


// edit route
Route::get('/job/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs/edit', [
        'job' => $job
    ]);
});


// update route
Route::patch('/job/{id}', function ($id) {
    //validate
    request()->validate([
        'title' => 'required|min:3',
        'salary' => 'required|numeric'
    ]);

    //authorize
    //update
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    //redirect
    return redirect('/job/' . $job->id);
});


// destroy route
Route::delete('/job/{id}', function ($id) {

    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
