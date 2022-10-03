<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class Member extends Controller {

    //

    function index( Request $req ) {

        return Members::find( 3 ) -> companyData;

        // Showing all members from database
        // return Members::all();

        //Mutators Code
        // $member = new Members;
        // $member -> name = 'Amjid';
        // $member -> email = 'amjid@gmail.com';
        // $member -> address = 'Norang';
        // $member -> save();
    }
}
