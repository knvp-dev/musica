<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateBandTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function a_authenticated_user_can_create_a_new_band(){
    	$this->signIn();

    	$band = make('App\Band');

    	$response = $this->post('/bands', $band->toArray());

		$this->assertDatabaseHas('bands', ['name' => $band->name]);
    }
}
