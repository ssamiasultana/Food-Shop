<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class userTest extends TestCase
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
    public function test_login_form()
    {
        $response=$this->get('/login');
        $response->assertStatus(200);
    }
    public function test_database(){
        $this->assertDatabaseHas('users',[
            'name'=>'Samia'
        ]);

    }
    // public function test_seed(){
    //     $this->seed();
    // }

    
}

