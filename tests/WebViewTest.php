<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Session;

class WebViewTest extends TestCase
{
    use App\Traits\TestHelper;
    
    /*首頁登入畫面確認*/
    public function testIndexLogOut()
    {
        $this->testLogout();
        $this->visit('/')
                ->see('acc')
                ->see('pss')
                ->dontSee('Whoops');
    }
    
    /*測試登入頁*/
    public function testLoginView()
    {
        $this->testLogout();
        $this->visitRoute('login')
                ->see('acc')
                ->see('pss')
                ->dontSee('Whoops');
    }

    /*測試已登入首頁*/
    public function testIndezLogin()
    {
        $this->testLogin();
        $this->visit('/')
            ->see('Laravel')
            ->dontSee('Whoops');
        $this->testLogout();
    }
    
}
