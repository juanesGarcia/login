<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login-facebook', function () {
    return Socialite::driver('facebook')->redirect();
});
Route::get('/facebook-callback', function () {
    $user=Socialite::driver('facebook')->user();
    dd($user);
});
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    dd($user);
});