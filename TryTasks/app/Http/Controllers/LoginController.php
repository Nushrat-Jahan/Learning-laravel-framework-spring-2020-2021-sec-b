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
           $req->session()->put('username', $Cuser->username);
           return view('user.customer');
        }
        elseif(count($Auser)>0){

            $req->session()->put('email', $req->email);
            $req->session()->put('utype', "admin");
            $req->session()->put('username', $Auser->username);
            return redirect('user.admin');
        }
        elseif(count($Vuser)>0){

            $req->session()->put('email', $req->email);
            $req->session()->put('utype', "vendor");
            $req->session()->put('username', $Vuser->username);
            return redirect('user.vendor');
        }
        elseif(count($Accuser)>0){
            $req->session()->put('email', $req->email);
            $req->session()->put('utype', "accountant");
            $req->session()->put('username', $Accuser->username);
            return redirect('user.accountant');
         }
        else{

            $req->session()->flash('msg', 'Invalid email or password...');
            return redirect('/login');
        }


    }
}
