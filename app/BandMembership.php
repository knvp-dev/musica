<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bandmembership extends Model
{
	protected $guarded = [];

	protected $with = ['band', 'instrument', 'user'];

	public function user(){
		return $this->belongsTo(User::class);
	}

    public function band(){
        return $this->hasOne(Band::class, 'id', 'band_id');
    }

    public function instrument(){
        return $this->hasOne(Instrument::class, 'id', 'instrument_id');
    }

    public function getLeaveDateAttribute(){
        return ($this->attributes['leave_date'] == null) ? "Present" : $this->attributes['leave_date'];
    }

}
