<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function getRouteKeyName(){
        return 'username';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profilePath(){
        return "/profiles/{$this->username}";
    }

    public function bands(){
        return $this->hasMany(Band::class, 'owner_id');
    }

    public function bandMemberships(){
        return $this->hasMany(Bandmembership::class);
    }

    public function instruments(){
        return $this->belongsToMany(Instrument::class, 'instrument_user', 'user_id', 'instrument_id');
    }

    public function assignInstrument(Instrument $instrument){
        $this->instruments()->attach($instrument);
    }

    public function fullName(){
        return $this->first_name . " " . $this->last_name;
    }
}
