<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function playfield()
    {
        return $this->belongsTo(Playfield::class, 'playfield_id', 'id');
    }
}
