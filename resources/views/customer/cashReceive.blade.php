@extends('layout.app')
@section('content')


<!-- Content Row -->
<div class="container-fluid ">

    <div class="row ">

        <!-- main body start -->
        <div class="col-xl-8 col-lg-8 col-md-8   ">


            <div class="card mb-4 shadow">

                <div class="card-header bg-abasas-dark py-3">
                    <nav class="navbar navbar-dark">
                        <h6 class="m-0 font-weight-bold ">বকেয়া গ্রহন</h6>
                        <button class="btn btn-success " id="create-button"> <a href="{{ route('customer_cash_receive_all') }} " class="text-light">বকেয়া গ্রহনের লিস্ট</a> </button>

                    </nav>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('customer_cash_receive_store') }}">
                        @csrf
                        <div class="form-row align-items-center">

                            <div class="col-auto">
                                <input type="text" name="customer_id" id="CustomerCashcustomerId" value=0 class="form-control mb-2" hidden>
                            </div>

                            <div class="col-auto">
                                <input type="text" name="pre_due" id="CustomerCashcustomerPreviousDue" value=0 class="form-control mb-2" hidden>
                            </div>

                            <div class="col-auto">
                                <span class="text-dark pl-2"> পরিমান</span>
                                <input type="text" id="CustomerCashAmount" name="amount" class="form-control mb-2" required>
                            </div>

                            <div class="col-auto">

                                <span class="text-dark pl-2"> মন্তব্য</span>

                                <input type="text" name="comment" class="form-control mb-2">
                            </div>


                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mt-3" id="customerCashReceiveSubmit" disabled="true">সাবমিট</button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>






        </div>

        <!-- Left Sidebar Start -->
        <div class="col-xl-4 col-lg-4 col-md-4   ">



            <!-- Supplier Area Start -->

            <div class="col-xl-12 col-md-12 mb-4  text-center  bg-abasas-dark p-2 ">
                <div class="card border-none   bg-abasas-dark  h-100 p-2">
                    <h3 class="text-white"> ক্রেতা</h3>

                    <div class="card-body">
                        <div class="row no-gutters ">


                            <form method="GET" id="cashReceiveCustomerForm">
                                @csrf
                                <div class="form-row ">
                                    <div class="col-auto">
                                        <form method="post">


                                            <div class=" col-auto">
                                                <label class="text-light" for="cashReceiveCustomerPhoneField">ক্রেতার নাম্বার</label>
                                                <input type="text" name="phone" id="cashReceiveCustomerPhoneField" class="form-control mb-2">
                                                <div class="text-danger text-small" id="cashReceiveCustomerPhoneFieldLength"> সঠিক নাম্বার দিন</div>
                                                <div class="text-danger text-small" id="cashReceiveCustomerPhoneFieldNotFound"> ক্রেতা পাওয়া যায়নি </div>
                                            </div>
                                            <input type=" number" name="efsd" hidden ">
                  </form>
                  </div>
                </div>
              </form>

            </div>
            <div class=" text-samall text-danger" id="purchasePageAddSupplierError">
                                    </div>

                                    <div id="cashReceiveCustomerView">
                                        <div id="cashReceiveCustomerName" class="text-light font-weight-bold"></div>
                                        <div id="cashReceiveCustomerPhone" class="text-light "></div>
                                        <div id="purchasePageSupplieCompany" class="text-light "></div>
                                        <div id="cashReceiveCustomerDue" class="text-danger font-weight-bold"></div>
                                    </div>


                                </div>

                        </div>
                    </div>
                    <!-- Growth Card Example -->
                </div>




                <!-- sumit Area Start -->




            </div>
            <!-- supplier area End  -->


        </div>
    </div>

    <!-- Content Row -->




    @endsection