<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Purchase;
class ReceiptController extends Controller
{
  
    

    public function purchaseShow($id)
    {
        
        $purchase= Purchase::find($id);
        //  return $purchase->supplier;
        return  view('product.purchaseReceipt', compact('purchase'));
    } 

    


}
