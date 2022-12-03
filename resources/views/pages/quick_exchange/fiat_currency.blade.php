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
                        <li class="breadcrumb-item active">Fiat Currency</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">Fiat Currency</h6>
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
                                    <form action="https://nishuedemo.bdtask-demo.com/backend/quick_exchange/fiat_currency/6"
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="125fa4a2a28a6f0e585fdc231b362b1e">
                                        <input type="hidden" name="id" value="6" style="display:none;">
                                        <div class="form-group row">
                                            <label for="symbol" class="col-sm-4 col-form-label">Symbol<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-7">
                                                <input name="symbol" value="USD" class="form-control"
                                                    placeholder="Symbol" type="text" id="symbol">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="reserve_balance" class="col-sm-4 col-form-label">Reserve Balance <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-7">
                                                <input name="reserve_balance" value="10002.56000000" class="form-control"
                                                    placeholder="Reserve Balance" type="text" id="reserve_balance"
                                                    required="">
                                            </div>
                                        </div>
                                        <input type="hidden" name="price_type" value="0">
                                        <div class="form-group row">
                                            <label for="market_rate" class="col-sm-4 col-form-label">Market Rate(USD)<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-7">
                                                <input name="market_rate" value="1.0000" class="form-control market_rate"
                                                    placeholder="Market Rate" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="buy_adjust_price" class="col-sm-4 col-form-label">Buy Price(USD)<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-7">
                                                <input name="buy_adjust_price" value="0.4000" class="form-control"
                                                    placeholder="Buy Price" type="text" id="buy_adjust_price"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="sell_adjust_price" class="col-sm-4 col-form-label">Sell Price(USD)<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-7">
                                                <input name="sell_adjust_price" value="0.5000" class="form-control"
                                                    placeholder="Sale Price" type="text" id="sell_adjust_price"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="minimum_tx_amount" class="col-sm-4 col-form-label">Minimum
                                                Transaction Amount<i class="text-danger">*</i></label>
                                            <div class="col-sm-7">
                                                <input name="minimum_tx_amount" value="1.00000000" class="form-control"
                                                    placeholder="Minimum Transaction Amount" type="text"
                                                    id="minimum_tx_amount" required="">
                                            </div>
                                        </div>
                                        <div id="demo">
                                            <div class="field_wrapper">
                                                <div class=" form-group">
                                                    <div class=" row">
                                                        <label for="wallet_id" class="col-sm-4 col-form-label">Label
                                                            Name<i class="text-danger">*</i></label>
                                                        <div class="col-sm-7">
                                                            <input name="level[]" value="IBN" class="form-control"
                                                                placeholder="Label Name" type="text" id="wallet_id"
                                                                required="">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <a href="javascript:void(0);" class="add_button btn btn-sm btn-success"
                                                                id="add_button_0" title="Add field"><span
                                                                    class="fas fa-plus-circle "></span></a>
                                                        </div>
                                                    </div>
                                                    <div class=" row mt-2">
                                                        <div class="col-sm-4"></div>
                                                        <div class="col-sm-7">
                                                            <input name="field_value[]" value="121231"
                                                                class="form-control" placeholder="Label Value"
                                                                type="text" id="wallet_id" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="field_wrapper">
                                                <div class=" form-group">
                                                    <div class=" row">
                                                        <label for="wallet_id" class="col-sm-4 col-form-label">Label
                                                            Name<i class="text-danger">*</i></label>
                                                        <div class="col-sm-7">
                                                            <input name="level[]" value="Card Number"
                                                                class="form-control" placeholder="Label Name"
                                                                type="text" id="wallet_id" required="">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <a href="javascript:void(0);" class="remove_button btn btn-sm btn-danger"
                                                                title="Remove field"><span
                                                                    class="fas fa-minus-circle"></span></a>
                                                        </div>
                                                    </div>
                                                    <div class=" row mt-2">
                                                        <div class="col-sm-4"></div>
                                                        <div class="col-sm-7">
                                                            <input name="field_value[]" value="121231"
                                                                class="form-control" placeholder="Label Value"
                                                                type="text" id="wallet_id" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="image" class="col-sm-4 col-form-label">Coin Icon</label>
                                            <div class="col-sm-7">
                                                <input name="image"
                                                    value="/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"
                                                    class="form-control" type="file" id="image">
                                                <input type="hidden" name="image_old"
                                                    value="/app/Modules/Quickexchange/Assets/Images/dollarcoin.png">
                                                <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"
                                                    width="150">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="base_currency" class="col-sm-4 col-form-label">Base
                                                Currency</label>
                                            <div class="col-sm-7">
                                                <label class="radio-inline">
                                                    <input type="radio" name="base_currency" value="1"
                                                        checked="checked">
                                                    Base Currency
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status" class="col-sm-4 col-form-label">Status</label>
                                            <div class="col-sm-7">
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
