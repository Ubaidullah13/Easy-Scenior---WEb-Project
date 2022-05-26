<?php

use Illuminate\Support\Facades\Route;
use App\Models\Users;
use App\Http\Controllers\Register_Login_Controller;
use App\Http\Controllers\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FindTutorController;
use App\Http\Controllers\FaqController;
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

Route::get('/', [HomeController::class,'view']);
Route::get('/Home', [HomeController::class,'view']);

Route::get('/testimonials', [HomeController::class,'Testimonial']);

Route::get('/About', [AboutController::class,'view']);

Route::get('/Find Tutor', [FindTutorController::class,'view']);

Route::get('/faqs', [FaqController::class,'view']);

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/contactThanks', function () {
    return view('contactThanks');
});

Route::get('/FindCourse', function () {
    return view('FindCourse');
});

// Route::get('/testimonials', function () {
//     return view('testimonials');
// });

// Register and Login
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('registerUser',[Register_Login_Controller::class,'registerUser']);
Route::post('loginUser',[Register_Login_Controller::class,'login']);


// Test
Route::get('/user',function(){
    $users = Users::all();
    echo "<pre>";
    print_r($users->toArray());
});

Route::get('/st',function(){
    return view('stDashboard');
});