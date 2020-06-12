<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualityController extends Controller
{

    public function docapplication(){
        return view('backend.quality.docapplication');
    }

    public function doctracking(){
        return view('backend.quality.doctracking');
    }

    public function handbook(){
        return view('backend.quality.handbook');
    }

    public function policies(){
        return view('backend.quality.policies');
    }

    public function processes(){
        return view('backend.quality.processes');
    }
    public function procedure(){
        return view('backend.quality.procedure');
    }
    public function form(){
        return view('backend.quality.form');
    }

     public function instructions(){
            return view('backend.quality.instructions');
        }
    public function rootcauseanalysis(){
            return view('backend.quality.rootcauseanalysis');
        }


}
