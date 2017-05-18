<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfilesTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function a_user_has_a_profile(){

    	$user = create('App\User');

    	$this->get($user->profilePath())
    		->assertSee($user->first_name);
    }

    /** @test */
    function a_user_can_add_an_instrument_to_his_profile(){
    	$this->signIn();

    	$instrument = create('App\Instrument');

    	$this->post('/instruments/' . auth()->user()->username . '/add', $instrument->toArray());

    	$this->assertEquals(1, auth()->user()->instruments()->count());
    	$this->assertTrue(auth()->user()->instruments->contains($instrument));
    }

    /** @test */
    function a_user_can_see_all_his_instruments(){
    	$this->signIn();

    	$instrument = create('App\Instrument');

    	auth()->user()->assignInstrument($instrument);

    	$this->get('/instruments/' . auth()->user()->username)
			->assertSee($instrument->name);

    }
}
