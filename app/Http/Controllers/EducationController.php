<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function education(){
        return view('backend.education.education');
    }
    public function educationplan(){
        return view('backend.education.educationplan');
    }
    public function educationinfo(){
        return view('backend.education.educationinfo');
    }
    public function personaledu(){
        return view('backend.education.personaledu');
    }
 public function yeareducation(){
        return view('backend.education.yeareducation');
    }


}
