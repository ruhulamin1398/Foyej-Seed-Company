@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">


        <div class="card-header py-3 bg-abasas-dark">
            <nav class="navbar navbar-dark ">
                <a class="navbar-brand"> বিক্রয়ের ধরন</a>
            </nav>
        </div>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark">


                        <tr>
                            <th>#</th>
                            <th> ধরন</th>
                            <th> বিবরন</th>
                            <th> পণ্য</th>
                            <th> একশন</th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                        <tr>
                            <th>#</th>
                            <th> ধরন</th>
                            <th> বিবরন</th>
                            <th> পণ্য</th>
                            <th> একশন</th>
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($productTypes as $productTypes )
                        <?php $id = $productTypes->id; ?>
                        <tr class="data-row">
                            <td class="iteration">{{$i++}}</td>
                            <td class="  word-break name">{{$productTypes ->name}}</td>
                            <td class=" word-break description ">{{$productTypes ->description}}</td>

                            <td>{{$productTypes ->products->count()}}</td>


                            <td class="align-middle">
                                <button type="button" class="btn btn-success" id="edit-item" data-item-id={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>

                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<!-- Attachment Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label "> বিক্রয়ের ধরন সংশোধন</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="edit-form" class="form-horizontal" method="POST" action="{{route('product_typeupdate')}}">
                    @csrf



                    <!-- id -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-id"> আইডি </label>
                        <input type="text" name="id" class="form-control" id="modal-input-id" required readonly>
                    </div>
                    <!-- /id -->
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name"> ধরন</label>
                        <input type="text" name="name" class="form-control" id="modal-input-name" required autofocus>
                    </div>
                    <!-- /name -->
                    <!-- description -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-description"> বিবরন</label>
                        <input type="text" name="description" class="form-control" id="modal-input-description" required>
                    </div>

                    <div class="form-group">

                        <input type="submit" value="' সাবমিট'" class="form-control btn btn-success">
                    </div>
                    <!-- /description -->




                </form>
            </div>

        </div>
    </div>
</div>
</div>
<!-- /Attachment Modal -->



@endsection