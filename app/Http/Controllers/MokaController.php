<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MokaController extends Controller
{
    public function home(){
        //
        return view('Home');
    }
    public function login(){
        //
        return view('login');
    }
}
