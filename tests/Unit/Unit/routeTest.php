<?php

namespace Tests\Unit;

use Tests\TestCase;

class routeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_registerRoute()
    {
        $response=$this->get('/register');
        $response->assertStatus(200);
    }

    public function test_home_route(){

        $response=$this->get('/home');
        $response->assertStatus(302);
    }

    
    public function test_addmenu_route(){
        $response=$this->get('/add_menu');
        $response->assertStatus(200);
    }
}
