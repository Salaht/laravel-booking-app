<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
	
		public $timestamps = false;

		protected $fillable = [
		'name'
		];

		public function Holiday()
		{
			return $this->hasMany('App\Holiday');
		}

	
}
