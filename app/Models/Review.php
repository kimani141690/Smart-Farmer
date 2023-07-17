<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';

    // Relationships
    public function farmer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Farmer::class);
    }

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

//    public function customer()
//    {
//        return $this->belongsTo(User::class, 'customer_id');
//    }
//
//    public function farmer()
//    {
//        return $this->belongsTo(User::class, 'farmer_id');
//    }
}
