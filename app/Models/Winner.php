<?php

namespace IntelGUA\Models;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'winners';

    protected $fillable = [
        'first_name',
        'last_name',
        'draw_date',
        'ticket_number',
        'winning_number',
        'is_older',
        'dpi',
        'address',
        'department_id',
        'municipality_id',
        'user_id',
        'description'
    ];
}
