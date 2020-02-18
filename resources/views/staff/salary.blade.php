@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">বেতন প্রধান</a>
            </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('salaries.store') }}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">

                        <span class="text-dark pl-2"> কর্মচারী </span>
                        <select name='staff' class="form-control mb-2">
                            @foreach($staffs as $staff)
                            <option value="{{$staff->id}}">{{$staff->name}}</option>
                            @endforeach
                        </select>

                    </div>
                

                    <div class="col-auto">

                        <span class="text-dark pl-2"> মাস</span>
                        <input type="month" name="month" class="form-control mb-2">
                    </div>

                    <div class="col-auto">

                        <span class="text-dark pl-2"> বেতন</span>
                        <input type="text" name="price" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> মন্তব্য</span>
                        <input type="text" name="comment" class="form-control mb-2">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3">সাবমিট </button>
                    </div>

                </div>

            </form>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">বেতন লিস্ট</a>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark ">


                        <tr>
                            <th>#</th>
                            <th>কর্মচারী</th>
                            <th>রেফারেন্স</th>
                            <th>মাস</th>
                            <th>বেতন</th>
                            <th>মন্তব্য</th>
                            <th>তারিখ</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>
                            <th>#</th>
                            <th>কর্মচারী</th>
                            <th>রেফারেন্স</th>
                            <th>মাস</th>
                            <th>বেতন</th>
                            <th>মন্তব্য</th>
                            <th>তারিখ</th> 
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($salaries as $salary)
                        <?php $id = $salary->id; ?>
                        <tr class="data-row">
                            <td>{{$i++}}</td>
                            <td>{{$salary->staff->name}}</td>
                            <td>{{$salary->user->name}}</td>
                            <td>{{$salary->month}}</td>
                            <td>{{$salary->price}}</td>
                            <td>{{$salary->comment}}</td>
                            <td>{{$salary->created_at}}</td>






                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>





@endsection