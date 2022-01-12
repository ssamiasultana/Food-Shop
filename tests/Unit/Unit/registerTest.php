<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class registerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
     public function test_new_user()
    {
         $response=$this->post('/register',[
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'email_verified_at'=>'admin@gmail.com',
        'password'=>'12345678'
         
         ]);
         $response->assertRedirect('/home');
        
     }
    
}
