<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class MemberController extends Controller
{
    
    /*會員登入*/
    public function login(){
        $a = Hash::make('asd');
        dd($a);
//        return view('web/login');
    }
}
