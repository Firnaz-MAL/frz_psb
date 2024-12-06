<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Kolom yang bisa diubah
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Kolom yang harus di-encrypt
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Kolom yang perlu casting ke tipe tertentu
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}


