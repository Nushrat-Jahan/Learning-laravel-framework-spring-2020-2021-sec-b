<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use App\Accountant;
use App\Admin;
use App\Vendor;
use Validator;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function index(){

        return view('login.index');
    }

    public function verify(LoginRequest $req){

        $Cuser = DB::table('customers')
                    ->where('password', $req->password)
                    ->where('email',$req->email)
                    ->get();

        $Auser = DB::table('admins')
                    ->where('password', $req->password)
                    ->where('email',$req->email)
                    ->get();

        $Vuser = DB::table('vendors')
                    ->where('password', $req->password)
                    ->where('email',$req->email)
                    ->get();

        $Accuser = DB::table('accountants')
                    ->where('password', $req->password)
                    ->where('email',$req->email)
                    ->get();

        if($req->email == "" || $req->password == ""){
           $req->session()->flash('msg', 'null email or password...');
           return redirect('/login');

        }
        elseif(count($Cuser)>0){

           $req->session()->put('email', $req->email);
           $req->session()->put('utype', "customer");
            return redirect('/home');
        }
        elseif(count($Auser)>0){

            $req->session()->put('email', $req->email);
            $req->session()->put('utype', "admin");
             return redirect('/home');
         }
        elseif(count($Vuser)>0){

            $req->session()->put('email', $req->email);
            $req->session()->put('utype', "vendor");
             return redirect('/home');
         }
         elseif(count($Accuser)>0){
            $req->session()->put('email', $req->email);
            $req->session()->put('utype', "accountant");
             return redirect('/home');
         }
        else{

            $req->session()->flash('msg', 'Invalid email or password...');
            return redirect('/login');
        }


    }
}
