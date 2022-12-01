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
                        <li class="breadcrumb-item active">Wallet Info</li>
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
                                <h6 class="fs-17 font-weight-600 mb-0">Transection Info</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="border_preview">
                                    <form action="#backend/exchange/exchangewallet_info" enctype="multipart/form-data"
                                        method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="10aa26217fecf2d4e4e7e0dd70c73bde">
                                        <input type="hidden" name="ext_exchange_wallet_id" value=""
                                            style="display:none;">
                                        <div class="form-group row">
                                            <label for="cid" class="col-sm-4 col-form-label">Crypto Currency<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <select class="form-control basic-single" name="cid" id="cid">
                                                    <option value="">Select Cryptocurrency</option>
                                                    <option value="1">Bitcoin</option>
                                                    <option value="2">Ethereum</option>
                                                    <option value="3">Ripple</option>
                                                    <option value="4">Bitcoin Cash</option>
                                                    <option value="6">Litecoin</option>
                                                    <option value="7">NEM</option>
                                                    <option value="11">EOS</option>
                                                    <option value="12">Dash</option>
                                                    <option value="32">VeChain</option>
                                                    <option value="93">XPlay</option>
                                                    <option value="100">Emercoin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="wallet_data" class="col-sm-4 col-form-label">Wallet ID<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="wallet_data" value="" class="form-control" type="text"
                                                    id="wallet_data" placeholder="Wallet ID">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sell_adjustment" class="col-sm-4 col-form-label">Sell Adjustment (%)
                                                <i class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="sell_adjustment" value="" class="form-control"
                                                    type="text" id="sell_adjustment" placeholder="Sell Adjustment %">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="buy_adjustment" class="col-sm-4 col-form-label">Buy Adjustment (%)
                                                <i class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="buy_adjustment" value="" class="form-control"
                                                    type="text" id="buy_adjustment" placeholder="Buy Adjustment %">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-4 col-form-label">Status</label>
                                            <div class="col-sm-8 col-form-label-left">
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" value="1" checked="checked">
                                                    Active
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" value="0">
                                                    Inactive
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row" align="center">
                                            <div class="col-sm-12 col-sm-offset-3">
                                                <a href="#backend/exchange/exchange_wallet"
                                                    class="btn btn-primary  w-md m-b-5">Cancel</a>
                                                <button type="submit" class="btn btn-success  w-md m-b-5">Create</button>
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
