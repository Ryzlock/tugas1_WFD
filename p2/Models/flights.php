<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    public function tickets() {
        return $this->hasMany(tickets::class);
    }
}