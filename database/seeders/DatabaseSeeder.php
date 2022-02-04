<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \App\Models\Tracking::factory(10)->create();
       \App\Models\TrackingLogs::factory(10)->create();
    }
}
