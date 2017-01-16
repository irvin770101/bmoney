<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\Web\LoginCheck;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Hash;

class MemberController extends Controller
{
    
    /*會員登入*/
    public function loginCheck(LoginCheck $request)
    {
        $account = $request->input('acc');     //帳號
        $pssworld = $request->input('pss');  //密碼
        
    }
}
