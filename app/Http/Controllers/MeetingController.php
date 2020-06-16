<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function meeting(){
        return view('backend.meeting.meeting');
    }
    public function roomapproval(){
        return view('backend.meeting.roomapproval');
    }
    public function meetingttracing(){
        return view('backend.meeting.meetingttracing');
    }
    public function discount(){
        return view('backend.meeting.discount');
    }
    public function room(){
        return view('backend.meeting.room');
    }
    public function roompanel(){
        return view('backend.meeting.roompanel');
    }
    public function discountplace(){
        return view('backend.meeting.discountplace');
    }

    public function discountplacepanel(){
        return view('backend.meeting.discountplacepanel');
    }


}
