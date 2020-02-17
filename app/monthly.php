<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monthly extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
