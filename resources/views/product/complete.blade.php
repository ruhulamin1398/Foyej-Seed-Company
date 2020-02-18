@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">




    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand">প্রোডাক্ট লিস্ট</a>
               
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>প্রোডাক্ট আইডি</th>
                            <th>নাম</th>
                            <th>ওজন</th>
                            <th>বিক্রয়</th>
                            <th>স্টক</th>
                            <th>ক্রয়মূল্য</th>
                            <th>লিমিট</th>
                            <th>মেয়াদ</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>

                        <th>প্রোডাক্ট আইডি</th>
                            <th>নাম</th>
                            <th>ওজন</th>
                            <th>বিক্রয়</th>
                            <th>স্টক</th>
                            <th>ক্রয়মূল্য</th>
                            <th>লিমিট</th>
                            <th>মেয়াদ</th>

                        </tr>

                    </tfoot>
                    <tbody>
                        <?php $id = 1 ?>
                        @foreach ($products as $product)
                        <?php $id = $product->id; ?>
                        <tr class="data-row">
                            <td class="iteration">{{$id}}</td>
                            <td id="viewName">{{$product->name}}</td>
                            <td id="viewCategoryId">{{$product->weight}}</td>
                            @if( $product->type ==2)
                            <td id="viewSell">{{$product->price_per_unit}}</td>
                            @else
                            
                            <td id="viewSell">{{$product->sell}}</td>
                            @endif

                            <td id="viewProductTypeId">{{$product->stock}}</td>
                            <td id="viewCost">{{$product->cost}}</td>
                            <td id="viewLowLimit">{{$product->low_limit}}</td>
                            <td id="viewexpiredate">{{$product->expire_date}}</td>





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