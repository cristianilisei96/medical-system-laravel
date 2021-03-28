<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    protected $fillable = ['patient_id', 'doctor_id', 'specialization_id',]; 

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

}
