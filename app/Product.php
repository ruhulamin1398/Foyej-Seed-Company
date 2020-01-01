<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    

    
    public function catagory(){
        return $this->belongsTo('App\Caragory');
    }

    public function product_type(){
        return $this->belongsTo('App\Product_type');
    }  
      

}
