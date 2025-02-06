<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    // show all jobs
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(8);

        return view('jobs/index', [
            'jobs' => $jobs
        ]);
    }

    // show the form for creating a new job
    public function create()
    {
        return view('jobs/create');
    }

    // create a new job
    public function store()
    {
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required|numeric'
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        Mail::to($job->employer->user)->send(
            new JobPosted($job)
        );

        return redirect('/jobs');
    }

    // show a single job
    public function show(Job $job)
    {
        return view('jobs/show', [
            'job' => $job
        ]);
    }

    // show the form for editing a job
    public function edit(Job $job)
    {
        return view('jobs/edit', [
            'job' => $job
        ]);
    }

    // update a job
    public function update(Job $job)
    {
        request()->validate([
            'title' => 'required|min:3',
            'salary' => 'required|numeric'
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/jobs/' . $job->id);
    }

    // delete a job
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
