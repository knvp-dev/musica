<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public function users(){
    	return $this->belongsToMany(User::class, 'instrument_user', 'instrument_id', 'user_id');
    }
}
