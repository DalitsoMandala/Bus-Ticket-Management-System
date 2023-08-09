<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'payments';

    protected $casts = [
        'customer_data' => 'json', // This casts the "data" column to a JSON object/array.
    ];

    /**
     * Get the has_booking that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function has_booking()
    {
        return $this->hasOne(Booking::class);
    }

    public function getPaymentDateAttribute()
    {
        return $this->data['payment_date'] ?? null;
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
