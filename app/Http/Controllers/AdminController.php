<?php

namespace App\Http\Controllers;

use App\employee;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
public function login(){

    return view('login');

}

public function add(){

    return view('add');
}

public function addEmployee(Request $request){

//    dd($request -> all());
$employee = new employee();

$this -> validate($request,[

    'nic' => 'required',
]);

$employee -> fname = $request -> fname;
$employee -> lname = $request -> lname; 
$employee -> contact = $request -> phone; 
$employee -> NIC = $request -> nic; 
$employee -> save();

}


public function display(){

    $employees = employee::all();

    // dd($employees);

    return view('display') -> with('employee',$employees);

}

public function viewProfile($id){

    $emp=employee::find($id);
    return view('view') -> with('employee',$emp);

}


public function updateEmployee(Request $request){

    $id = $request -> eid;
    $emp = employee::find($id);
    
    $this -> validate($request,[
    
        'nic' => 'required',
    ]);
    
    $emp -> fname = $request -> fname;
    $emp -> lname = $request -> lname; 
    $emp -> contact = $request -> phone; 
    $emp -> NIC = $request -> nic; 
    $emp -> save();

    return redirect('display');
    
    }


    
public function deleteEmployee($id){

    $emp=employee::find($id);
    $emp -> delete();
    return redirect('display');

}

}
