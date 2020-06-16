<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function visitinfo(){
        return view('backend.visitors.visitinfo');
    }
   public function visitorscode(){
        return view('backend.visitors.visitorscode');
    }
    public function bannedvisitor(){
        return view('backend.visitors.bannedvisitor');
    }
    public function vipvisitor(){
        return view('backend.visitors.vipvisitor');
    }
    public function callpointmessages(){
        return view('backend.visitors.callpointmessages');
    }
  public function visitorspanel(){
        return view('backend.visitors.visitorspanel');
    }

}
