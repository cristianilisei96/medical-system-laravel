<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['first_name', 'last_name', 'cnp', 'birthday', 'gender', 'address', 'town', 'county', 'mobile',]; 

    public function getAgeAttribute()
	{
	    return Carbon::parse($this->attributes['birthday'])->diff(Carbon::now())->format('%y years, %m months');
	}

    public function Sheet()
    {
        return $this->hasMany('App\Sheet');
    }
}
