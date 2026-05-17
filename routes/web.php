<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::all();
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::findOrFail($id);
    return view('job', ['job' => $job]);
});
