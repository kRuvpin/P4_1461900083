<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Authenticatable
{
    protected $table = 'user';
    protected $fillable = [
        'id',
        'nama',
        'username',
        'password',
    ];
}
