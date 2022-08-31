<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index(){
        return view('Student');

    }
}

// class TestController extends Controller
// {
//     //
//     function getByurl($name,$num){
//         // return view('Student');
//         // dd($request);
//         $data = [$name, $num];
//         dd($data);

//     }
// }
