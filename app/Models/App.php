<?php

namespace IntelGUA\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'apps';

    protected $fillable = [
        'name',
        'logo',
        'logo_thumbnail',
        'slogan',
        'phone',
        'whattsapp',
        'address',
        'website',
        'email'
    ];

}
