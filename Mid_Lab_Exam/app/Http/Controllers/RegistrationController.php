<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RegistrationRequest;

class RegistrationController extends Controller
{

    public function index(){

        return view('registration.index');
    }

    public function verify(RegistrationRequest $req){
        $user = new User();
        $user->name         = $req->name;
        $user->username         = $req->username;
        $user->password         = $req->password;
        $user->email            = $req->email;
        $user->address          = $req->address;
        $user->user_type        = $req->user_type;
        $user->city             = $req->city;
        $user->country          = $req->country;
        $user->companyname          = $req->companyname;
        $user->save();
        $req->session()->flash('msg','Account created successfully!');
        return redirect()->route('login');

    }
}
