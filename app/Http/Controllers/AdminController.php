<?php

namespace App\Http\Controllers;


use App\admin;
use App\employee;
use App\Models\User\User as UserUser;
use App\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\PseudoTypes\True_;

class AdminController extends Controller
{
    //
public function adminLogin(){


    return view('Adminlogin');

}


public function validateUser(Request $request){

    if(isset($_POST['username']) && isset($_POST['password'])){

        $username =  $request -> username;
        $pass =  $request -> password;

      
        $user = admin::where('username', $username)->where('password', $pass)->first();

        if ($user == True) {

            return redirect('display');
        }

        else{

            return redirect('login');
        }
}

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
return redirect('display');

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
    $emp = employee::find($id); // filter by primary key
    
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
