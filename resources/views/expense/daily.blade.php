@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">দৈনিক খরচ</a>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('daily-expenses.store') }}">
                @csrf
                <div class="form-row align-items-center">
                


                    <div class="col-auto">

                        <span class="text-dark pl-2"> পরিমান</span>
                        <input type="number" name="amount" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> খরচের বিবরন</span>
                        <input type="text" name="reason" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2">মন্তব্য</span>
                        <input type="text" name="comment" class="form-control mb-2">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3">সাবমিট</button>
                    </div>

                </div>

            </form>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">খরচের লিস্ট </a>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark ">


                        <tr>
                            <th>#</th>
                            <th>রেফারেন্স</th>
                            <th>পরিমান</th>
                            <th>বিবরন</th>
                            <th>মন্তব্য</th>
                            <th>সময়</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>
                            <th>#</th>
                            <th>রেফারেন্স</th>
                            <th>পরিমান</th>
                            <th>বিবরন</th>
                            <th>মন্তব্য</th>
                            <th>সময়</th>
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($dailies as $daily)
                        <?php $id = $daily->id; ?>
                        <tr class="data-row">
                            <td>{{$i++}}</td>
                            <td>{{$daily->user->name}}</td>
                            <td>{{$daily->amount}}</td>
                            <td>{{$daily->reason}}</td>
                            <td>{{$daily->comment}}</td>
                            <td>{{$daily->created_at->format('M d Y h:i:s a')}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>





@endsection