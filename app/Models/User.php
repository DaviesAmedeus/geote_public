<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $guard = 'web';

    protected $fillable = [
        'user_name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        
    ];
}
