<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller {
    //

    function getData() {
        return ['name'=>'Numan', 'email'=>'numan@gmail.com', 'address'=>'Bannu, KPK'];
    }
}
