<?php

namespace IntelGUA\Models;

use Illuminate\Database\Eloquent\Model;

class BallotBook extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'ballot_books';

    protected $fillable = [
        'date_publish',
        'user_id'
    ];
}
