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
                                    <h6 class="fs-17 font-weight-600 mb-0">Quick Exchange Request</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href=" " class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="#" id="ajaxexchangerequesttableform"
                                name="ajaxexchangerequesttableform" method="post" accept-charset="utf-8">
                                <input type="hidden" name="csrf_test_name" value="125fa4a2a28a6f0e585fdc231b362b1e">
                                <div class="table-responsive">
                                    <div id="exchange_request_table_wrapper"
                                        class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="dt-buttons btn-group flex-wrap"> <button
                                                class="btn btn-secondary buttons-copy buttons-html5 btn-success"
                                                tabindex="0" aria-controls="exchange_request_table" type="button"
                                                title="Copy"><span><i class="far fa-copy"></i></span></button> <button
                                                class="btn btn-secondary buttons-csv buttons-html5 btn-success"
                                                tabindex="0" aria-controls="exchange_request_table" type="button"
                                                title="CSV"><span><i class="fas fa-file-csv"></i></span></button> <button
                                                class="btn btn-secondary buttons-excel buttons-html5 btn-success"
                                                tabindex="0" aria-controls="exchange_request_table" type="button"
                                                title="Excel"><span><i class="far fa-file-excel"></i></span></button>
                                            <button class="btn btn-secondary buttons-pdf buttons-html5 btn-success"
                                                tabindex="0" aria-controls="exchange_request_table" type="button"
                                                title="PDF"><span><i class="far fa-file-pdf"></i></span></button> <button
                                                class="btn btn-secondary buttons-print btn-success" tabindex="0"
                                                aria-controls="exchange_request_table" type="button"
                                                title="Print"><span><i class="fa fa-print"
                                                        aria-hidden="true"></i></span></button> </div>
                                        <div id="exchange_request_table_filter" class="dataTables_filter">
                                            <label>Search:<input type="search" class="form-control form-control-sm"
                                                    placeholder="" aria-controls="exchange_request_table"></label></div>
                                        <div id="exchange_request_table_processing" class="dataTables_processing card"
                                            style="display: none;">Processing...</div>
                                        <table id="exchange_request_table"
                                            class="table display table-bordered table-striped table-hover dataTable no-footer"
                                            role="grid" aria-describedby="exchange_request_table_info"
                                            style="width: 1006px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 53px;" aria-label="SL No.">SL No.</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="exchange_request_table" rowspan="1" colspan="1"
                                                        style="width: 64px;"
                                                        aria-label="User ID: activate to sort column ascending">User ID</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="exchange_request_table" rowspan="1" colspan="1"
                                                        style="width: 75px;"
                                                        aria-label="Sell Coin: activate to sort column ascending">Sell Coin
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="exchange_request_table" rowspan="1"
                                                        colspan="1" style="width: 105px;"
                                                        aria-label="Sell Amount: activate to sort column ascending">Sell
                                                        Amount</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="exchange_request_table" rowspan="1"
                                                        colspan="1" style="width: 74px;"
                                                        aria-label="Buy Coin: activate to sort column ascending">Buy Coin
                                                    </th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="exchange_request_table" rowspan="1"
                                                        colspan="1" style="width: 102px;"
                                                        aria-label="Buy Amount: activate to sort column ascending">Buy
                                                        Amount</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="exchange_request_table" rowspan="1"
                                                        colspan="1" style="width: 83px;"
                                                        aria-label=": activate to sort column ascending"></th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="exchange_request_table" rowspan="1"
                                                        colspan="1" style="width: 56px;"
                                                        aria-label="Status: activate to sort column ascending">Status</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="exchange_request_table" rowspan="1"
                                                        colspan="1" style="width: 46px;"
                                                        aria-label="View: activate to sort column ascending">View</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr role="row" class="odd">
                                                    <td>1</td>
                                                    <td></td>
                                                    <td>ETH</td>
                                                    <td>2.00000000</td>
                                                    <td>USD</td>
                                                    <td>6201.210800</td>
                                                    <td><a
                                                            href="https://etherscan.io/tx/0x2e4cde7859b66b5bc25cb3c19e0e507e90dbe98dcb7d4a4db5ba492d4bee7cb9">0x2e4..e7cb9</a><a></a>
                                                    </td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}17"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>2</td>
                                                    <td></td>
                                                    <td>USD</td>
                                                    <td>10.00000000</td>
                                                    <td>BTC</td>
                                                    <td>0.000202</td>
                                                    <td>gfghj</td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}16"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>3</td>
                                                    <td>B0TASK</td>
                                                    <td>BIP</td>
                                                    <td>100.00000000</td>
                                                    <td>USD</td>
                                                    <td>0.140000</td>
                                                    <td><a
                                                            href="https://explorer.minter.network/transactions/Mx24fbc5fd11f8181b4f431e07f5af9104c981eacasdasadzsdzsdzsdzsd">Mx24f..sdzsd</a><a></a>
                                                    </td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}15"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>4</td>
                                                    <td></td>
                                                    <td>USD</td>
                                                    <td>15.00000000</td>
                                                    <td>BIP</td>
                                                    <td>8571.428571</td>
                                                    <td>hgtyu</td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}14"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>5</td>
                                                    <td></td>
                                                    <td>BIP</td>
                                                    <td>100.00000000</td>
                                                    <td>USD</td>
                                                    <td>0.140000</td>
                                                    <td><a
                                                            href="https://explorer.minter.network/transactions/11111111111111111111111111111111111111111111111111111111111111111111">11111..11111</a><a></a>
                                                    </td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}13"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>6</td>
                                                    <td>B0TASK</td>
                                                    <td>BIP</td>
                                                    <td>1111.00000000</td>
                                                    <td>USD</td>
                                                    <td>1.555400</td>
                                                    <td><a
                                                            href="https://explorer.minter.network/transactions/111111111111111111111111111111111111111111111111111111111111111111111">11111..11111</a><a></a>
                                                    </td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}12"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>7</td>
                                                    <td></td>
                                                    <td>USDT</td>
                                                    <td>15.00000000</td>
                                                    <td>USD</td>
                                                    <td>29.976000</td>
                                                    <td><a
                                                            href="https://etherscan.io/tx/1111111111111111111111111111111111111111111111111111111111111111111111">11111..11111</a><a></a>
                                                    </td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}11"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>8</td>
                                                    <td></td>
                                                    <td>BTC</td>
                                                    <td>0.10000000</td>
                                                    <td>USD</td>
                                                    <td>5974.053480</td>
                                                    <td><a
                                                            href="https://www.blockchain.com/btc/tx/1JZsWoBE233axsthXnu4N5cwjX5fTq6k5r1JZsWoBE233axsthXnu4N5cwjX5fTq">1JZsW..X5fTq</a><a></a>
                                                    </td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}10"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>9</td>
                                                    <td></td>
                                                    <td>USD</td>
                                                    <td>3.99680000</td>
                                                    <td>BIP</td>
                                                    <td>2283.885714</td>
                                                    <td>h</td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}9"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>10</td>
                                                    <td></td>
                                                    <td>ETH</td>
                                                    <td>1.00000000</td>
                                                    <td>USD</td>
                                                    <td>3553.070800</td>
                                                    <td><a
                                                            href="https://etherscan.io/tx/a1075db55d416d3ca199f55b6084e2115b9345e16c5cf302fc80e9d5fbf5d48d">a1075..5d48d</a><a></a>
                                                    </td>
                                                    <td><a class="btn btn-warning" title="Pending"><i
                                                                class="fa fa-spinner fa-pulse "></i></a></td>
                                                    <td><a href="{{route('quick-exchange.exchangeRequestEdit', 1)}}8"
                                                            class="btn btn-info btn-sm" data-toggle="tooltip"
                                                            data-placement="left" title="Update"><i class="fas fa-edit"
                                                                aria-hidden="true"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="exchange_request_table_info" role="status"
                                            aria-live="polite">Showing 1 to 10 of 17 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="exchange_request_table_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="exchange_request_table_previous"><a href="#"
                                                        aria-controls="exchange_request_table" data-dt-idx="0"
                                                        tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="exchange_request_table" data-dt-idx="1"
                                                        tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="exchange_request_table" data-dt-idx="2"
                                                        tabindex="0" class="page-link">2</a></li>
                                                <li class="paginate_button page-item next"
                                                    id="exchange_request_table_next"><a href="#"
                                                        aria-controls="exchange_request_table" data-dt-idx="3"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
