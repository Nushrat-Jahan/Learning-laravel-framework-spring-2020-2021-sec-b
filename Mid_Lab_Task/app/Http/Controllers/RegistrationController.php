<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{

    public function index(){

        return view('registration.index');
    }

    public function verify(RegistrationRequest $req){
        $user = new Customer();
        $user->fullname         = $req->fullname;
        $user->username         = $req->username;
        $user->email            = $req->email;
        $user->password         = $req->password;
        $user->address          = $req->address;
        $user->companyname      = $req->companyname;
        $user->pnumber          = $req->pnumber;
        $user->user_type        = "active";
        $user->city             = $req->city;
        $user->country          = $req->country;
        $user->save();
        $req->session()->flash('msg','Account created successfully!');
        return redirect()->route('login');

    }
}
