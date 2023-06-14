<?php

namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $dates = ['start_date', 'end_date'];

    public function getStatusAttribute()
    {
        if ($this->end_date < Carbon::now()) {
            return 'Expired';
        }

        return 'Active';
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

}
