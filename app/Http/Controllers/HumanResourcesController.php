<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanResourcesController extends Controller
{
    public function identity(){
        return view('backend.humanresources.identity');
    }
    public function working(){
        return view('backend.humanresources.working');
    }
  public function personal(){
        return view('backend.humanresources.personal');
    }
public function education(){
        return view('backend.humanresources.education');
    }
    public function jobapplication(){
        return view('backend.humanresources.jobapplication');
    }
 public function permission(){
        return view('backend.humanresources.permission');
    }
 public function contunity(){
        return view('backend.humanresources.contunity');
    }
    public function healthreport(){
        return view('backend.humanresources.healthreport');
    }
    public function shift(){
        return view('backend.humanresources.shift');
    }

}
