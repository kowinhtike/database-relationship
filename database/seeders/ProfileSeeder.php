<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $user = User::factory()->create([
            'name' => 'Mya Mya',
            'email' => 'myamya@gmail.com',
        ]);
        

        $user->profile()->create([
            'phone' => '098342334',
            'address' => "Meikhtila",
        ]);

    }
}
