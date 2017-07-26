<?php

namespace Tests\Feature;

use App\User;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProfilesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_user_has_a_profile()
    {
        $user = create('App\User');

        $this->get($user->profilePath())
            ->assertSee($user->username);
    }

    /** @test */
    function a_user_can_add_an_instrument_to_his_profile()
    {
        $this->signIn();

        $instrument = create('App\Instrument', ['id' => 6]);

        $data = ['instrument_id' => $instrument->id, 'playing_since' => Carbon::now()->subMonth()];

        $this->post('/instruments/' . auth()->user()->username . '/add', $data);

        $this->assertEquals(1, auth()->user()->instruments()->count());
        $this->assertTrue(auth()->user()->instruments->contains($instrument));
    }

    /** @test */
    function a_user_can_remove_an_instrument_from_his_profile(){
        $this->signIn();

        $instrument = create('App\Instrument', ['id' => 6]);

        auth()->user()->assignInstrument(['instrument_id' => $instrument->id, 'playing_since' => Carbon::now()->subMonth()]);

        $this->delete('/instruments/' . auth()->user()->username . '/remove/' . $instrument->id);

        $this->assertEquals(0, auth()->user()->instruments()->count());
        $this->assertFalse(auth()->user()->instruments->contains($instrument));

    }

    /** @test */
    function a_user_can_see_all_his_instruments()
    {
        $this->signIn();

        $instrument = create('App\Instrument');

        auth()->user()->assignInstrument($instrument);

        $this->get('/instruments/' . auth()->user()->username)
            ->assertSee($instrument->name);

    }

    /** @test */
    function a_user_can_activate_his_account()
    {
        $user = create(User::class, ['token' => 'myToken']);

        $this->get('/profiles/' . $user->username . '/activate/myToken');

        $this->assertTrue(!!$user->fresh()->active);
    }

    /** @test */
    function a_user_cannot_edit_an_other_profile()
    {
        $this->signIn();

        $user = create('App\User');

        $this->get('/profiles/' . $user->username . '/edit')->assertStatus(302);
    }

    /** @test */
    function a_user_can_edit_his_own_profile()
    {
        $this->signIn();

        $this->get('/profiles/' . auth()->user()->username . '/edit')->assertSee(auth()->user()->username);
    }
}
