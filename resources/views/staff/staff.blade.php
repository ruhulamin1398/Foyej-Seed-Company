@extends('layout.app')
@section('content')





<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card mb-4 shadow">

    <div class="card-header py-3  bg-abasas-dark ">
        <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">নতুন কর্মচারী</a>
             </nav>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('staffs.store') }}">
                @csrf
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <span class="text-dark pl-4"> কর্মচারীর নাম</span>
                        <input type="text" name="name" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-4">নাম্বার</span>
                        <input type="text" name="phone" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> ঠিকানা</span>
                        <input type="text" name="address" class="form-control mb-2">
                    </div>
                    <div class="col-auto">

                        <span class="text-dark pl-2"> বেতন</span>
                        <input type="text" name="salary" class="form-control mb-2">
                    </div>

                    <div class="col-auto">

                        <span class="text-dark pl-2"> পোস্ট</span>
                        <select name='post' class="form-control mb-2">
                            <option value="ম্যানাজার">ম্যানাজার</option>
                            <option value="অন্যান্য">অন্যান্য</option>
                        </select>

                    </div>


                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mt-3">সাবমিট</button>
                    </div>

                </div>

            </form>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3  bg-abasas-dark ">
        <nav class="navbar navbar-dark">
                <a class="navbar-brand text-light">কর্মচারী লিস্ট</a>
             </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead class="bg-abasas-dark ">


                        <tr>
                            <th>#</th>
                            <th>নাম</th>
                            <th>নাম্বার</th>
                            <th> ঠিকানা</th>
                            <th> বেতন</th>
                            <th> পোস্ট</th>
                            <th> একশন </th>
                        </tr>
                    </thead>
                    <tfoot class="bg-abasas-dark">
                    <tr>
                            <th>#</th>
                            <th>নাম</th>
                            <th>নাম্বার</th>
                            <th> ঠিকানা</th>
                            <th> বেতন</th>
                            <th> পোস্ট</th>
                            <th> একশন </th>
                        </tr>

                    </tfoot>
                    <tbody>

                        <?php $i = 1; ?>
                        @foreach ($staffs as $staff)
                        <?php $id = $staff->id; ?>
                        <tr class="data-row">
                            <td id=""  >{{$i++}}</td>
                            <td id="staffName" >{{$staff->name}}</td>
                            <td id="staffPhone" >{{$staff->phone}}</td>
                            <td id="staffAddress" >{{$staff->address}}</td>
                            <td id="staffSalary" >{{$staff->salary}}</td>
                            <td id="staffPost" >{{$staff->post}}</td>




                            <td class="align-middle">
                                <button type="button" class="btn btn-success" id="edit-staff-button" data-item-id={{$id}} value ={{$id}}> <i class="fa fa-edit" aria-hidden="false"> </i></button>


                                <form method="POST" action="{{ route('staffs.destroy',  $staff->id )}} " id="delete-form-{{ $staff->id }}" style="display:none; ">
                                    {{csrf_field() }}
                                    {{ method_field("delete") }}
                                </form>




                                <button onclick="if(confirm('are you sure to delete this')){
				document.getElementById('delete-form-{{ $staff->id }}').submit();
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



<!-- Attachment Modal -->
<div class="modal fade" id="staff-edit-modal" tabindex="-1" role="dialog" aria-labelledby="staff-edit-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="edit-modal-label ">কর্মচারী সংশোধন</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="attachment-body-content">
                <form id="edit-form" class="form-horizontal" method="POST" action="{{route('staffsupdate')}}">
                    @csrf



                    <!-- id -->
                    <div class="form-group">
                        <label class="col-form-label" for="StaffEditId"> আইডি </label>
                        <input type="text" name="id" class="form-control" id="StaffEditId" required readonly>
                    </div>
                    <!-- /id -->
                    <!-- name -->
                    <div class="form-group">
                        <label class="col-form-label" for="editModalStaffName">নাম </label>
                        <input type="text" name="name" class="form-control" id="editModalStaffName" required >
                    </div>
                    <!-- /name -->


                
                    <!-- phone -->
                    <div class="form-group">
                        <label class="col-form-label" for="editModalStaffPhone">নাম্বার </label>
                        <input type="text" name="phone" class="form-control" id="editModalStaffPhone" required >
                    </div>
                    <!-- /phone -->

                    <!-- Address -->
                    <div class="form-group">
                        <label class="col-form-label" for="editModalStaffAddress">ঠিকানা </label>
                        <input type="text" name="address" class="form-control" id="editModalStaffAddress" required >
                    </div>
                    <!-- /Address -->

                    <!-- Salary -->
                    <div class="form-group">
                        <label class="col-form-label" for="editModalStaffSalary">বেতন </label>
                        <input type="text" name="salary" class="form-control" id="editModalStaffSalary" required >
                    </div>
                    <!-- /Salary -->



                    <!-- Post -->
                    <div class="form-group">
                        <label class="col-form-label" for="editModalStaffSalary">পোস্ট</label>
                        <select name='post' class="form-control mb-2">
                            <option value="ম্যানাজার">ম্যানাজার</option>
                            <option value="অন্যান্য">অন্যান্য</option>
                        </select>
                    </div>
                    <!-- /Post -->


            



                    <div class="form-group">

                        <input type="submit" value="সাবমিট" class="form-control btn btn-success">
                    </div>
                    <!-- /description -->
                



                </form>
            </div>

        </div>
    </div>
</div>


    @endsection