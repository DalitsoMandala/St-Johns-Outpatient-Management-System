<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encounter extends Model
{
    protected $fillable = [
        'patient_id','checked_in_at','checked_in_by','checkin_type',
        'chief_complaint','status','closed_at','closed_by'
    ];

    protected $casts = [
        'checked_in_at' => 'datetime',
        'closed_at' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function tickets()
    {
        return $this->hasMany(QueueTicket::class);
    }

    public function notes()
    {
        return $this->hasMany(EncounterNote::class);
    }

    public function vitals()
    {
        return $this->hasMany(Vital::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }

    public function labOrders()
    {
        return $this->hasMany(LabOrder::class);
    }

    public function dispenses()
    {
        return $this->hasMany(Dispense::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}

