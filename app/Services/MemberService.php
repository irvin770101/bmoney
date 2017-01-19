<?php
namespace App\Services;

use App\Repositories\MemberRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class MemberService
{
    private $memberRep;
    
    public function __construct(MemberRepository $memberRep)
    {
        $this->memberRep = $memberRep;
    }
    
    /*
     * 登入帳號密碼確認
     *  @parame String  $acc    帳號
     * @parame  Strin   $pss    密碼
     */
    public function checkLogin($acc, $pss)
    {
        $member = $this->memberRep->findByAccount($acc);
        if(is_null($member))
        {
            return false;
        }
        
        if (Hash::check('asd', $member->password)) 
        {
            $sessionData = [
                'member' => [
                    'id' => $member->id,
                    'nickName' => $member->nick_name,
                    'eMail' => $member->email,
                    'account' => $member->account
                ]
            ];
            session()->put($sessionData);

            return true;
        }

        
        return false;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

