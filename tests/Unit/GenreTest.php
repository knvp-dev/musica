<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GenreTest extends TestCase
{
	use DatabaseMigrations;

    /** @test */
    function a_genre_belongs_to_many_bands(){
    	$band = create('App\Band');
    	$genre = \App\Genre::first();
    	$this->assertCount(1, $genre->bands);
    }
}
