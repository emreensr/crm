<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalDataController extends Controller
{
    public function organization(){
        return view('backend.personaldata.organization');
    }
    public function clarificationtexts(){
        return view('backend.personaldata.clarificationtexts');
    }
    public function privacyagreements(){
        return view('backend.personaldata.privacyagreements');
    }
    public function expressconsent(){
        return view('backend.personaldata.expressconsent');
    }
    public function expressconsentrecords(){
        return view('backend.personaldata.expressconsentrecords');
    }
     public function datatransferrecords(){
        return view('backend.personaldata.datatransferrecords');
    }

}
