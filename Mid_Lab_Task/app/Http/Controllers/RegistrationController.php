<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index( UserRequest $req){

        $user = new User();
        $user->fullname         = $req->fullname;
        $user->username         = $req->username;
        $user->email            = $req->email;
        $user->password         = $req->password;
        //$user->confirmpassword  = $req->confirmpassword;
        $user->address          = $req->address;
        $user->companyname      = $req->companyname;
        $user->pnumber          = $req->pnumber;
        $user->type             = "active";
        $user->date_added       = "current_date";
        $user->last_update      = "null";
        $user->city             = $req->city;
        $user->country          = $req->country;
        $user->save();
        return redirect()->route('home.userlist');
    }

}
