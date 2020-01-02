@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add New Catagory</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('catagories.store') }}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <span class="text-dark pl-2"> Catagory Name</span>
                        <input type="text" name="name" class="form-control mb-2" id="inlineFormInput">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> Description</span>
                        <input type="text" name="description" size="55" class="form-control mb-2" id="inlineFormInput">
                    </div>

                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </div>

                </div>

            </form>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Catagory list</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="thead-dark">


                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Products</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Products</th>
                            <th>Action</th>
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($catagories as $catagory)
                        <?php $id = $catagory->id; ?>
                        <tr class="data-row">
                            <td class="iteration">{{$i++}}</td>
                            <td class="  word-break name">{{$catagory->name}}</td>
                            <td class=" word-break description ">{{$catagory->description}}</td>

                            <td>{{'121'}}</td>


                            <td class="align-middle">
                                <button type="button" class="btn btn-success" id="edit-item" data-item-id={{$id}}>edit</button>


                                <form method="POST" action="{{ route('catagories.destroy',  $catagory->id )}} " id="delete-form-{{ $catagory->id }}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>




                                <button onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $catagory->id }}').submit();
			}
			else{
				event.preventDefault();
			}
			" class="btn btn-danger btn-sm btn-raised">
                                    <i class="fa fa-trash" aria-hidden="true">

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


<!-- Attachment Modal -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title bg-dark" id="edit-modal-label ">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="edit-form" class="form-horizontal" method="POST" action="{{route('catagoriesupdate')}}">
                    @csrf



                    <!-- id -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-id">Id </label>
                        <input type="text" name="id" class="form-control" id="modal-input-id" required readonly>
                    </div>
                    <!-- /id -->
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-name">Name</label>
                        <input type="text" name="name" class="form-control" id="modal-input-name" required autofocus>
                    </div>
                    <!-- /name -->
                    <!-- description -->
                    <div class="form-group">
                        <label class="col-form-label" for="modal-input-description">Email</label>
                        <input type="text" name="description" class="form-control" id="modal-input-description" required>
                    </div>

                    <div class="form-group">

                        <input type="submit" value="submit" class="form-control btn btn-success">
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