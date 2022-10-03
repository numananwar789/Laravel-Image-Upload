<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;

class FileUploadController extends Controller
{
    function upload(Request $request) {

        $name = $request -> file('image')->getClientOriginalName();
        
        $request -> file('image')->storeAs('public/', $name);
        $photo = new FileUpload;
        $photo -> name = $name;
        $photo -> save();

        // $request -> file('image')->storeAs('/public/images', $name);
        // $product = new FileUpload();
        // $product -> image = $name;
        // $product -> save();

        return redirect('/');

        // return redirect('/');

        // if ($request -> hasfile('image')){
        //     $file = $request -> file('image');
        //     // $extension = $file -> getClientOriginalExtension();
        //     // $filename = time(). '.' .$extension;
        //     $filename = $file -> getClientOriginalName();
        //     // $file -> store('uploads');
        //     $file -> move('../uploads/images', $filename);
        //     $product -> image = $filename;
        // }
        // $product -> save();
        // return redirect('/');
    }
    
    function list(){
        $products = FileUpload::all();
        return view('list',compact('products'));
    }
}
