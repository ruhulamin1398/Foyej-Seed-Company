@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
 



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
  

        <div class="card-header py-3  bg-abasas-dark ">
            <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">  Expense list </a>
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
                    <thead class="bg-abasas-dark ">


                        <tr>
                            <th>#</th>
                            <th>Ref</th>
                            <th>Amount</th>
                            <th>Comment</th>
                            <th>Pay Time</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>
                            <th>#</th>
                            <th>Ref</th>
                            <th>Amount</th>
                            <th>Comment</th>
                            <th>Pay Time</th>
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