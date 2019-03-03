<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTests extends TestCase
{
    // use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */

    public function testUserEmail()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'test@test.com'
        ]);
    }
    
    public function testAuthorName()
    {
        $this->assertDatabaseHas('authors', [
            'name' => 'Toni Morrison'
        ]);
    }

}
