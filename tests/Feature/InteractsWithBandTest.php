<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class InteractsWithBandTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function an_authenticated_user_can_create_a_band(){
    	$this->signIn();

    	$band = make('App\Band');

    	$this->post('/bands', $band->toArray());

    	$this->assertDatabaseHas('bands', ['owner_id' => auth()->id()]);
    }

    /** @test */
    function a_band_owner_can_assign_users_to_his_band(){
        $this->signIn();

        $user = create('App\User');

        $band = create('App\Band', ['owner_id' => auth()->id()]);

        $this->post("/members/{$band->slug}", ['user_id' => $user->id, 'instrument_id' => create('App\Instrument')->id]);

        $this->assertDatabaseHas('bandmemberships',
            ['band_id' => $band->id, 'user_id' => $user->id]
        );

        $this->assertCount(1, $band->members);
    }

    /** @test */
    function a_band_member_can_assign_users_to_his_band(){
        $this->signIn();

        $new_user = create('App\User');

        $band = create('App\Band');

        $bandMembership = create('App\Bandmembership',
            ['band_id' => $band->id, 'user_id' => auth()->id(), 'instrument_id' => 1]
        );

        $this->post("/members/{$band->slug}", ['user_id' => $new_user->id, 'instrument_id' => create('App\Instrument')->id]);

        $this->assertDatabaseHas('bandmemberships', 
            ['band_id' => $band->id, 'user_id' => $new_user->id]
        );

        $this->assertCount(2, $band->members);
    }

    /** @test */
    function a_non_member_can_not_assign_users_to_a_band(){
        $this->withExceptionHandling();
        $this->signIn();

        $band = create('App\Band');

        $this->post("/members/{$band->slug}", ['user_id' => auth()->id(), 'instrument_id' => create('App\Instrument')->id]);
    }
}
