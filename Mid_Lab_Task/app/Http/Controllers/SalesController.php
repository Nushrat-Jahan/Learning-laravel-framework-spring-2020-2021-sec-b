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


    public function store(){

        return view('system.sales.store');
    }


    public function media(){

        return view('system.sales.media');
    }


    public function ecommerce (){

        return view('system.sales.ecommerce');
    }

}
