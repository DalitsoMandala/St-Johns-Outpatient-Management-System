<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['code','name','description','active'];

    public function incomingTickets()
    {
        return $this->hasMany(QueueTicket::class, 'to_department_id');
    }
}

