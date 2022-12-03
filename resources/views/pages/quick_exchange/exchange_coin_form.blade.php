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
                        <li class="breadcrumb-item"><a href="{{route('quick-exchange.exchangeCoin')}}">Quick Exchange</a></li>
                        <li class="breadcrumb-item active">Exchange Coin</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0"> {{$editable ? 'Edit Coin' : 'Create Coin'}} </h6>
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
                                        <input type="hidden" name="id" value="1" style="display:none;">
                                        <div class="form-group row">
                                            <label for="symbol" class="col-sm-4 col-form-label">Symbol<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="symbol" value="BIP" class="form-control"
                                                    placeholder="Symbol" type="text" id="symbol">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="coin_name" class="col-sm-4 col-form-label">Coin Name<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="coin_name" value="BIP" class="form-control"
                                                    placeholder="Coin Name" type="text" id="coin_name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="reserve_balance" class="col-sm-4 col-form-label">Reserve Balance <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="reserve_balance" value="55344.16444445" class="form-control"
                                                    placeholder="Reserve Balance" type="text" id="reserve_balance"
                                                    required="">
                                            </div>
                                        </div>
                                        <input type="hidden" name="price_type" value="0">
                                        <div class="form-group row">
                                            <label for="price_type" class="col-sm-4 col-form-label">Price Type <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <label class="radio-inline">
                                                    <input type="radio" name="price_type" value="1">
                                                    Automatic </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="price_type" value="0"
                                                        checked="checked">
                                                    Manual </label>
                                            </div>
                                        </div>
                                        <input name="market_rate" type="hidden" class="market_rate" value="0.0006">
                                        <div id="market_adjustment_field">
                                            <div class="form-group row">
                                                <label for="buy_adjust_price" class="col-sm-4 col-form-label">Buy
                                                    Price(USD)<i class="text-danger">*</i></label>
                                                <div class="col-sm-8">
                                                    <input name="buy_adjust_price" value="0.0135" class="form-control"
                                                        placeholder="Buy Price" type="text" id="buy_adjust_price"
                                                        required="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="sell_adjust_price" class="col-sm-4 col-form-label">Sell
                                                    Price(USD)<i class="text-danger">*</i></label>
                                                <div class="col-sm-8">
                                                    <input name="sell_adjust_price" value="0.0150" class="form-control"
                                                        placeholder="Sale Price" type="text" id="sell_adjust_price"
                                                        required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="minimum_tx_amount" class="col-sm-4 col-form-label">Minimum
                                                Transaction Amount<i class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="minimum_tx_amount" value="100.00000000" class="form-control"
                                                    placeholder="Minimum Transaction Amount" type="text"
                                                    id="minimum_tx_amount" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="wallet_id" class="col-sm-4 col-form-label">Wallet Id<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="wallet_id" value="Mx24fbc5fd11f8181b4f431e07f5af9104c981eaca"
                                                    class="form-control" placeholder="Wallet Id" type="text"
                                                    id="wallet_id" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="coin_position" class="col-sm-4 col-form-label">SL.NO</label>
                                            <div class="col-sm-8">
                                                <input name="coin_position" value="1" class="form-control"
                                                    type="text" id="algorithm">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="url" class="col-sm-4 col-form-label">Transaction Check URL<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <input name="url"
                                                    value="https://explorer.minter.network/transactions/"
                                                    class="form-control" type="text" id="url">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image" class="col-sm-4 col-form-label">Coin Icon</label>
                                            <div class="col-sm-8">
                                                <input name="image"
                                                    value="app/Modules/Quickexchange/Assets/Images/bip.png"
                                                    class="form-control" type="file" id="image">
                                                <input type="hidden" name="image_old"
                                                    value="app/Modules/Quickexchange/Assets/Images/bip.png">
                                                <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bip.png"
                                                    width="150">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="base_currency" class="col-sm-4 col-form-label">Base
                                                Currency</label>
                                            <div class="col-sm-8">
                                                <label class="radio-inline">
                                                    <input type="radio" name="base_currency" value="1">
                                                    Base Currency
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-4 col-form-label">Status</label>
                                            <div class="col-sm-8">
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" value="1"
                                                        checked="checked">
                                                    Active </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="status" value="0">
                                                    Inactive </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-9" align="center">
                                                <a href="https://nishuedemo.bdtask-demo.com/backend/quick_exchange/quickexchangecoin"
                                                    class="btn btn-primary  w-md m-b-5">Cancel</a>
                                                <button type="submit" class="btn btn-success  w-md m-b-5">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="settingWrapper">
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <label class="col-form-label ">For Coin Market Price</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="copyed1"
                                            value="curl --request GET https://nishuedemo.bdtask-demo.com/backend/quick_exchange/coin_price"
                                            readonly="">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary copy1" type="button">Copy</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            You can use above link for cron job. Copy and paste at cron job Command box.
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
