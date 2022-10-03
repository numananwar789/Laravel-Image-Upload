<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// use App\Models\User;

class UserController extends Controller
{
    //
    // function getData(){
    //     return User::all();
    // }

    // function index(){
    //     $data = Http::get("https://reqres.in/api/users?page=1");
    //     return view('users',['collection'=>$data['data']]);
    // }
    function testRequest(Request $req){

        return $req->input();

    }
}
