<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EncounterNote extends Model
{
    protected $fillable = [
        'encounter_id','queue_ticket_id','department_id',
        'author_id','type','note','data'
    ];

    protected $casts = [
        'data' => 'array',
    ];

    public function encounter()
    {
        return $this->belongsTo(Encounter::class);
    }

    public function ticket()
    {
        return $this->belongsTo(QueueTicket::class, 'queue_ticket_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
