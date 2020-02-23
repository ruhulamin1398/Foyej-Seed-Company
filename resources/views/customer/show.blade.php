0@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-12 col-lg-12 col-md-12   ">


            <div class="card mb-4 shadow">

              
                <div class="card-header py-3 bg-abasas-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand">কাস্টমার বিবরন</a>

                    </nav>
                </div>
                <div class="card-body">

                    <h1> নাম : {{$customer->name}}</h1>
                    <b> নাম্বার : {{$customer->phone}}</b><br>
                    <b>ঠিকানা : {{$customer->address}}</b><br>
                    <b> বকেয়া : {{$customer->due}}</b>

                </div>


            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-abasas-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand">কাস্টমার পেমেন্ট লিস্ট</a>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead class="bg-abasas-dark">


                                <tr>
                                    <th>পেমেন্ট আইডি</th>
                                    <th>রেফারেন্স</th>
                                    <th>পূর্বের বকেয়া</th>
                                    <th>পরিমান</th>

                                </tr>
                            </thead>
                            <tfoot class="bg-abasas-dark">
                                <tr>
                                    <th>পেমেন্ট আইডি</th>
                                    <th>রেফারেন্স</th>
                                    <th>পূর্বের বকেয়া</th>
                                    <th>পরিমান</th>

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
                <div class="card-header py-3 bg-abasas-dark text-light">
                    <nav class="navbar navbar-light">
                        <a class="navbar-brand"> কাস্টমার ক্রয় লিস্ট</a>

                    </nav>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                            <thead class="bg-abasas-dark">


                                <tr>
                                    <th>#</th>
                                    <th>ক্রয় আইডি</th>
                                    <th>রেফারেন্স</th>
                                    <th>টোটাল</th>
                                    <th> ডিস্কাউন্ট</th>
                                    <th>পেমেন্ট</th>
                                    <th>বকেয়া</th>
                                    <th>সময়</th>
                                    <th> একশন</th>
                                </tr>
                            </thead>
                            <tfoot class="bg-abasas-dark">
                                <tr>
                                    <th>#</th>
                                    <th>ক্রয় আইডি</th>
                                    <th>রেফারেন্স</th>
                                    <th>টোটাল</th>
                                    <th> ডিস্কাউন্ট</th>
                                    <th>পেমেন্ট</th>
                                    <th>বকেয়া</th>
                                    <th>সময়</th>
                                    <th> একশন</th>
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