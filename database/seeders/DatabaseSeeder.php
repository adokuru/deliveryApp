<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       User::create ([
            'name' => 'admin',
            'email' => 'david@danoitech.com',
            'password' => Hash::make('DANOITECH12345')
       ]);
       User::create ([
            'name' => 'Flex',
            'email' => 'carl@fsgl.com',
            'password' => Hash::make('FSGL12345')
       ]);

       \App\Models\Tracking::factory(10)->create();
       \App\Models\TrackingLogs::factory(10)->create();
    }
}
