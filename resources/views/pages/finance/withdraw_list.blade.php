@extends('master')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Finance</a></li>
                        <li class="breadcrumb-item active">Withdraw List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Withdraw List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>User ID</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Wallet Id</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>27th February 2021 </td>
                                        <td><strong class="badge badge-danger"><i class="fa fa-times"></i></strong></td>
                                        <td><button class="btn btn-sm btn-info" data-toggle="modal"
                                                data-target="#modal-default" type="button">Information</button> </td>
                                    </tr>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>27th February 2021 </td>
                                        <td><strong class="badge badge-success"><i class="fa fa-check"></i></strong></td>
                                        <td><button class="btn btn-sm btn-info" data-toggle="modal"
                                                data-target="#modal-default" type="button">Information</button> </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>User ID</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Wallet Id</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>



    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table>
                        <tbody>
                            <tr>
                                <td><strong>Name : </strong></td>
                                <td id="name">John Doe Deo</td>
                            </tr>
                            <tr>
                                <td><strong>Email Address : </strong></td>
                                <td id="email">rdmvaijah@gmail.com</td>
                            </tr>
                            <tr>
                                <td><strong>Mobile : </strong></td>
                                <td id="phone">88016354875547</td>
                            </tr>
                            <tr>
                                <td><strong>User ID : </strong></td>
                                <td id="user_id">B0TASK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection
