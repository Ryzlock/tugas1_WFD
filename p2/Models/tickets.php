<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    public function flights() {
        return $this->belongsTo(flights::class);
    }

    protected $fillable = [
        'passanger_name',
        'passanger_phone',
        'seat_number'
    ];
}