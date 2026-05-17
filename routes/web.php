<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

// Home page
Route::get('/', function () {
    return view('home');
});

// Jobs listing page
Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs', ['jobs' => $jobs]);
});

// Single job detail page
Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    return view('job', ['job' => $job]);
});
