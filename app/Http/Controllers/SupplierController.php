<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers= Supplier::all();
        
       
       return view('product.suppliers',compact('suppliers'));
    }

    public function apiIndex()
    {
        $suppliers= Supplier::all();
        
       
       return ($suppliers);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone' => 'required|unique:suppliers|max:11|min:11',
            'name' => 'required:suppliers',
        ]);
    
       $supplier= new Supplier();

       $supplier-> name = $request->name;
       $supplier-> phone = $request->phone;
       $supplier-> company = $request->company;
       $supplier-> address = $request->address;
       $supplier-> due = 0;
       $supplier->save();
       return back();

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }
    public function ApiShow(Request $request)
    {
     ///   return $request->phone;
        $supplier= Supplier::where('phone',$request->phone)->first();
        return $supplier;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Supplier::find($id)->delete();
         return redirect(route('suppliers.index'))->with('successMsg','Category Successfully Deleted');
    }
    public function suppliersupdate(Request $request){
       
        $request->validate([
            'phone' => 'required|unique:suppliers|max:11|min:11',
            'name' => 'required:suppliers',
        ]);

        $supplier = Supplier::find($request->id);
        
       $supplier-> name = $request->name;
       $supplier-> phone = $request->phone;
       $supplier-> company = $request->company;
       $supplier-> address = $request->address;
     
       $supplier->save();

        return redirect(route('suppliers.index'))->with('successMsg','supplier Successfully updated');

    }
    public function supplierscheck(Request $request){
       
        $phone=$request->phone;
        /// return $phone;
       
       
        $supplier= Supplier::where('phone',$phone)->first();
        // return $supplier;
     
        if (is_null($supplier)) {
            return 0;
        }
        else
        return 1;   
      
    }
    public function suppliersDue(Request $request){
// return $request;
        $supplier= Supplier::find($request->id);
        $supplier->due = $request->due;
        $supplier->save();  
        return $supplier->due;

    }

}














