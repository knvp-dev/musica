<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bandmembership;

class Band extends Model
{
    protected $guarded = [];

    public function getRouteKeyName(){
    	return 'slug';
    }

    public function path(){
        return "/bands/{$this->slug}";
    }

    public function owner(){
    	return $this->belongsTo(User::class);
    }

    public function members(){
    	return $this->hasMany(Bandmembership::class);
    }

    public function genre(){
        return $this->hasOne(Genre::class, 'id');
    }

    public function albums(){
        return $this->hasMany(Album::class);
    }

    public function songs(){
        return $this->hasMany(Song::class);
    }
}
