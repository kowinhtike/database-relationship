<?php

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
    $profile = Profile::find($id);
    return $profile->user;
});
