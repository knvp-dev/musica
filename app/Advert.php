d<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
    protected $guarded = [];

    public function getRouteKeyName(){
    	return 'slug';
    }

    public function path(){
    	return '/adverts/' . $this->category . '/' . $this->slug;
    }

    public function author(){
    	return $this->HasOne(User::class);
    }
}
