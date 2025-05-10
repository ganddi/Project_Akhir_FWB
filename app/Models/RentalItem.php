<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalItem extends Model
{
     protected $fillable = ['rental_id', 'item_id', 'quantity', 'price'];

    // Relasi Many-to-One dengan rentals
    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rental_id');
    }

    // Relasi Many-to-One dengan items
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
