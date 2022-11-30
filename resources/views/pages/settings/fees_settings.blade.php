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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Settings</a></li>
                        <li class="breadcrumb-item active">Fees Settings</li>
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
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 font-weight-600 mb-0">Fees Setting</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href=" " class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="panel-body">
                                <div class="border_preview">
                                    <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-lg-4">
                                                <label>Select Level <span class="text-danger"> *</span></label>
                                                <select class="form-control" name="level" required="">
                                                    <option value="">--Select Level--</option>
                                                    <option value="deposit">Deposit</option>
                                                    <option value="transfer">Transfer</option>
                                                    <option value="withdraw">Withdraw</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-4">
                                                <label>Fees (%) <span class="text-danger"> *</span></label>
                                                <input type="text" class="form-control" name="fees" required="">
                                            </div>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->




                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 font-weight-600 mb-0">Fees Setting</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href=" " class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Level</th>
                                            <th>Fees</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>transfer</td>
                                            <td class="text-right">1%</td>
                                            <td>
                                                <a href="https://nishuedemo.bdtask-demo.com/backend/setting/delete_fees_setting/5"
                                                    onclick="return confirm('Are You Sure ? ')"
                                                    class="btn btn-danger btn-sm submit-disable" data-toggle="tooltip"
                                                    data-placement="right" title="Delete "><i class="fas fa-trash-alt"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>deposit</td>
                                            <td class="text-right">1%</td>
                                            <td>
                                                <a href="https://nishuedemo.bdtask-demo.com/backend/setting/delete_fees_setting/6"
                                                    onclick="return confirm('Are You Sure ? ')"
                                                    class="btn btn-danger btn-sm submit-disable" data-toggle="tooltip"
                                                    data-placement="right" title="Delete "><i class="fas fa-trash-alt"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>deposit</td>
                                            <td class="text-right">1%</td>
                                            <td>
                                                <a href="https://nishuedemo.bdtask-demo.com/backend/setting/delete_fees_setting/7"
                                                    onclick="return confirm('Are You Sure ? ')"
                                                    class="btn btn-danger btn-sm submit-disable" data-toggle="tooltip"
                                                    data-placement="right" title="Delete "><i class="fas fa-trash-alt"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
    </section>
@endsection
