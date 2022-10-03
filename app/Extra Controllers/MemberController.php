<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    // function addData(Request $req)
    // {
    //     $member = new Member;
    //     $member -> name = $req -> name;
    //     $member -> email = $req -> email;
    //     $member -> address = $req -> address;
    //     $member -> save();
    //     return redirect('add');
    // }

    function list()
    {
        // for all data
        // $data = Member::all();

        // for some data
        // $data = Member::paginate(2);
        // return view('list', ['members' => $data]);

        $data = Member::all();
        return view('list', ['members' => $data]);
    }

    function delete($id)
    {
        $data = Member::find($id);
        $data -> delete();
        return redirect('list');
    }

    function showData($id)
    {
        $data = Member::find($id);
        return view('edit',['data' => $data]);
    }
    
    function update(Request $req)
    {
        $data = Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data-> save();
        return redirect('list');
    }
}
