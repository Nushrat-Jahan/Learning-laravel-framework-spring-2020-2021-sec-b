<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class HomeController extends Controller
{
    public function index(Request $request){

        return view('home.index');
    }

    public function profile(Request $request)
    {
        $user = User::where('username',$request->session()->get('username'))
                    ->first();
        return view('home.profile',compact('user'));
    }
    public function editprofile(Request $request)
    {
        $user = User::where('username',$request->session()->get('username'))
                    ->first();
        return view('home.editprofile',compact('user'));
    }

    public function updateProfile(UserRequest $request)
    {
        $user = User::where('username',$request->session()->get('username'))
                    ->first();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->city             = $request->city;
        $user->country          = $request->country;
        $user->companyname      = $request->companyname;

        $user->save();
        $request->session()->flash('msg','Profile Updated Sucessfully!');
        return view('home.profile',compact('user'));

    }

}
