<?php

namespace App\Http\Controllers\courseList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutocadController extends Controller
{
    public function autocad_all_courses(){
        return view('/course-details/all-courses/all-courses');
    }
    public function autocad_basic_autocad_free(){
        return view('/course-details/autocad/basic-autocad-free');
    }


    public function autocad_basic_autocad(){
        $basicAutoCADJson = file_get_contents(storage_path('courseJson\autocad\basicAutocad.json'));
        $basicAutoCAD = json_decode($basicAutoCADJson, true);
        // dd($basicAutoCAD);
        return view('/course-details/autocad/basic-autocad', ['basicAutoCAD' => $basicAutoCAD]);
        
    }


    public function autocad_advance_autocad(){
        return view('/course-details/autocad/advance-autocad');
    }
    public function autocad_basic_autocad_3d(){
        return view('/course-details/autocad/basic-autocad-3d');
    }
    public function autocad_basic_sketchup_3d(){
        return view('/course-details/autocad/basic-sketchup-3d');
    }
}



