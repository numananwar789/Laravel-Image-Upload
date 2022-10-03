<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    function index(Request $req)
    {
        //
        return $path = $req->file->storeAs('images', 'Development Mode.svg');

        // Giving Custom Name to file
        // return $path = $req->file->storeAs('images', 'Development Mode.png');

        // Random Name Method
        // return $req -> file('file') -> store('images');

    }
}