<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index( UserRequest $req){
        return view('registration.index');
    }
    public function verify( UserRequest $req){

        $user = new Customer();
        $user->fullname         = $req->fullname;
        $user->username         = $req->username;
        $user->email            = $req->email;
        $user->password         = $req->password;
        $user->address          = $req->address;
        $user->companyname      = $req->companyname;
        $user->pnumber          = $req->pnumber;
        $user->type             = "active";
        $user->date_added       = date('Y-m-d');;
        $user->last_update      = "null";
        $user->city             = $req->city;
        $user->country          = $req->country;
        $user->save();
        $req->session()->flash('msg','Account created successfully!');
        return redirect()->route('login');
    }

}
