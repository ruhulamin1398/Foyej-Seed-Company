@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

  <div class="row ">
    
    <!-- main body start -->
    <div class="col-xl-9 col-lg-9 col-md-9   ">




    
    <div class="card mb-4 shadow">

        <div class="card-header py-3 bg-dark  text-light ">
            <h6 class="m-0 font-weight-bold ">Purchase New</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('suppliers.store') }}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <span class="text-dark  pl-2"> Product Id</span>
                        <input type="number" name="product_id"  id ="purchaseProductInputId"  value=0 class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-1"> Price</span>
                        <input type="number" name="price"  id ="purchaseProductInputIdPrice" value=0  class="form-control mb-2" >
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-1"> Quantity</span>
                        <input type="number" name="quantity"  id ="purchaseProductInputQuantity"  value=0 class="form-control mb-2">
                    </div>



                    <div class="col-auto">

                        <span class="text-dark pl-1"> Total</span>
                        <input type="number" name="total" id ="purchaseProductInputTotal"  value=0 class="form-control mb-2">
                    </div>



                    <div class="col-auto">
                        <button type="button" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

    </div>

    <!-- Left Sidebar Start -->
    <div class="col-xl-3 col-lg-3 col-md-3   "> 



      <!-- Growth Card Example -->
      <div class="col-xl-12 col-md-12 mb-4  text-center  bg-dark p-3 ">
        <div class="card border-none   bg-dark  h-100 p-4">
          <h3 class="text-white">Supplier</h3>
          <div class="card-body">
            <div class="row no-gutters ">


              <form method="GET" id="purchasePageSupplierForm">
                @csrf
                <div class="form-row ">
                  <div class="col-auto">
                    <span class="text-light pl-2"> Supplier Phone</span>
                    <input type="text" name="phone" id="purchasePageSupplierPhoneField" class="form-control mb-2">
                  </div>
                </div>
              </form>

            </div>
            <div class="text-samall text-danger" id="purchasePageAddSupplierError"></div>

            <div id="purchasePageSupplierView">
              <div id="purchasePageSupplierName" class="text-light font-weight-bold"></div>
              <div id="purchasePageSupplierPhone" class="text-light "></div>
              <div id="purchasePageSupplieCompany" class="text-light "></div>
              <div id="purchasePageSupplierDue" class="text-danger font-weight-bold"></div>
            </div>

              <form method="POST" action="{{ route('suppliers.store') }} "  id="purchasePageAddSupplierForm" >
                @csrf
                <div class="form-row a">
                  <div class="col-auto">

                    <input type="text"    id="purchasePageAddSupplierFormName"   name="name" placeholder="name" class="form-control mb-2">
                  </div>
                  <div class="col-auto">
                    <input type="text"    id="purchasePageAddSupplierFormPhone"   name="phone" class="form-control mb-2" hidden>
                  </div>
                  <div class="col-auto">
                    <input type="text"     id="purchasePageAddSupplierFormAddress"  name="address" placeholder="address" class="form-control mb-2">
                  </div>
                  <div class="col-auto">
                    <input type="text"    id="purchasePageAddSupplierFormCompany"  name="company" placeholder="company" class="form-control mb-2">
                  </div>

                  <div class="col-auto">
                    <button type="button" id="purchasePageAddSupplierButton" class="btn btn-primary mt-3">done</button>
                  </div>

                

              </form>
            </div>

          </div>
        </div>
        <!-- Growth Card Example -->
      </div>
    </div>











  </div>
</div>

<!-- Content Row -->

@endsection