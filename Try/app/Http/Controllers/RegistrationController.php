<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{

    public function index(){

        return view('registration.index');
    }

    public function verify(Request $req){



    }
}
