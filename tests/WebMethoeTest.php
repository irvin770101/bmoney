<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Repositories\MemberRepository;

class WebMethoeTest extends TestCase
{
    
    protected $mock;
    protected $target;

        /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->mock = $this->initMock(MemberRepository::class);
//        $this->target = $this->app->make(UserController::class);
    }

    
        /**
         * Clean up the testing environment before the next test.
         *
         * @return void
         */
        public function tearDown()
        {
            $this->target = null;
            $this->mock = null;
            parent::tearDown();
        }    

    /*  測試登入成功    */
    public function testloginCheck()
    {
        $url = route('loginCheck');
        
        $expected =
           [
	'id' => 'oomusou', 
	'nick_name' => 'jason', 
	'account' => 'jason', 
	'password' => 'bbb', 
	'email' => 'irvin770101@gmail.com'
            ];       
        
        $this->mock->shouldReceive('findByAccount')
            ->once()
            ->withAnyArgs()
            ->andReturn((object)$expected);
        
        $postData = [
            'acc' => 'jason',
            'pss' => 'bbb'
        ];
        
        $this->post($url, $postData, [])
                ->see('登入成功')
                ->dontSee('Whoops');
        
        $this->testLogout();
    }
}
