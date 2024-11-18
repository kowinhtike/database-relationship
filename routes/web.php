<?php

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/profile/{id}', function ($id) {
    $user = User::find($id);
    return $user->profile;
});

Route::get('/getUser/{id}', function ($id) {
    // $profile = Profile::find($id);
    // return $profile->user;
    $course = Course::find($id);
    return $course->user;
});

Route::get('/getCourses/{id}', function ($id) {
    $user = User::find($id);
    return $user->courses;
});

Route::get('/getLessons/{id}', function ($id) {
    $course = Course::find($id);
    return $course->lessons;
});

Route::get('/getCourse/{id}', function ($id) {
    $lesson = Lesson::find($id);
    return $lesson->course;
});

Route::get('/enroll/{userId}/{courseId}',function($userId,$courseId){
    $user = User::find($userId);
    $user->enrollCourses()->attach($courseId);
});

Route::get('/enrollAll/{userId}',function($userId){
    $user = User::find($userId);
    $user->enrollCourses()->sync([1,2,3]);
});

Route::get('/exitroll/{userId}/{courseId}',function($userId,$courseId){
    $user = User::find($userId);
    $user->enrollCourses()->detach($courseId);
});


Route::get('/getStudents/{id}', function ($id) {
    $course = Course::find($id);
    return $course->students;
});

Route::get('/enrollCourses/{id}', function ($id) {
    $user = User::find($id);
    return $user->enrollCourses;
});