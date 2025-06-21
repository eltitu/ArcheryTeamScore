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

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function games() {
        return $this->belongsToMany(Game::class);
    }

    public function scores() {
        return $this->hasMany(Score::class);
    }
}
