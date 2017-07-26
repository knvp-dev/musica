<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function getRouteKeyName()
    {
        return 'username';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profilePath()
    {
        return "/profiles/{$this->username}";
    }

    public function bands()
    {
        return $this->hasMany(Band::class, 'owner_id');
    }

    public function bandMemberships()
    {
        return $this->hasMany(Bandmembership::class);
    }

    public function instruments()
    {
        return $this->belongsToMany(Instrument::class, 'instrument_user')
                    ->withPivot('playing_since');
    }

    public function assignInstrument($instrument)
    {
        $this->instruments()->attach($instrument['instrument_id'], ['playing_since' => $instrument['playing_since']]);
    }

    public function unassignInstrument($instrument_id){
        $this->instruments()->detach($instrument_id);
    }

    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function activate()
    {
        $this->active = 1;
        $this->token = null;
        $this->save();
    }
}
