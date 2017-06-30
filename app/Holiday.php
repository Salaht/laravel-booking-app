<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
	public $timestamps = false;

    protected $fillable = [
    	'name',
    	'description',
    	'decimal',
    	'country_id',
    	'accommodation_id'
    ];

    public function Country()
    {
        return $this->belongsTo('App\Country');
    }

    public function Accommodation()
    {
    	return $this->belongsTo('App\Accommodation');
    }
}
