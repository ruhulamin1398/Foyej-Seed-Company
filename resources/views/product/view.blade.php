@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">




    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand">পণ্যের লিস্ট</a>
                <button class="btn btn-success " id="create-button">নতুন পণ্য</button>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>পণ্যের আইডি</th>
                            <th>নাম</th>
                            <th>ওজন</th>
                            <th>বিক্রয়</th>
                            <th> ক্যাটাগরি</th>
                            <th>মজুদ</th>
                            <th> ক্রয়মূল্য</th>
                            <th> লিমিট</th>
                            <th>মেয়াদ</th>
                            <th> একশন</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr> 

                            <th> পণ্যের আইডি</th>
                            <th> নাম</th>
                            <th> ওজন</th>
                            <th> বিক্রয়</th>
                            <th> ক্যাটাগরি</th>
                            <th> মজুদ</th>
                            <th>ক্রয়মূল্য</th>
                            <th> লিমিট</th>
                            <th> মেয়াদ</th>
                            <th> একশন</th>
                        </tr>

                    </tfoot>
                    <tbody>
                        <?php $id = 1 ?>
                        @foreach ($products as $product)
                        <?php $id = $product->id; ?>
                        <tr class="data-row">
                            <td class="iteration">{{$id}}</td>
                            <td id="viewName">{{$product->name}}</td>
                            <td id="viewCategoryId">{{$product->weight}}</td>
                            <td id="viewSell">{{$product->price}}</td>
                            <td id="viewProductTypeId">{{$product->category->name}}</td>
                            <td id="viewProductTypeId">{{$product->stock}}</td>
                            <td id="viewCost">{{$product->cost}}</td>
                            <td id="viewLowLimit">{{$product->low_limit}}</td>
                            <td id="viewexpiredate">{{$product->expire_date}}</td>



                            <td class="align-middle">
                                <button type="button" class="btn btn-success" id="edit-product-button" product-item-id={{$id}} value={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>


                                <form method="POST" action="{{ route('products.destroy',  $product->id )}} " id="delete-form-{{ $product->id }}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>





                                <button onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $product->id }}').submit();
			}
			else{
				event.preventDefault();
			}
			" class="btn btn-danger btn-sm btn-raised">
                                    <i class="fa fa-trash" aria-hidden="false">

                                    </i>
                                </button>



                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>



            </div>
        </div>
    </div>

</div>






<!-- Create new product -->
<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label "> নতুন পণ্য</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">

                <form method="POST" id="create-form" action="{{ route('products.store') }}">
                    @csrf


                    <div class="form-group">
                        <label for="productName">পণ্যের নাম</label>
                        <input type="text" name="name" class="form-control" id="productName" placeholder="পণ্যের নাম লিখুন" required>
                    </div>

                    <div class="form-group">
                        <label for="catagory_id"> পণ্যের ক্যাটাগরি</label>
                        <select class="form-control form-control" name="category_id" id="catagory_id" required>
                            <option value="1" selected="selected"> ক্যাটাগরি নির্বাচন</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}"> {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="product_type_id"> বিক্রয়ের ধরন</label>
                        <select class="form-control form-control" name="product_type_id" id="product_type_id" required>

                            <option value="1" selected="selected"> বিক্রয়ের ধরন নির্বাচন</option>
                            @foreach ($productTypes as $productType)
                            <option value="{{$productType->id}}"> {{$productType->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price"> ওজন</label>
                        <input type="number" name="weight" class="form-control" id="weight" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="cost"> ক্রয়মূল্য</label>
                        <input type="number" name="cost" class="form-control" id="cost" placeholder="" required>
                    </div>


                    <div class="form-group">
                        <label for="price"> বিক্রয় মূল্য</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="lowLimit"> লিমিট </label>
                        <input type="number" name="low_limit" class="form-control" id="lowLimit" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="lowLimit"> মেয়াদ </label>
                        <input type="date" name="expire_date" class="form-control" id="lowLimit" placeholder="" >
                    </div>


                    <button type="submit" class="btn btn-primary">সাবমিট</button>



                </form>



            </div>

        </div>
    </div>
</div>
</div>
<!-- /Create new product-->





<!-- edit  product -->
<div class="modal fade" id="edit-product-modal" tabindex="-1" role="dialog" aria-labelledby="edit-product-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-product-modal-label ">পণ্য সংশোধন</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">

                <form method="POST" id="create-form" action="{{ route('productsupdate' ) }}">

                    @csrf


                    <div class="form-group">
                        <label for="editProductId2">আইডি</label>
                        <input type="text" class="form-control" id="editProductId2" disabled>
                    </div>

                    <div class="form-group">

                        <input type="text" name="id" class="form-control" id="editProductId" placeholder="Enter product name" hidden>
                    </div>

                    <div class="form-group">
                        <label for="editProductName"> পণ্যের নাম</label>
                        <input type="text" name="name" class="form-control" id="editProductName" placeholder="Enter product name"required>
                    </div>

                    <div class="form-group">
                        <label for="editProductCatagoryId">পণ্যের ক্যাটাগরি</label>
                        <select class="form-control form-control" name="category_id" id="editProductCatagoryId"required>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="editProductTypeId">পণ্যের ধরন</label>
                        <select class="form-control form-control" name="product_type_id" id="editProductTypeId"required>


                        </select>
                    </div>


                    <div class="form-group">
                        <label for="editProductWeight">ওজন</label>
                        <input type="number" name="weight" class="form-control" id="editProductWeight" placeholder="120"required>
                    </div>

                    <div class="form-group">
                        <label for="editProductCost"> ক্রয়মূল্য</label>
                        <input type="number" name="cost" class="form-control" id="editProductCost" placeholder=""required>
                    </div>

                    <div class="form-group">
                        <label for="editProductPrice">বিক্রয় মূল্য</label>
                        <input type="number" name="price" class="form-control" id="editProductPrice" placeholder="120"required>
                    </div>

                    <div class="form-group">
                        <label for="editLowLimit"> লিমিট </label>
                        <input type="number" name="low_limit" class="form-control" id="editLowLimit" placeholder=""required>
                    </div>


                    <button type="submit" class="btn btn-primary"> সাবমিট</button>



                </form>



            </div>

        </div>
    </div>
</div>
</div>
<!-- /edit  product-->




@endsection