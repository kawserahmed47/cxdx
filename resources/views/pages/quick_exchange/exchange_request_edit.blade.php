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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Quick Exchange</a></li>
                        <li class="breadcrumb-item active">Exchange Request</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0"></h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href=" " class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="border_preview">
                                    <form
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="125fa4a2a28a6f0e585fdc231b362b1e">
                                        <input type="hidden" name="request_id" value="17" style="display:none;">
                                        <div class="form-group row">
                                            <label for="user_send_tx_hash" class="col-sm-3 col-form-label">User Send
                                                Transaction Hash<i class="text-danger">*</i></label>
                                            <div class="col-sm-8 d-flex">
                                                <input name="user_send_tx_hash"
                                                    value="0x2e4cde7859b66b5bc25cb3c19e0e507e90dbe98dcb7d4a4db5ba492d4bee7cb9"
                                                    class="form-control" type="text" id="copyed1" readonly="">
                                                <button type="button" class="btn btn-warning copy1">Copy</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="payment_wallet" class="col-sm-3 col-form-label">Payment Wallet<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8 d-flex">
                                                <input name="payment_wallet"
                                                    value="0xDaC33085A7f20dFa3c5cc0e121a618c50053513cd" class="form-control"
                                                    type="text" id="copyed2" readonly="">
                                                <button type="button" class="btn btn-warning copy2">Copy</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="payment_amount" class="col-sm-3 col-form-label">Payment Amount<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8 d-flex">
                                                <input name="payment_amount" value="6201.21080000" class="form-control"
                                                    type="text" id="payment_amount" readonly="">
                                                <button type="button" class="btn btn-default">USD</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="payment_hash" class="col-sm-3 col-form-label">Payment Hash<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8 d-flex">
                                                <input name="payment_hash" class="form-control" type="text"
                                                    id="payment_hash" required="">
                                            </div>
                                        </div>
                                        <input type="hidden" id="document" value="">
                                        <div class="form-group row">
                                            <label for="payment_hash" class="col-sm-3 col-form-label">Document</label>
                                            <div class="col-sm-8 ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-3 col-form-label">Status<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8 d-flex">
                                                <div class="col-sm-8">
                                                    <label class="radio-inline">
                                                        <input type="radio" name="status" value="1">
                                                        Paid
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" name="status" value="2">
                                                        Reject
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12" align="center">
                                                <a href="{{url('/')}}"
                                                    class="btn btn-primary  w-md m-b-5">Cancel</a>
                                                <button type="submit" class="btn btn-success  w-md m-b-5">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
