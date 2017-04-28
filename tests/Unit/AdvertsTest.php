<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AdvertsTest extends TestCase
{
    /** @test */
    function a_user_can_see_all_adverts(){
    	$this->get('/adverts')
			->assertSee("Adverts");
    }
}
