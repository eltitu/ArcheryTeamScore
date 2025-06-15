<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archer extends Model
{
    use HasFactory;

    public function division() {
        return $this->belongsTo(Division::class);
    }

    public function game() {
        return $this->belongsTo(Game::class);
    }
}
