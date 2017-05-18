<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateUserTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    function a_user_can_activate_his_account(){
        $user = create('App\User', ['token' => 'myspecialtoken']);

        $this->assertFalse(!! $user->active);
        
        $this->get('/profiles/' . $user->username . '/activate/' . $user->token);

        $this->assertTrue(!! $user->fresh()->active);

        $this->assertEquals(null, $user->fresh()->token);
    }
}
