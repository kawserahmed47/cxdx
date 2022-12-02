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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Payment Gateway</a></li>
                        <li class="breadcrumb-item active">Gourl</li>
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

                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 font-weight-600 mb-0">Edit Payment Gateway</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href="" class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group row">
                                    <div class="col-form-label col-sm-4">
                                        <label class="col-form-label ">Callback Url</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="copyed1" value=""
                                                readonly="">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary copy1" type="button">Copy</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="csrf_test_name" value="482a957e07d50a2b73e0c0be68a80d9e">
                                    <input type="hidden" name="id" value="1" style="display:none;">
                                    <div class="form-group row">
                                        <label for="agent" class="col-sm-4 col-form-label">Gateway Name</label>
                                        <div class="col-sm-6">
                                            <input name="agent" value="Bitcoin" class="form-control" type="text"
                                                id="agent">
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="https://gourl.io/view/registration" target="_blank">Create Account</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="public_key" class="col-sm-4 col-form-label">Public Key <i
                                                class="text-danger">*</i></label>
                                        <div class="col-sm-6">
                                            <input name="public_key"
                                                value="25654AAo79c3Bitcoin77BTCPUBqwIefT1j9fqqMwUtMI0huVL"
                                                class="form-control" type="text" id="public_key" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="private_key" class="col-sm-4 col-form-label">Private Key <i
                                                class="text-danger">*</i></label>
                                        <div class="col-sm-6">
                                            <input name="private_key"
                                                value="25654AAo79c3Bitcoin77BTCPRV0JG7w3jg0Tc5Pfi34U8o5JE"
                                                class="form-control" type="text" id="private_key" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">Status</label>
                                        <div class="col-sm-6 pt-2">
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="1" checked="checked">
                                                Active </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="0">
                                                Inactive </label>
                                        </div>
                                    </div>
                                    <div class="row" align="center">
                                        <div class="col-sm-12 col-sm-offset-3">
                                            <a href="{{ url('/') }}" class="btn btn-primary  w-md m-b-5">Cancel</a>
                                            <button type="submit" class="btn btn-success  w-md m-b-5">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
    </section>
@endsection
