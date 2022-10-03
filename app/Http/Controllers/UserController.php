<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller {
    //

    // function show( $id ) {
    //     return $id;
    // }

    // function loadView( $user ) {
    //     $data = ['numan', 'safi', 'baqir'];
    //     return view( 'users-page', ['names'=>$data] );
    // }

    // function index() {
    //     return DB::select( 'select * from users' );
    // }

    function index( Request $request ) {
        $user = User::where( 'email', $request->email )->first();
        // print_r( $data );
        if ( !$user || !Hash::check( $request->password, $user->password ) ) {
            return response( [
                'message' => ['These credentials do not match our records.']
            ], 404 );
        }

        $token = $user->createToken( 'my-app-token' )->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response( $response, 201 );
    }
}