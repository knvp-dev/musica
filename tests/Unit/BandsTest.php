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

    /** @test */
    function a_band_has_a_genre(){
    	$band = create('App\Band');
    	$genre = \App\Genre::first();
    	$this->assertEquals($genre, $band->genre);
    }

    /** @test */
    function a_band_can_have_albums(){
    	$band = create('App\Band');
    	$album = create('App\Album', ['band_id' => $band->id]);
    	$this->assertCount(1, $band->albums);
    }

    /** @test */
    function a_band_can_have_songs(){
    	$band = create('App\Band');
    	$song = create('App\Song', ['band_id' => $band->id, 'album_id' => null]);
    	$this->assertCount(1, $band->songs);
    }
}
