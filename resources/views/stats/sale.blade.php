@extends('layout.app')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light"> অর্ডারের লিস্ট </a>
                <div>
                    <form method="get">
                        @csrf
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <input type="date" name="startDate" value={{$_GET["startDate"]}} class="form-control mb-2" id="inlineFormInput" required>
                            </div>
                            <div class="col-auto">
                                <input type="date" name="endDate" value={{$_GET["endDate"]}} class="form-control mb-2" id="inlineFormInput" required>
                            </div>


                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mt-3">সাবমিট</button>
                            </div>

                        </div>

                    </form>
                    </di>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
                            <th> অর্ডারের আইডি </th>
                            <th>ক্রেতা</th>
                            <th>মোট</th>
                            <th>তথ্য</th>
                            <th> একশন</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>
                            <th>#</th>
                            <th> অর্ডারের আইডি </th>
                            <th>ক্রেতা</th>
                            <th>মোট</th>
                            <th>তথ্য</th>
                            <th> একশন </th>
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($orders as $order )

                        <tr class="data-row">
                            <td>{{$i++}}</td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->customer->name}}</td>
                            <td>{{$order->total}}</td>


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
<!-- /Attachment Modal -->



@endsection