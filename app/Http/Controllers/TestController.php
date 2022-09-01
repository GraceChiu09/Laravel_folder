<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function index(){
        // return view('Student');
        
        // foreach (Students::all() as $students) {
        //     echo $students->name . "<br>";
        //     echo $students->chinese . "<br>";
        //     echo $students->english . "<br>";
        // }


        $data = Students::all();
        return view('students.index',['data' => $data]);
        // return view('Student');
        
    }

    function create(){
        return view('students.create');
    }

    function store(Request $request){
        // return view('students.create');
        // dd('store OK');
        // $students = Students::create($request() -> all());
        // dd($request->all());
        
        $students = new Students();
 
        $students->id = $request->id;
        $students->name = $request->name;
        $students->chinese = $request->chinese;
        $students->english = $request->english;
        $students->math = $request->math;
        $students->music = $request->music;
 
        $students->save();

        return redirect()->route('students.index');
    }

    function edit($id){
        dd($id);
        // return view('students.create');
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
