<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generate 500 fake job listings using the JobFactory
        Job::factory(500)->create();
    }
}
