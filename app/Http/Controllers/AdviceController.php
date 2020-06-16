<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdviceController extends Controller
{
        public function myadvices(){
            return view('backend.advices.myadvices');
        }
         public function advices(){
            return view('backend.advices.advices');
        }
         public function adviceevaluation(){
                return view('backend.advices.adviceevaluation   ');
        }
        public function award(){
                return view('backend.advices.award');
        }


}
