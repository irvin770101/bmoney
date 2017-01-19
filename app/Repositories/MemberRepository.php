<?php
namespace App\Repositories;

use App\Models\Member;

class MemberRepository
{
    
    private $model;
    
    public function __construct(Member $member)
    {
        $this->model = $member;
    }
    
        /**
            依帳號取得會員資料
     */
    public function findByAccount($acc)
    {
        return $this->model->where('account', $acc)->get()->first();
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

