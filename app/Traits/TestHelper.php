<?php

namespace App\Traits;

trait TestHelper
{
    
    /*  測試模式登入 */
   public function testLogin()
   {
        $sessionData = [
            'member' => [
                'id' => 1,
                'nickName' => 'irvin',
                'eMail' => 'irvin770101@gmail.com',
                'account' => 'irvin770101@gmail.com'
            ]
        ];
        
        session()->put($sessionData);
   }
   
   /*   測試模式登出    */
   public function testLogout()
   {
       
       session()->forget('member');
       
   }

}
