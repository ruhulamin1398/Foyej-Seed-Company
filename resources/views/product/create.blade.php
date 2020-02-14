@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> নতুন পণ্য </h6>
        </div>     <div class="card-body">



            <form method="POST" id="create-form" action="{{ route('products.store') }}">
                @csrf


                <div class="form-group">
                    <label for="productName"> পণ্যের নাম</label>
                    <input type="text" name="name" class="form-control" id="productName" placeholder="" required>
                </div>

                <div class="form-group">
                    <label for="catagory_id">পণ্যের ক্যাটাগরি</label>
                    <select class="form-control form-control" name="category_id" id="catagory_id" required>
                        <option value="1" selected="selected">ক্যাটাগরি নির্বাচন </option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}"> {{$category->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="product_type_id">পণ্যের ধরণ</label>
                    <select class="form-control form-control" name="product_type_id" id="product_type_id" required>

                        <option value="1" selected="selected">পণ্যের ধরণ নির্বাচন</option>
                        @foreach ($productTypes as $productType)
                        <option value="{{$productType->id}}"> {{$productType->name}}</option>
                        @endforeach
                    </select>
                </div>



                <div class="form-group">
                    <label for="price"> ওজন</label>
                    <input type="number" name="weight" class="form-control" id="weight" placeholder="">
                </div>
                


                <div class="form-group">
                    <label for="price_per_unit"> প্রতিটির মুল্য </label>
                    <input type="number" name="price_per_unit" class="form-control" id="price_per_unit" placeholder="">
                </div>

                <div class="form-group">
                    <label for="lowLimit">লিমিট </label>
                    <input type="number" name="low_limit" class="form-control" id="lowLimit" placeholder="">
                </div>


                <button type="submit" class="btn btn-primary"> সাবমিট</button>



            </form>



        </div>
    </div>




</div>




@endsection