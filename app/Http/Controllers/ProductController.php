<?php

namespace App\Http\Controllers;

use App\Product;
use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
        $product=DB::table('product')->get();

        return view('backend.product_list')->with('product',$product);
    }


    public function add_product(){
        return view('backend.add_product');
    }

    public function insert(Request $request){
        $product = new Product();
        $product->name= $request->input('name');
        $product->version= $request->input('version');
        $product->release_date= $request->input('release_date');
        $product->notes= $request->input('release_notes');


        if($request->hasFile('setup_file')) {
            $file = $request->file('setup_file');
            $name=$file->getClientOriginalName();

            $store=Storage::disk('do')->put('/public/images/'.$name,file_get_contents($request->file('setup_file')->getRealPath()),
                'public');

        }


        if($request->hasFile('user_manual')) {
            $file = $request->file('user_manual');
            $name=$file->getClientOriginalName();

            $store=Storage::disk('do')->put('/public/images/'.$name,file_get_contents($request->file('user_manual')->getRealPath()),
                'public');

        }

        $product->save();
        return redirect('product_list');


    }


    public function product_view(Request $request){
        $id= $request->id;
        $product = Product::find($id);
        return view('backend.product_view', compact('product'));
    }



    public function product_list(){
        return view('backend.product_list');
    }



    public function product_edit(Request $request){
        $id= $request->id;
        $product = Product::find($id);


        return view('backend.product_edit',compact('product'));
    }

    public function product_editpost(Request $request){
        $id = $request->id;
        $product= Product::find($id);
        $product->name= $request->input('name');
        $product->version= $request->input('version');
        $product->release_date= $request->input('release_date');
        $product->notes= $request->input('release_notes');


        if($request->hasFile('setup_file')) {
            $filenameWithExt = $request->file('setup_file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('setup_file')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('setup_file')->storeAs('/public/images/', $fileNameToStore);
            $product->setup_file = $fileNameToStore;
        }


        if($request->hasFile('user_manual')) {
            $filenameWithExt = $request->file('user_manual')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('user_manual')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('user_manual')->storeAs('/public/images/', $fileNameToStore);
            $product->user_manual = $fileNameToStore;
        }
        $product->save();

        return redirect()->action('StaffController@index');
    }

        public function product_delete(Request $request)  {
            $id= $request->id;
            DB::table('product')
                ->delete($id);
            return redirect()->action('ProductController@index');
        }



}
