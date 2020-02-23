@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">




    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-abasas-dark text-light">
            <nav class="navbar navbar-light">
                <a class="navbar-brand">কাস্টমার বকেয়া গ্রহন লিস্ট</a>
               
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>পেমেন্ট আইডি</th>
                            <th>কাস্টমার</th>
                            <th>রেফারেন্স</th>
                            <th>পূর্বের বকেয়া</th>
                            <th>পরিমান</th>
                            
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                    <tr>
                            <th>পেমেন্ট আইডি</th>
                            <th>কাস্টমার</th>
                            <th>রেফারেন্স</th>
                            <th>পূর্বের বকেয়া</th>
                            <th>পরিমান</th>
                            
                        </tr>

                    </tfoot>
                    <tbody>
                        <?php $id = 1 ?>
                        @foreach ($customerCashReceives as $customerCashReceive)
                        <?php $id = $customerCashReceive->id; ?>
                        <tr class="data-row">
                            <td class="iteration">{{$id}}</td>
                            <td id=""> <a href="{{ route('customers.show',  $customerCashReceive->customer->id )}}">{{$customerCashReceive->customer->name}}</a></td>
                            <td id=""> {{$customerCashReceive->user->name}}</td>                           
                            <td id="">{{$customerCashReceive->pre_due}}</td>
                            <td id="viewProductTypeId">{{$customerCashReceive->amount}}</td>





                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>
        </div>
    </div>

</div>






</div>
<!-- /Create new product-->





</div>
<!-- /edit  product-->




@endsection