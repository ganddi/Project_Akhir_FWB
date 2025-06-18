<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalNote extends Model
{
    protected $table = 'rentals_notes';
    protected $fillable = ['rental_id', 'notes'];

    // Relasi One-to-One dengan rentals
    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rental_id');
    }
}
