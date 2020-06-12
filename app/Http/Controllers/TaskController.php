<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function workinginfo(){
        return view('backend.taskandproject.workinginfo');
    }
       public function task(){
        return view('backend.taskandproject.task');
    }

   public function project(){
        return view('backend.taskandproject.project');
    }
    public function projectrealization(){
        return view('backend.taskandproject.projectrealization');
    }
    public function repetitivetask(){
        return view('backend.taskandproject.repetitivetask');
    }




}
