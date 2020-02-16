@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-12 col-lg-12 col-md-12   ">


            <div class="card mb-4 shadow">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Supplier Details </h6>
                </div>
                <div class="card-body">

                    <h1>Name: {{$supplier->name}}</h1>
                    <b>Phone: {{$supplier->phone}}</b><br>
                    <b>Address: {{$supplier->address}}</b><br>
                    <b>Due: {{$supplier->due}}</b>

                </div>


            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-abasas-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand">Supplier Cash Receive list</a>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bpurchaseed" id="dataTable1" width="100%" cellspacing="0">
                            <thead class="bg-abasas-dark">


                                <tr>
                                    <th>Payment Id</th>
                                    <th>Ref</th>
                                    <th>Pre_due</th>
                                    <th>Amount</th>

                                </tr>
                            </thead>
                            <tfoot class="bg-abasas-dark">
                                <tr>
                                    <th>Payment Id</th>
                                    <th>Ref</th>
                                    <th>Pre_due</th>
                                    <th>Amount</th>

                                </tr>

                            </tfoot>
                            <tbody>
                                <?php $id = 1 ?>
                                @foreach ($supplierPayments as $supplierPayment)
                                <?php $id = $supplierPayment->id ?>
                                <tr class="data-row">
                                    <td class="iteration">{{$id}}</td>
                                    <td id="">{{$supplierPayment->user->name}}</td>
                                    <td id="">{{$supplierPayment->pre_due}}</td>
                                    <td id="viewProductTypeId">{{$supplierPayment->amount}}</td>





                                </tr>
                                @endforeach

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>





            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-abasas-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand">Supplier Purchase list</a>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bpurchaseed" id="dataTable1" width="100%" cellspacing="0">
                            <thead class="bg-abasas-dark">


                                <tr>
                                    <th>#</th>
                                    <th>purchase Id</th>
                                    <th>Ref</th>
                                    <th>Total</th>
                                    <th>Discount</th>
                                    <th>Pay</th>
                                    <th>Due</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot class="bg-abasas-dark">
                                <tr>
                                    <th>#</th>
                                    <th>purchase Id</th>
                                    <th>Ref</th>
                                    <th>Total</th>
                                    <th>Discount</th>
                                    <th>Pay</th>
                                    <th>Due</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>

                            </tfoot>
                            <tbody>

                                <?php $i = 1; ?>
                                @foreach ($purchases as $purchase )

                                <tr class="data-row">
                                    <td>{{$i++}}</td>
                                    <td>{{$purchase->id}}</td>
                                    <td>{{$purchase->user->name}}</td>
                                    <td>{{$purchase->total}}</td>
                                    <td>{{$purchase->discount}}</td>
                                    <td>{{$purchase->pay}}</td>
                                    <td>{{$purchase->due}}</td>


                                    <td>{{ $purchase->created_at->format('M d Y')}}</td>


                                    <td class="align-middle">
                                        <a href=" {{ route('order-receipt-show', ['id' => $purchase->id] ) }}"> <button type="button" class="btn btn-success" id="edit-item"> <i class="fa fa-eye" aria-hidden="false"> </i></button></a>




                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <!-- Left Sidebar Start -->


</div>

</div>
<!-- Content Row -->






@endsection