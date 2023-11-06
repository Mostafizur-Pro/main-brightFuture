<?php

namespace App\Http\Controllers\courseList;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MepController extends Controller
{
    public function mep_hvac()
    {
        $hvacJson = file_get_contents(storage_path('courseJson\mep\hvac.json'));
        $hvac = json_decode($hvacJson, true);
        // dd($hvac);
        return view('/course-details/mep/hvac', ['hvac' => $hvac]);
        
    }

    public function mep_electrical()
    {
        return view('/course-details/mep/electrical');
    }

    public function mep_plumbing()
    {
        $plumbingJson = file_get_contents(storage_path('courseJson\mep\plumbing.json'));
        $plumbing = json_decode($plumbingJson, true);
        // dd($plumbing);
        return view('/course-details/mep/plumbing', ['plumbing' => $plumbing]);
        
    }

    
    public function mep_fire()
    {
        return view('/course-details/mep/fire');
    }
}
