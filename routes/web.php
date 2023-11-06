<?php

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
// Route::get('/course', function () {
//     return view('/course');
// });


Route::group(['prefix' => '/autocad', 'namespace' => 'autocad'], function () {
    Route::get('/all-courses', [AutocadController::class, 'autocad_all_courses']);
    Route::get('/basic-autocad-free', [AutocadController::class, 'autocad_basic_autocad_free']);
    Route::get('/basic-autocad', [AutocadController::class, 'autocad_basic_autocad']);
    Route::get('/advance-autocad', [AutocadController::class, 'autocad_advance_autocad']);
    Route::get('/basic-autocad-3d', [AutocadController::class, 'autocad_basic_autocad_3d']);
    Route::get('/basic-sketchup-3d', [AutocadController::class, 'autocad_basic_sketchup_3d']);

   // Route::get('/all-courses', function () {
    //     return view('/course-details/all-courses/all-courses');
    // });
    // Route::get('/basic-autocad-free', function () {
    //     return view('/course-details/autocad/basic-autocad-free');
    // });
    // Route::get('/basic-autocad', function () {
    //     return view('/course-details/autocad/basic-autocad');
    // });
    // Route::get('/advance-autocad', function () {
    //     return view('/course-details/autocad/advance-autocad');
    // });
    // Route::get('/basic-autocad-3d', function () {
    //     return view('/course-details/autocad/basic-autocad-3d');
    // });
    // Route::get('/basic-sketchup-3d', function () {
    //     return view('/course-details/autocad/basic-sketchup-3d');
    // });
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




Route::get('/login', function () {
    return view('/auth/login');
});

Route::get('/register', function () {
    return view('/auth/registration');
});
