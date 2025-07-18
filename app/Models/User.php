<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['phone', 'password'];

    protected $hidden = ['password'];

    protected $casts = [
        // 'email_verified_at' => 'datetime', // اگر ندارید، حذف کنید
        'password' => 'hashed',
    ];
}
