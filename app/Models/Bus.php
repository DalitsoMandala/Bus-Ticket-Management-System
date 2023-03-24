<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table = "buses";
    protected $guarded = [];


    /**
     * Get all of the seats for the Bus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function number_of_seats()
    {
        return $this->hasMany(Seat::class, 'bus_id');
    }
}
