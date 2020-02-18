@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-8 col-lg-8 col-md-8   ">


            <div class="card mb-4 shadow">

                         
        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand"> কোড প্রিন্ট করুন</a>
               
            </nav>
        </div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('barcode_print') }}">
                        @csrf
                        <div class="form-row align-items-center">

        

                            <div class="col-auto">
                                <span class="text-dark pl-2"> কোড</span>
                                <input type="text" name="id"  class="form-control mb-2" required >
                            </div>

                            <div class="col-auto">

                                <span class="text-dark pl-2"> পরিমান</span>
                                <input type="number" name="amount" class="form-control mb-2" required>
                            </div>


                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mt-3"  > সাবমিট</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>




            

        </div>

    </div>

    <!-- Content Row -->




    @endsection