<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $guarded = [];

    public function company()
    {
    	return $this->belongsTo(Company::class);
    }

    public function position()
    {
    	return $this->belongsTo(Position::class);
    }
}
