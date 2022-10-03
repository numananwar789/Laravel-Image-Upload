<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller {
    //

    function index( Member $key ) {

        return $key;

        //code for one to many function data fetching
        //return Member::find( 2 )->companyData2;
    }
}
