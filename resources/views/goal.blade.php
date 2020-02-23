@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

    <div class="card-header py-3  bg-abasas-dark ">
        <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light"> বিক্রয় লক্ষ্যমাত্রা নির্ধারন করুন            
                </a>
             </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('goalsupdate') }}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <span class="text-dark pl-4"> প্রতিদিন </span>
                        <input type="text" name="daily" class="form-control mb-2" value={{$daily}}>
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-4"> সাপ্তাহিক</span>
                        <input type="text" name="weekly" class="form-control mb-2" value={{$weekly}}>
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2">মাসিক</span>
                        <input type="text" name="monthly" class="form-control mb-2" value={{$monthly}}>
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> বার্ষিক</span>
                        <input type="text" name="yearly" class="form-control mb-2" value={{$yearly}}>
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3">সাবমিট </button>
                    </div>

                </div>

            </form>
        </div>
    </div>







</div>





    @endsection