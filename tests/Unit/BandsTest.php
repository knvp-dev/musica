<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BandsTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function a_band_can_have_many_members(){
    	$this->signIn();

        $band = create('App\Band');
    	$bandMembership = create('App\Bandmembership', ['user_id' => auth()->id(), 'band_id' => $band->id]);

    	$this->assertCount(1, $band->members);
    }
}
