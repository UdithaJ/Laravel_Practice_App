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
$employee -> fname = $request -> fname;
$employee -> lname = $request -> lname; 
$employee -> contact = $request -> phone; 
$employee -> NIC = $request -> nic; 
$employee -> save();

}

}
