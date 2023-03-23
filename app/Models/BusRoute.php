<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;
    protected $table = "routes";

    protected $guarded = [];


    /**
     * Get all of the schedule for the BusRoute
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id');
    }
}
