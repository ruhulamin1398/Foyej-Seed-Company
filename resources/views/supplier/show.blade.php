@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-12 col-lg-12 col-md-12   ">


            <div class="card mb-4 shadow">

                <div class="card-header py-3 bg-abasas-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand">সাপাইয়ার বিবরণ</a>

                    </nav>
                </div>
                <div class="card-body">

                    <h1>নাম: {{$supplier->name}}</h1>
                    <b>নাম্বার: {{$supplier->phone}}</b><br>
                    <b>ঠিকানা: {{$supplier->address}}</b><br>
                    <b>বকেয়া: {{$supplier->due}}</b>

                </div>
 

            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-abasas-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand">টাকা পেমেন্ট লিস্ট </a>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bpurchaseed" id="dataTable1" width="100%" cellspacing="0">
                            <thead class="bg-abasas-dark">


                                <tr>
                                    <th>পেমেন্ট আইডি</th>
                                    <th>রেফারেন্স</th>
                                    <th>পুর্বের বকেয়া</th>
                                    <th>পরিমান</th>

                                </tr>
                            </thead>
                            <tfoot class="bg-abasas-dark">
                                <tr>
                                    <th>পেমেন্ট আইডি</th>
                                    <th>রেফারেন্স</th>
                                    <th>পুর্বের বকেয়া</th>
                                    <th>পরিমান</th>

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
                        <a class="navbar-brand">প্রোডাক্ট সাপ্লাই লিস্ট</a>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bpurchaseed" id="dataTable1" width="100%" cellspacing="0">
                            <thead class="bg-abasas-dark">


                                <tr>
                                    <th>#</th>
                                    <th>ক্রয় আইডি </th>
                                    <th>রেফারেন্স</th>
                                    <th>টোটাল</th>
                                    <th> ডিস্কাউন্ট</th>
                                    <th>পেমেন্ট </th>
                                    <th>বকেয়া</th>
                                    <th>তারিখ</th>
                                    <th>একশন </th>
                                </tr>
                            </thead>
                            <tfoot class="bg-abasas-dark">
                                <tr>
                                    <th>#</th>
                                    <th>ক্রয় আইডি </th>
                                    <th>রেফারেন্স</th>
                                    <th>টোটাল</th>
                                    <th> ডিস্কাউন্ট</th>
                                    <th>পেমেন্ট </th>
                                    <th>বকেয়া</th>
                                    <th>তারিখ</th>
                                    <th>একশন </th>
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
                                        <a href=" {{ route('purchases-receipt-show', ['id' => $purchase->id] ) }}"> <button type="button" class="btn btn-success" id="edit-item"> <i class="fa fa-eye" aria-hidden="false"> </i></button></a>




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