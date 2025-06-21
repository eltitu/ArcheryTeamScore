<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function competition() {
        return $this->belongsTo(Competition::class);
    }

    public function archers() {
        return $this->belongsToMany(Archer::class);
    }

    public function ends() {
        return $this->hasMany(End::class);
    }
}
