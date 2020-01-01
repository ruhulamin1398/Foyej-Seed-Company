@extends('layout.app')
@section('content')




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <?php $i=1 ?>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                    <tbody >
                    <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                        <tr>
                            <td>{{$i}}</td>
                            <td>ruhul+{{$i}}</td>
                            <td>hah</td>
                            <td>adsfsafsdafs</td>
                            <td>asfsddsfsafsafsja</td>
                            <td>asfsddsfsafsafsja</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div>
        <p id="hide">
            jhdjsfhsjahfdkjsah pkdsfjsdaf
            dsjfasjdfas
            ]sadfsdja
            fsakjfdhds
            f</p>

            <button class="btn btn-danger" id="btn">
            click</button>
        <button class="btn btn-success" id="btn2">
            click</button>
        <button class="btn btn-dark" id="btn3">
            click</button>
    </div>
</div>


@endsection