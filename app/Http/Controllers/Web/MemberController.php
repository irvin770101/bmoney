<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\Web\LoginCheck;
use App\Http\Requests\Web\RegisterCheck;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Hash;
use App\Services\MemberService;

class MemberController extends Controller
{
    private $memberSer;
    
    public function __construct(MemberService $memberSer)
    {
        $this->memberSer = $memberSer;
    }
    
    /*會員登入*/
    public function loginCheck(LoginCheck $request)
    {

        $account = $request->input('acc');     //帳號
        $pssworld = $request->input('pss');  //密碼
        $isLogin = $this->memberSer->checkLogin($account , $pssworld);
        if($isLogin ===true)
        {
            return '登入成功'; 
        }
        
    }
    
    /**
     * 註冊會員
     */
    public function registerSave(RegisterCheck $request){
        
    }
}
