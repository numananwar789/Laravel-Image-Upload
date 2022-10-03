<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
    function operations()
    {
        return DB::table('members')
        // find min & max at a time
        ->select(DB::raw("min(id) as min_id, max(id) as max_id"))
        ->get();

        // sum ,min , max & avg by using id
        // ->sum('id');
        // ->min('id');
        // ->max('id');
        // ->avg('id');
        
        // min , max by using name
        // ->min('name');
        // ->max('name');


        // ->where('id',8)
        //->delete();

        // ->update([
        //     'name'=>'Safi',
        //     'email'=>'safi@gmail.com',
        //     'address'=>'Hinjal Nor Baz,Bannu'
        // ]);

        // ->insert([
        //     'name'=>'Safi',
        //     'email'=>'safi@gmail.com',
        //     'address'=>'Hinjal Nor Baz'
        // ]);
    }
}
