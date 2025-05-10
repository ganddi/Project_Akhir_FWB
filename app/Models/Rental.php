<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = ['user_id', 'total_price', 'rental_status', 'start_date', 'end_date'];

    protected $casts = [
        'rental_status' => 'string', // ENUM: belum_dibayar, dipinjam, dikembalikan
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    // Relasi Many-to-One dengan users
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi One-to-Many dengan rental_items
    public function rentalItems()
    {
        return $this->hasMany(RentalItem::class, 'rental_id');
    }

    // Relasi Many-to-Many dengan items melalui rental_items
    public function items()
    {
        return $this->belongsToMany(Item::class, 'rental_items', 'rental_id', 'item_id')
                    ->withPivot('quantity', 'price');
    }

    // Relasi One-to-One dengan rentals_notes
    public function rentalNote()
    {
        return $this->hasOne(RentalNote::class, 'rental_id');
    }
}
