<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testLoggedIn()
    {
        $response = $this->get("/home");
        
        $response->assertStatus(302);
    }

    public function testAuthorRoute()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user); //You are now authenticated

        $response = $this->json('get', '/authors');

        $response->assertStatus(200);
    }
}
