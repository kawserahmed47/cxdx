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
                        <li class="breadcrumb-item"><a href="{{ route('exchangeList') }}">Exchange</a></li>
                        <li class="breadcrumb-item active">Local Currency</li>
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

                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 font-weight-600 mb-0">Local Currency</h6>
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
                                <div class="border_preview">
                                    <form action="#backend/currency/local_currency"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="10aa26217fecf2d4e4e7e0dd70c73bde">
                                        <input type="hidden" name="currency_id" value="1" style="display:none;">
                                        <div class="form-group row">
                                            <label for="currency_name" class="col-sm-4 col-form-label">Currency Name<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="currency_name" value="Indian Rupee" class="form-control"
                                                    type="text" id="currency_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="currency_iso_code" class="col-sm-4 col-form-label">Currency ISO
                                                Code<i class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="currency_iso_code" value="INR" class="form-control"
                                                    type="text" id="currency_iso_code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="usd_exchange_rate" class="col-sm-4 col-form-label">USD Exchange
                                                Rate<i class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="usd_exchange_rate" value="64.91" class="form-control"
                                                    type="text" id="usd_exchange_rate">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="currency_symbol" class="col-sm-4 col-form-label">Currency Symbol<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="currency_symbol" value="₹" class="form-control"
                                                    type="text" id="currency_symbol">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="currency_position" class="col-sm-4 col-form-label">Symbol Position<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <select class="form-control basic-single" name="currency_position"
                                                    id="currency_position">
                                                    <option value="l" selected="">Left</option>
                                                    <option value="r">Right</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" align="center">
                                            <div class="col-sm-12 col-sm-offset-3">
                                                <a href="#backend/dashboard"
                                                    class="btn btn-primary  w-md m-b-5">Cancel</a>
                                                <button type="submit" class="btn btn-success  w-md m-b-5">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
