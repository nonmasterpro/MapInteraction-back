<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUser()
    {
        $this->json('POST', '/api/users',
            [
                'name' => 'Sally',
                'email' => 'Sally@mail.com',
                'password' => '123456',
                'roleName' => 'Admin'
            ])
             ->seeJson([
                 "email" => "Sally@mail.com",
                 "name" => "Sally",
                 "roleName" => "Admin"
             ])
             ->assertResponseStatus(200);
    }

    public function testGetUser()
    {
        $this->json('GET', '/api/users/1')
             ->seeJson([
                 "email" => "non@non.com",
                 "name" => "Teerapong Boonmark",
                 "roleName" => "admin"
             ])
             ->assertResponseStatus(200);
    }

    public function testEditUser()
    {
        $this->json('PUT', '/api/users/1',
            [
                 "email" => "teerapong@mail.com",
                 "name" => "Teerapong Boonmark",
                 "roleName" => "admin"
            ])
             ->seeJson([
                 "email" => "teerapong@mail.com",
                 "name" => "Teerapong Boonmark",
                 "roleName" => "admin"
             ])
             ->assertResponseStatus(200);
    }
}
