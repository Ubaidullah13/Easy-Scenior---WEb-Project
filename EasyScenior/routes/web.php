<?php

use Illuminate\Support\Facades\Route;
use App\Models\Users;
use App\Models\Contact;
use App\Models\ContactDetails;
use App\Http\Controllers\Register_Login_Controller;
use App\Http\Controllers\User;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FindTutorController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FindATutor;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AdminController;

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
Route::get('/FindCourse', [CoursesController::class,'view']);

Route::get('/faqs', [FaqController::class,'view']);

Route::get('/contact', [ContactController::class,'view']);
Route::post('/contact', [ContactController::class,'ContactInfo']);

Route::get('/contactThanks', function () {
    return view('contactThanks');
});



// Route::get('/testimonials', function () {
//     return view('testimonials');
// });

// Register and Login
Route::get('/login', function () {
    return view('login');
})->middleware('customAuth');

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



//protected -- user can't access it without login



Route::get('/no-access', function()
{
     echo "You are not allowed to access the page";
     echo "<br>";
     echo "<a href='\'> Go to Home Page </a>";
     die;
});

Route::get('/Goback-Dashboard', function()
{
     echo "You are already logged in";
     echo "<br>";
     echo "<a href='\sDash'> Go back to your DashBoard </a>";
     die;
});


Route::get('/sDash', function()
{
    return view('starter Dashboard');
})->middleware('customAuth');

Route::get('/logout',function(){
    session()->forget('user');
    return redirect('/');
});


Route::get('/DashTutors', [FindTutorController::class,'DashView']);
Route::get('/DashTutorsDetails/{name}', [FindTutorController::class,'TutorDetails']);
// Route::get('/DashTutorsDetails/{name}',function($name){
//     return view('IndividualTutorD');
//     });

Route::get('/DashCourses', [CoursesController::class,'DashView']);
Route::get('/DashCourseDetails/{id}', [CoursesController::class,'CourseDetails']);

Route::get('/DashSessions',function(){
    return view('UpSession');
    });

Route::get('/TutorDashboard',function(){
        return view('Tutor-Dash-Home');
        })->middleware('customAuth');;
Route::get('/StudentDashboard',function(){
            return view('St-Dash-Home');
            })->middleware('customAuth');;
// Route::get('/AdminDashboard',function(){
//             return view('Admin-Dash-Home');
//                 })->middleware('customAuth');



//Live search
Route::get('/FindATutor', [FindATutor::class, 'index']);
Route::get('/FindATutor/action', [FindATutor::class, 'action']);

Route::post('/getmsg/{name}',[AjaxController::class, 'view']);

Route::get('/AdminDashboard', [AdminController::class,'Mailview'])->middleware('customAuth');

Route::get('/AdminDashboard/user', [AdminController::class,'Userview'])->middleware('customAuth');