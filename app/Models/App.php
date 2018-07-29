<?php

namespace IntelGUA\Models;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'slogan',
        'phone',
        'whattsapp',
        'address',
        'website',
        'email',
        'user_id'
    ];

    public function users(){
        return $this->hasMany(User::class());
    }
}
