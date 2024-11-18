<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::find(2);
        
        $user->courses()->create([
            'title' => 'Myanmar Sar',
            'description' => "for myanmar students",
            'price' => 5000
        ]);

        $user->courses()->create([
            'title' => 'English Sar',
            'description' => "for myanmar students",
            'price' => 10000
        ]);

        $user->courses()->create([
            'title' => 'Mathematic',
            'description' => "for myanmar students",
            'price' => 5000
        ]);
    }
}
