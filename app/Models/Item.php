<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'description', 'stock', 'price_per_day', 'image_url'];

    // Relasi One-to-Many dengan rental_items
    public function rentalItems()
    {
        return $this->hasMany(RentalItem::class, 'item_id');
    }

    // Relasi Many-to-Many dengan rentals melalui rental_items
    public function rentals()
    {
        return $this->belongsToMany(Rental::class, 'rental_items', 'item_id', 'rental_id')
                    ->withPivot('quantity', 'price');
    }

    // Relasi One-to-Many dengan reports
    public function reports()
    {
        return $this->hasMany(Report::class, 'item_id');
    }
}
