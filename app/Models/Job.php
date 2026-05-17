<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     * We use 'job_listings' to avoid conflict with Laravel's built-in 'jobs' queue table.
     */
    protected $table = 'job_listings';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['title', 'salary', 'description'];
}
