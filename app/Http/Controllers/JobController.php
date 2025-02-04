<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

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

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

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
