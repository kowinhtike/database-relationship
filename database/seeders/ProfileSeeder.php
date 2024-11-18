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
            'name' => 'Aye Aye',
            'email' => 'ayeaye@gmail.com',
        ]);
        

        $user->profile()->create([
            'phone' => '098342334',
            'address' => "Mandalay",
        ]);

    }
}
