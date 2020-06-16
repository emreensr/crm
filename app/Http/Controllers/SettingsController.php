<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function company(){
        return view('backend.settings.company');
    }
      public function title(){
        return view('backend.settings.title');
    }
    public function staff(){
        return view('backend.settings.staff');
    }
    public function authoritygroup(){
        return view('backend.settings.authoritygroup');
    }
    public function userauthorization(){
            return view('backend.settings.userauthorization');
        }

}
