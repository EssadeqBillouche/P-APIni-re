<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Required for factory support

class User extends Authenticatable implements JWTSubject
{
    use HasFactory; // Include this trait
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // Required by JWTSubject
    public function getJWTIdentifier()
    {
        return $this->getKey(); // Returns the user's primary key (e.g., ID)
    }

    // Required by JWTSubject
    public function getJWTCustomClaims()
    {
        return []; // Add custom claims here if needed (e.g., ['role' => 'admin'])
    }
}
