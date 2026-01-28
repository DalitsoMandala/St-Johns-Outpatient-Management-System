<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'patient_no','first_name','last_name','dob','gender',
        'phone','email','country','district','marital_status','address',
        'created_by'
    ];

    public function encounters()
    {
        return $this->hasMany(Encounter::class);
    }

    public function activeEncounter()
    {
        return $this->hasOne(Encounter::class)->where('status', 'open');
    }
}

