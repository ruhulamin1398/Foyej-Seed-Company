<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class yearly extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
