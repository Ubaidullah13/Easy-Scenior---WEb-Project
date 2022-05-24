<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/starter', function () {
    return view('starter');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/Home', function () {
    return view('home');
});


Route::get('/About', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contactThanks', function () {
    return view('contactThanks');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/Find Tutor', function () {
    return view('FindATutor');
});
Route::get('/FindCourse', function () {
    return view('FindCourse');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});