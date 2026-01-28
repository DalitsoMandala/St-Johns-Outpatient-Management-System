<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QueueTicket extends Model
{
    protected $fillable = [
        'encounter_id','patient_id',
        'from_department_id','to_department_id',
        'priority','status','note',
        'created_by','assigned_to',
        'queued_at','started_at','finished_at',
        'parent_ticket_id'
    ];

    protected $casts = [
        'queued_at' => 'datetime',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function encounter()
    {
        return $this->belongsTo(Encounter::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function fromDepartment()
    {
        return $this->belongsTo(Department::class, 'from_department_id');
    }

    public function toDepartment()
    {
        return $this->belongsTo(Department::class, 'to_department_id');
    }

    public function parent()
    {
        return $this->belongsTo(QueueTicket::class, 'parent_ticket_id');
    }

    public function notes()
    {
        return $this->hasMany(EncounterNote::class, 'queue_ticket_id');
    }
}
