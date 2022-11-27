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
                        <li class="breadcrumb-item"><a href="{{ route('package.index') }}">Packages</a></li>
                        <li class="breadcrumb-item active">Add Package</li>
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
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add Package</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Package Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Package name">
                                        </div>
                                        <div class="form-group">
                                            <label for="period">Period <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="period"
                                                placeholder="Period">
                                        </div>
                                        <div class="form-group">
                                            <label for="amount">Package Amount<span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="amount"
                                                placeholder="Package Amount">
                                        </div>
                                        <div class="form-group">
                                            <label for="percentage">Total Percent (%)</label>
                                            <input type="text" class="form-control" id="percentage" placeholder="Total Percent">
                                        </div>
                                        <div class="form-group">
                                            <label for="details">Package Details</label>
                                            <textarea class="form-control" name="details" rows="3" id="details" placeholde="Package Details" ></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="daily_roi">Daily ROI</label>
                                            <input type="text" name="daily_roi" class="form-control" id="daily_roi" placeholder="Daily ROI">
                                        </div>
                                        <div class="form-group">
                                            <label for="weekly_roi">Weekly ROI <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="weekly_roi"
                                                placeholder="Weekly ROI">
                                        </div>
                                        <div class="form-group">
                                            <label for="monthly_roi">Monthly ROI</label>
                                            <input type="text" class="form-control" id="monthly_roi"
                                                placeholder="Monthly ROI">
                                        </div>
                                        <div class="form-group">
                                            <label for="monthly_roi">Yearly ROI</label>
                                            <input type="text" class="form-control" id="monthly_roi"
                                            placeholder="Yearly ROI">
                                        </div>
                                        <div class="form-group ">
                                            <label for="status" class=" col-form-label">Status<span class="text-danger">
                                                    *</span></label>
                                            <div class="col-sm-12">
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" value="1" checked="checked">
                                                    Active </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" value="0">
                                                    Inactive </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
    </section>
@endsection
