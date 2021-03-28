<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['first_name', 'last_name', 'specialization_id', 'birthday', 'gender', 'town', 'mobile'];

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

}
