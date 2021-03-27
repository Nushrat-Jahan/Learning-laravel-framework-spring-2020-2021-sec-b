<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(Request $req){

        $user = DB::table('users')
                    ->where('password', $req->password)
                    ->where('username',$req->username)
                    ->get();

        if($req->username == "" || $req->password == ""){
           $req->session()->flash('msg', 'null username or password...');
           return redirect('/login');

        }
        elseif(count($user)>0){
            $user = User::where('username',$req->session()->get('username'))
                    ->first();
            $req->session()->put('username', $req->username);

            return view('home.index');

        }
        else{

            $req->session()->flash('msg', 'Invalid username or password...');
            return redirect('/login');
        }


    }
}
