<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Job::factory(500)->create();
    }
}
