<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $course = Course::find(3);
        
        // $course->lessons()->create([
        //     'title' => 'lesson 1',
        //     'content' => "lesson 1 content",
        // ]);

        // $course->lessons()->create([
        //     'title' => 'lesson 2',
        //     'content' => "lesson 2 content",
        // ]);

        $lesson = new Lesson();
        $lesson->title = "lesson 3";
        $lesson->content = "lesson 3 content";
        $course->lessons()->save($lesson);


    }
}
