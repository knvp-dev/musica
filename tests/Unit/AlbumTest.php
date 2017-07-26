<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AlbumTest extends TestCase
{
	use DatabaseMigrations;
	
    /** @test */
    function an_album_can_have_songs(){
        $album = create('App\Album');
        $song = create('App\Song', ['album_id' => $album->id]);
        $this->assertCount(1, $album->songs);
    }
}
