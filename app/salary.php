<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
        public function staff()
    {
        return $this->belongsTo('App\staff');
    }

    
}
