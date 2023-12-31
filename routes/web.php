<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\courseList\AutocadController;
use App\Http\Controllers\courseList\MepController;
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


Route::get('/', function () {
    return view('/home');
});
// Route::get('/home', function () {
//     return view('/home');
// });
// Route::get('/home1', function () {
//     return view('/home1');
// });

Route::get('/about', function () {
    return view('/about');
});


Route::get('/all-courses', function () {
    return view('/allCourse');
});

Route::group(['prefix' => '/paid', 'namespace' => 'paid'], function () {
    Route::get('/basic-advance-autocad2d', function () {
        return view('/paidCourse/basic-advanced-autocad2d');
    });
    Route::get('/advance-autocad2d', function () {
        return view('/paidCourse/advanced-autocad2d');
    });
});

// AutoCAD Course
Route::group(['prefix' => '/autocad', 'namespace' => 'autocad'], function () {
    Route::get('/all-courses', [AutocadController::class, 'autocad_all_courses']);
    Route::get('/basic-autocad-free', [AutocadController::class, 'autocad_basic_autocad_free']);
    Route::get('/basic-autocad', [AutocadController::class, 'autocad_basic_autocad']);
    Route::get('/advance-autocad', [AutocadController::class, 'autocad_advance_autocad']);
    Route::get('/basic-autocad-3d', [AutocadController::class, 'autocad_basic_autocad_3d']);
    Route::get('/basic-sketchup-3d', [AutocadController::class, 'autocad_basic_sketchup_3d']);
});

Route::group(['prefix' => '/programming', 'namespace' => 'programming'], function () {
    Route::get('/javascript', function () {
        return view('/course-details/programming/javascript');
    });
});



Route::group(['prefix' => '/mep', 'namespace' => 'mep'], function () {
    Route::get('/hvac', [MepController::class, 'mep_hvac']);
    Route::get('/electrical', [MepController::class, 'mep_electrical']);
    Route::get('/plumbing', [MepController::class, 'mep_plumbing']);
    Route::get('/fire', [MepController::class, 'mep_fire']);
});


Route::group(['prefix' => '/graphic', 'namespace' => 'graphic'], function () {
    Route::get('/photoshop', function () {
        return view('/course-details/graphic/photoshop');
    });
    Route::get('/illustrator', function () {
        return view('/course-details/graphic/illustrator');
    });
    Route::get('/indesign', function () {
        return view('/course-details/graphic/indesign');
    });
});




// Route::get('/login', function () {
//     return view('/auth/login');
// });

// Route::get('/register', function () {
//     return view('/auth/registration');
// });


// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

