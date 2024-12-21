<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // DB::table('users')->truncate();

        User::factory()->create([
            'name' => 'Ngô Minh Trung',
            'email' => 'ngominhtrung@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
