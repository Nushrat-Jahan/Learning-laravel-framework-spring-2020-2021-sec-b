<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function index(){

        return view('login.index');
    }

    public function verify(Request $req){



    }
}
