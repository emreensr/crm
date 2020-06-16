<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandController extends Controller
{
    public function leave(){
        return view('backend.demand.leave');
    }
    public function vehicle(){
        return view('backend.demand.vehicle');
    }
    public function generaldemand(){
        return view('backend.demand.generaldemand');
    }
    public function permissionapproval(){
        return view('backend.demand.permissionapproval');
    }
    public function vehicleapproval(){
        return view('backend.demand.vehicleapproval');
    }
     public function generaldemandapproval(){
        return view('backend.demand.generaldemandapproval');
    }

}
