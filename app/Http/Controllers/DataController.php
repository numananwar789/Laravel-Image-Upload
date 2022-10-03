<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Employee;

class DataController extends Controller {

    // Getting all data from database using API
    // function dataList( $id ) {
    //     return Employee::all();
    // }

    // Getting data from database using params in API
    // function dataList( $id = null ) {
    //     return $id ? Employee::find( $id ): Employee::all();
    // }

    // Adding data in database using post method

    function add( Request $req ) {
        $employee = new Employee;
        $employee -> name = $req -> name;
        $employee -> email = $req -> email;
        $result = $employee -> save();
        if ( $result ) {
            return ['Result'=>'Data has been saved'];
        } else {
            return ['Result'=>'Saving Operation Failed'];
        }
    }

    // Updating data in database using put method

    function update( Request $req ) {
        $employee = Employee::find( $req ->id );
        $employee -> name = $req -> name;
        $employee -> email = $req -> email;
        $result = $employee -> save();
        if ( $result ) {
            return ['Result'=>'Data has been updated'];
        } else {
            return ['Result'=>'Updation Operation Failed'];
        }
    }

    // Deleting data from database using delete method

    function delete( $id ) {
        $employee = Employee::find( $id );
        $result = $employee -> delete();
        if ( $result ) {
            return ['Result'=>'has been deleted'];
        } else {
            return ['Result'=>'Delete Operation Failed'];
        }
    }

    // Searching data in database using delete method

    function search( $name ) {
        $result = Employee::where( 'name', 'like', '%'.$name.'%' )->get();
        if ( count( $result ) > 0 ) {
            return $result;
        } else {
            return ['Message' => 'No Data Found'];
        }
    }

    // Validate data

    function testData( Request $req ) {
        $rules = array(
            'name'=>'required',
            'email'=>'required'
        );

        $validator = Validator::make( $req->all(), $rules );
        if ( $validator->fails() ) {
            return response() -> json( $validator->errors(), 401 );
        } else {
            $employee = new Employee;
            $employee -> name = $req -> name;
            $employee -> email = $req -> email;
            $result = $employee -> save();
            if ( $result ) {
                return ['Result'=>'Data has been saved'];
            } else {
                return ['Result'=>'Saving Operation Failed'];
            }
        }
    }

}