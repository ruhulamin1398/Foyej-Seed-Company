@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">Add Monthly Expense</a>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('monthly-expenses.store') }}">
                @csrf
                <div class="form-row align-items-center">



                    <div class="col-auto">

                        <span class="text-dark pl-2"> Month</span>
                        <input type="month" name="month" class="form-control mb-2">
                    </div>

                    <div class="col-auto">

                        <span class="text-dark pl-2"> Amount</span>
                        <input type="text" name="amount" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> Reason</span>
                        <input type="text" name="reason" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> Comment</span>
                        <input type="text" name="comment" class="form-control mb-2">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">Monthly Expense list</a>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark ">


                        <tr>
                            <th>#</th>
                            <th>Ref</th>
                            <th>Month</th>
                            <th>Amount</th>
                            <th>Comment</th>
                            <th>Pay Time</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>
                            <th>#</th>
                            <th>Ref</th>
                            <th>Month</th>
                            <th>Amount</th>
                            <th>Comment</th>
                            <th>Pay Time</th>
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($monthlies as $monthly)
                        @if($monthly->month==now()->format("Y-m"))
                        <?php $id = $monthly->id; ?>
                        <tr class="data-row">
                            <td>{{$i++}}</td>
                            <td>{{$monthly->user->name}}</td>
                            <td>{{$monthly->month}}</td>
                            <td>{{$monthly->amount}}</td>
                            <td>{{$monthly->comment}}</td>
                            <td>{{$monthly->created_at->format('M d Y h:i:s a')}}</td>
                        </tr>
                        @endif
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>





@endsection