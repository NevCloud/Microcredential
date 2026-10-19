<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id_users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'no_wa',
        'role',
        'status_akun',
        'user_salt',
        'salted_password_hash',
    ];

    protected $hidden = [
        'password',
        'user_salt',
        'salted_password_hash',
    ];
}
