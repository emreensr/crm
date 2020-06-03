<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function index(){
        $user=DB::table('staff')->get();

        return view('backend.user_list')->with('user',$user);
    }


    public function user_add(){
        return view('backend.user_add');
    }

    public function insert(Request $request){
        $user = new Staff();
        $user->username= $request->input('username');
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->status= $request->input('status');
        $user->role= $request->input('role');
        $user->company= $request->input('company');
        $user->birthdate= $request->input('birthdate');
        $user->age= $request->input('age');
        $user->mobile= $request->input('mobile');
        $user->position= $request->input('position');
        $user->office= $request->input('office');
        $user->startdate= $request->input('startdate');
        $user->website= $request->input('website');
        $user->postcode= $request->input('postcode');
        $user->gender= $request->input('gender');
        $user->address= $request->input('address');
        $user->city= $request->input('city');
        $user->state= $request->input('state');
        $user->country= $request->input('country');
        $user->twitter= $request->input('twitter');
        $user->facebook= $request->input('facebook');
        $user->instagram= $request->input('instagram');

        if($request->hasFile('avatar')) {
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar')->storeAs('/public/images/', $fileNameToStore);
            $user->photo = $fileNameToStore;
        }

        $user->save();
        return redirect('user_list');


    }


    public function user_view(Request $request){
        $id= $request->id;
        $users = Staff::find($id);
        return view('backend.user_view', compact('users'));
    }



    public function user_list(){
        return view('backend.user_list');
    }



    public function user_edit(Request $request){
        $id= $request->id;
        $users = Staff::find($id);
        return view('backend.user_edit',compact('users'));
    }

    public function user_editpost(Request $request){
        $id = $request->id;
        $user= Staff::find($id);
        $user->username= $request->input('username');
        $user->name= $request->input('name');
        $user->email= $request->input('email');
        $user->status= $request->input('status');
        $user->role= $request->input('role');
        $user->company= $request->input('company');
        $user->birthdate= $request->input('birthdate');
        $user->age= $request->input('age');
        $user->mobile= $request->input('mobile');
        $user->position= $request->input('position');
        $user->office= $request->input('office');
        $user->startdate= $request->input('startdate');
        $user->website= $request->input('website');
        $user->postcode= $request->input('postcode');
        $user->gender= $request->input('gender');
        $user->address= $request->input('address');
        $user->city= $request->input('city');
        $user->state= $request->input('state');
        $user->country= $request->input('country');
        $user->twitter= $request->input('twitter');
        $user->facebook= $request->input('facebook');
        $user->instagram= $request->input('instagram');

        if($request->hasFile('avatar')) {
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('avatar')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('avatar')->storeAs('/public/images/', $fileNameToStore);
            $user->photo = $fileNameToStore;
        }

        $user->save();

        return redirect()->action('StaffController@index');
    }

        public function user_delete(Request $request)  {
            $id= $request->id;
            DB::table('staff')
                ->delete($id);
            return redirect()->action('StaffController@index');
        }



}
