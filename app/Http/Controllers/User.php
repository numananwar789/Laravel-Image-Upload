<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller {
    //

    function getData( Request $request ) {
        return $request->input();
    }
}
