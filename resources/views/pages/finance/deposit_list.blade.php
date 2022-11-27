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
                        <li class="breadcrumb-item active">Deposit List</li>
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
                            <h3 class="card-title">Deposit List</h3>
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
                                        <th>Fees</th>
                                        <th>Comments</th>
                                        <th>Date</th>
                                        <th>Action/Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>
                                            <b>OM Name:</b> Demo1<br>
                                            <b>OM Phone No:</b> +8801317584839<br>
                                            <b>Transaction No:</b> 1212<br>
                                            <b>ID Card No:</b> 1212
                                        </td>
                                        <td>27th February 2021</td>
                                        <td><strong class="text-success"><i class="fa fa-check"></i></strong></td>
                                    </tr>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>
                                            <b>OM Name:</b> Demo1<br>
                                            <b>OM Phone No:</b> +8801317584839<br>
                                            <b>Transaction No:</b> 1212<br>
                                            <b>ID Card No:</b> 1212
                                        </td>
                                        <td>27th February 2021</td>
                                        <td><strong class="text-success"><i class="fa fa-check"></i></strong></td>
                                    </tr>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>
                                            <b>OM Name:</b> Demo1<br>
                                            <b>OM Phone No:</b> +8801317584839<br>
                                            <b>Transaction No:</b> 1212<br>
                                            <b>ID Card No:</b> 1212
                                        </td>
                                        <td>27th February 2021</td>
                                        <td><strong class="text-success"><i class="fa fa-check"></i></strong></td>
                                    </tr>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>
                                            <b>OM Name:</b> Demo1<br>
                                            <b>OM Phone No:</b> +8801317584839<br>
                                            <b>Transaction No:</b> 1212<br>
                                            <b>ID Card No:</b> 1212
                                        </td>
                                        <td>27th February 2021</td>
                                        <td><strong class="text-success"><i class="fa fa-check"></i></strong></td>
                                    </tr>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>
                                            <b>OM Name:</b> Demo1<br>
                                            <b>OM Phone No:</b> +8801317584839<br>
                                            <b>Transaction No:</b> 1212<br>
                                            <b>ID Card No:</b> 1212
                                        </td>
                                        <td>27th February 2021</td>
                                        <td><strong class="text-success"><i class="fa fa-check"></i></strong></td>
                                    </tr>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>
                                            <b>OM Name:</b> Demo1<br>
                                            <b>OM Phone No:</b> +8801317584839<br>
                                            <b>Transaction No:</b> 1212<br>
                                            <b>ID Card No:</b> 1212
                                        </td>
                                        <td>27th February 2021</td>
                                        <td><strong class="text-success"><i class="fa fa-check"></i></strong></td>
                                    </tr>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>
                                            <b>OM Name:</b> Demo1<br>
                                            <b>OM Phone No:</b> +8801317584839<br>
                                            <b>Transaction No:</b> 1212<br>
                                            <b>ID Card No:</b> 1212
                                        </td>
                                        <td>27th February 2021</td>
                                        <td><strong class="text-success"><i class="fa fa-check"></i></strong></td>
                                    </tr>

                                    <tr>
                                        <td>#1</td>
                                        <td>B0TASK</td>
                                        <td>55</td>
                                        <td>phone</td>
                                        <td>0.55</td>
                                        <td>
                                            <b>OM Name:</b> Demo1<br>
                                            <b>OM Phone No:</b> +8801317584839<br>
                                            <b>Transaction No:</b> 1212<br>
                                            <b>ID Card No:</b> 1212
                                        </td>
                                        <td>27th February 2021</td>
                                        <td><strong class="text-success"><i class="fa fa-check"></i></strong></td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>User ID</th>
                                        <th>Amount</th>
                                        <th>Payment Method</th>
                                        <th>Fees</th>
                                        <th>Comments</th>
                                        <th>Date</th>
                                        <th>Action/Status</th>
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
@endsection
