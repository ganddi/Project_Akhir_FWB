<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'password', 'role'];

    protected $casts = [
        'role' => 'string', // ENUM: admin, penyewa, owner
    ];

    // Relasi One-to-Many dengan rentals
    public function rentals()
    {
        return $this->hasMany(Rental::class, 'user_id');
    }
}
