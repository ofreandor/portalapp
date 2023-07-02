<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Faculty;
use App\Models\Department;

class FrontendController extends Controller
{
    //

    public function index()
    {
        // code...

        return view('frontend.index');
    }


    public function studentRegistration(){

        $schools = School::all();

        $faculties = Faculty::all();

        return view('frontend.registration', compact('schools', 'faculties'));
    }


    public function getDepartments($id){

        
          $departments = Department::where('faculty_id', $id)->get();


        return json_encode($departments);
        
        
    }



    public function processRegistration(Request $request){
        
    }


}
