<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public function end() {
        return $this->belongsTo(End::class);
    }

    public function archer() {
        return $this->belongsTo(Archer::class);
    }
}
