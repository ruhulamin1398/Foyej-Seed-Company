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
          <form id="purchaseProductInputForm">

            <div class="form-row align-items-center">
              <div class="col-auto">
              <input type="text" id="productCheckLink" size="10" value="{{route('product_check_api')}} " class="form-control  mb-2" hidden>
              <input type="text" id="productViewLink" size="10" value="{{route('product_view_api')}} " class="form-control  mb-2" hidden>
              </div>
              <div class="col-auto">
                <span class="text-dark  pl-2"> Product Id</span>
                <input type="text" name="product_id" id="purchaseProductInputId" size="10" value=0 class="form-control  mb-2">
              </div>

              <div class="col-auto">
                <span class="text-dark  pl-2"> Product Name</span>
                <input type="text" name="name" id="purchaseProductInputName" size="20" value="" class="form-control  mb-2" disabled >
              </div>
              <div class="col-auto">

                <span class="text-dark pl-1"> Price</span>
                <input type="text" name="price" id="purchaseProductInputPrice" size="6" value=0 class="form-control  mb-2">
              </div>
              <div class="col-auto">

                <span class="text-dark pl-1"> Quantity</span>
                <input type="text" name="quantity" id="purchaseProductInputQuantity" size="6" value=0 class="form-control  mb-2">
              </div>



              <div class="col-auto">

                <span class="text-dark pl-1"> Total</span>
                <input type="text" name="total" id="purchaseProductInputTotal" size="10" value=0 class="form-control  mb-2">
              </div>



              <div class="col-auto">
                <button type="button" id="purchaseProductInputSubmit" class="btn btn-success mt-3" disabled="true">Submit</button>
              </div>

            </div>

          </form>
        </div>
      </div>


      <!-- Begin Page Content -->





      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <b>Product list</b>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="purchaseProductTable" width="100%" cellspacing="0">
              <thead class="thead-dark">


                <tr>
                  <th>#</th>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>

              </tfoot>
              <tbody>

                <?php $i = 1; ?>
                <tr class="data-row">
                  <td class="iteration">{{$i++}}</td>
                  <td id="viewPurchaseTableId"></td>
                  <td id="viewPurchaseTableName"></td>
                  <td id="viewPurchaseTablePrice"></td>
                  <td id="viewPurchaseTableQuantity"></td>
                  <td id="viewPurchaseTableTotal"></td>
                  <td class="align-middle">
                    <button type="button" id="purchaseProductTableEdit" class="btn btn-success"> <i class="fa fa-edit" aria-hidden="false"> </i></button>
                    <button type="button" id="purchaseProductTableDelete" productId="12" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="false"> </i></button> </td>

                </tr>

              </tbody>
            </table>

          </div>
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
                    <form method="post">


                    <input type="text" id="supplierViewLink" size="10" value="{{route('supplier_view_api')}} " class="form-control  mb-2" hidden>
                    <input type="text" id="supplierCheckLink" size="10" value="{{route('supplierscheck_api')}} " class="form-control  mb-2" hidden>
                      <input type="number" name="phone" id="purchasePageSupplierPhoneField" ">
                    <input type=" number" name="efsd" hidden ">
                  </form>
                  </div>
                </div>
              </form>

            </div>
            <div class=" text-samall text-danger" id="purchasePageAddSupplierError">
                  </div>

                  <div id="purchasePageSupplierView">
                    <div id="purchasePageSupplierName" class="text-light font-weight-bold"></div>
                    <div id="purchasePageSupplierPhone" class="text-light "></div>
                    <div id="purchasePageSupplieCompany" class="text-light "></div>
                    <div id="purchasePageSupplierDue" class="text-danger font-weight-bold"></div>
                  </div>

                  <form method="POST" action="{{ route('suppliers.store') }} " id="purchasePageAddSupplierForm">
                    @csrf
                    <div class="form-row a">
                      <div class="col-auto">

                        <input type="text" id="purchasePageAddSupplierFormName" name="name" placeholder="name" class="form-control mb-2">
                      </div>
                      <div class="col-auto">
                        <input type="text" id="purchasePageAddSupplierFormPhone" name="phone" class="form-control mb-2" hidden>
                      </div>
                      <div class="col-auto">
                        <input type="text" id="purchasePageAddSupplierFormAddress" name="address" placeholder="address" class="form-control mb-2">
                      </div>
                      <div class="col-auto">
                        <input type="text" id="purchasePageAddSupplierFormCompany" name="company" placeholder="company" class="form-control mb-2">
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