<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
     protected $fillable = ['item_id', 'period', 'total_rentals', 'total_days', 'total_income'];

    // Relasi Many-to-One dengan items
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
