<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index( Request $req){

    }

    public function show($id){

    }
    public function create(){

    }

    public function store(UserRequest $req){


    }

    public function edit($id){



    }


    public function update($id, Request $req){


    }

    public function delete($id, Request $req){

        $user = User::find($id);
        return view('home.delete')->with('user', $user);

    }

    public function destroy($id, Request $req){


        if(User::destroy($id)){
            return redirect('/home/userlist');
        }else{
            return redirect('/home/delete/'.$id);
        }
    }

    public function userlist(){

    }


}
