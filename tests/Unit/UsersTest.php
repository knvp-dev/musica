<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function a_user_can_play_many_instruments(){
    	$this->signIn();

    	$instrument = create('App\Instrument');
    	auth()->user()->assignInstrument($instrument);

    	$this->assertDatabaseHas('instrument_user',
    		['instrument_id' => $instrument->id, 'user_id' => auth()->id()]
    	);
    }

    /** @test */
    function a_user_can_be_owner_of_many_bands(){
        $this->signIn();

        create('App\Band', ['owner_id' => auth()->id()]);
        create('App\Band', ['owner_id' => auth()->id()]);

        $this->assertCount(2, auth()->user()->bands);

    }

    /** @test */
    function a_user_can_have_many_band_memberships(){
    	$this->signIn();

    	$user = auth()->user();

    	$millencolin = create('App\Band');
    	$deadconvicts = create('App\Band');

        $membership1 = create('App\Bandmembership', 
            ['user_id' => $user->id, 'band_id' => $millencolin->id]
        );

        $membership2 = create('App\Bandmembership', 
            ['user_id' => $user->id, 'band_id' => $deadconvicts->id]
        );

    	$this->assertCount(2, $user->bandMemberships);
    }

    /** @test */
    function a_user_can_activate_his_account(){
        $user = create('App\User', ['token' => 'myspecialtoken']);

        $user->activate();

        $this->assertEquals(null, $user->token);
        $this->assertEquals(1, $user->active);
    }
}
