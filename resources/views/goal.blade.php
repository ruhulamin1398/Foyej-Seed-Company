@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

    <div class="card-header py-3  bg-abasas-dark ">
        <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">Set Your Sell Goal</a>
             </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('goalsupdate') }}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <span class="text-dark pl-4"> Daily</span>
                        <input type="text" name="daily" class="form-control mb-2" value={{$daily}}>
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-4"> Weekly</span>
                        <input type="text" name="weekly" class="form-control mb-2" value={{$weekly}}>
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> Monthly</span>
                        <input type="text" name="monthly" class="form-control mb-2" value={{$monthly}}>
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> Yearly</span>
                        <input type="text" name="yearly" class="form-control mb-2" value={{$yearly}}>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>







</div>





    @endsection