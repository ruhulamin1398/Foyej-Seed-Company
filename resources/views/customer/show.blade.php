@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-12 col-lg-12 col-md-12   ">


            <div class="card mb-4 shadow">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> Customer Details </h6>
                </div>
                <div class="card-body">

                    <h1>Name: {{$customer->name}}</h1>
                    <b>Phone: {{$customer->phone}}</b><br>
                    <b>Address: {{$customer->address}}</b><br>
                    <b>Due: {{$customer->due}}</b>

                </div>


            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand">Customer Cash Receive list</a>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead class="thead-dark">


                                <tr>
                                    <th>Payment Id</th>
                                    <th>Ref</th>
                                    <th>Pre_due</th>
                                    <th>Amount</th>

                                </tr>
                            </thead>
                            <tfoot class="thead-dark">
                                <tr>
                                    <th>Payment Id</th>
                                    <th>Ref</th>
                                    <th>Pre_due</th>
                                    <th>Amount</th>

                                </tr>

                            </tfoot>
                            <tbody>
                                <?php $id = 1 ?>
                                @foreach ($customerCashReceives as $customerCashReceive)
                                <?php $id = $customerCashReceive->id ?>
                                <tr class="data-row">
                                    <td class="iteration">{{$id}}</td>
                                    <td id="">{{$customerCashReceive->user->name}}</td>
                                    <td id="">{{$customerCashReceive->pre_due}}</td>
                                    <td id="viewProductTypeId">{{$customerCashReceive->amount}}</td>





                                </tr>
                                @endforeach

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>





            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand">Customer Order list</a>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead class="thead-dark">


                                <tr>
                                    <th>#</th>
                                    <th>order Id</th>
                                    <th>Ref</th>
                                    <th>Total</th>
                                    <th>Discount</th>
                                    <th>Pay</th>
                                    <th>Due</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>order Id</th>
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
                                @foreach ($orders as $order )

                                <tr class="data-row">
                                    <td>{{$i++}}</td>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->user->name}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{$order->discount}}</td>
                                    <td>{{$order->pay}}</td>
                                    <td>{{$order->due}}</td>


                                    <td>{{ $order->created_at->format('M d Y')}}</td>


                                    <td class="align-middle">
                                        <a href=" {{ route('order-receipt-show', ['id' => $order->id] ) }}"> <button type="button" class="btn btn-success" id="edit-item"> <i class="fa fa-eye" aria-hidden="false"> </i></button></a>




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