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
     public function databreachnotification(){
        return view('backend.personaldata.databreachnotification');
    }
    public function tests(){
        return view('backend.personaldata.tests');
    }
    public function devices(){
        return view('backend.personaldata.device');
    }
    public function devicedebit(){
        return view('backend.personaldata.devicedebit');
    }
    public function softwarelicenses(){
        return view('backend.personaldata.softwarelicenses');
    }
     public function passwords(){
        return view('backend.personaldata.passwords');
    }

}
