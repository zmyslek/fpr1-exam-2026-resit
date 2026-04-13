<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playfield extends Model
{
    /** @use HasFactory<\Database\Factories\PlayfieldFactory> */
    use HasFactory;
    protected $fillable = [
        'sponsor',
        'size',
        'last_maintained_at',
    ];
    /**
     * Get the derived name attribute.
     *
     * Returns: type:sponsor
     */
    public function getNameAttribute(): string
    {
        if ($this->sponsor) {
            return "{$this->sponsor}";
        } else {
            return "Vled {$this->id}";
        }
    }
    public function games()
    {
        return $this->hasMany(Game::class, 'playfield_id', 'id');
    }
}
