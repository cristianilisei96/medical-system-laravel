<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    protected $fillable = ['name',];

    public function Doctor()
    {
        return $this->hasMany('App\Doctor');
    }

}
