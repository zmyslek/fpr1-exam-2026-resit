<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    /**
     *
     * @return mixed
     */
    public function computeS()
    {
        // Get the 'score tegen' attribute
        $a = $this->st;

        // Get the 'score voor' attribute
        $b = $this->st;

        // Compute the difference and return the result
        return $a - $b;
    }
}
