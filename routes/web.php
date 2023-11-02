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


Route::get('/', function () {
    return view('/welcome');
});
Route::get('/home', function () {
    return view('/home');
});

Route::get('/about', function () {
    return view('/about');
});
// Route::get('/course', function () {
//     return view('/course');
// });
Route::get('/all-courses', function () {
    return view('/course-details/all-courses/all-courses');
});
Route::get('/basic-autocad-free', function () {
    return view('/course-details/autocad/basic-autocad-free');
});
Route::get('/basic-autocad', function () {
    return view('/course-details/autocad/basic-autocad');
});
Route::get('/advance-autocad', function () {
    return view('/course-details/autocad/advance-autocad');
});
Route::get('/basic-autocad-3d', function () {
    return view('/course-details/autocad/basic-autocad-3d');
});
Route::get('/basic-sketchup-3d', function () {
    return view('/course-details/autocad/basic-sketchup-3d');
});


Route::get('/javascript', function () {
    return view('/course-details/programming/javascript');
});
Route::get('/photoshop', function () {
    return view('/course-details/graphic/photoshop');
});

Route::group(['prefix' => '/mep', 'namespace' => 'mep'], function () {
    Route::get('/hvac', function () {
        return view('/course-details/mep/hvac');
    });
    Route::get('/electrical', function () {
        return view('/course-details/mep/electrical');
    });
    Route::get('/plumbing', function () {
        return view('/course-details/mep/plumbing');
    });
    Route::get('/fire', function () {
        return view('/course-details/mep/fire');
    });
});




Route::get('/login', function () {
    return view('/auth/login');
});

Route::get('/register', function () {
    return view('/auth/registration');
});