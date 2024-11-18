<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Zaw Zaw',
        //     'email' => 'zawzaw@gmail.com',
        // ]);

        // Profile::create([
        //     'phone' => '09878674',
        //     'address' => "yangon",
        //     'user_id' => 1
        // ]);

        $this->call([ProfileSeeder::class]);
    }
}
