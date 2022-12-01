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
                        <li class="breadcrumb-item active">Crypto Currency</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">Crypto Currency</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a class="btn btn-success w-md m-b-5 pull-right"
                                            href="#backend/currency/Currency_cronjob"><i
                                                class="fa fa-refresh" aria-hidden="true"></i> Refresh Currency</a>
                                        <a href="" class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="dt-buttons btn-group flex-wrap"> <button
                                                class="btn btn-secondary buttons-copy buttons-html5 btn-success"
                                                tabindex="0" aria-controls="example" type="button"
                                                title="Copy"><span><i class="far fa-copy"></i></span></button> <button
                                                class="btn btn-secondary buttons-csv buttons-html5 btn-success"
                                                tabindex="0" aria-controls="example" type="button"
                                                title="CSV"><span><i class="fas fa-file-csv"></i></span></button> <button
                                                class="btn btn-secondary buttons-excel buttons-html5 btn-success"
                                                tabindex="0" aria-controls="example" type="button"
                                                title="Excel"><span><i class="far fa-file-excel"></i></span></button>
                                            <button class="btn btn-secondary buttons-pdf buttons-html5 btn-success"
                                                tabindex="0" aria-controls="example" type="button"
                                                title="PDF"><span><i class="far fa-file-pdf"></i></span></button> <button
                                                class="btn btn-secondary buttons-print btn-success" tabindex="0"
                                                aria-controls="example" type="button" title="Print"><span><i
                                                        class="fa fa-print" aria-hidden="true"></i></span></button> </div>
                                    </div>
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <div id="example_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="example"></label></div>
                                    </div>
                                </div>
                                <table id="example"
                                    class="table display table-bordered table-striped table-hover dataTable no-footer"
                                    role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="SL No.: activate to sort column descending"
                                                style="width: 52.375px;">SL No.</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 104.125px;">Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Symbol: activate to sort column ascending"
                                                style="width: 60.2656px;">Symbol</th>
                                            <th class="text-right sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="USD: activate to sort column ascending"
                                                style="width: 150.344px;">USD</th>
                                            <th class="text-right sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="Indian Rupee: activate to sort column ascending"
                                                style="width: 131.5px;">Indian Rupee</th>
                                            <th class="text-right sorting" tabindex="0" aria-controls="example"
                                                rowspan="1" colspan="1"
                                                aria-label="BTC: activate to sort column ascending"
                                                style="width: 70.9219px;">BTC</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Status: activate to sort column ascending"
                                                style="width: 52.2344px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 52.2344px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>




















                                        <tr role="row" class="odd">
                                            <td class="sorting_1">1</td>
                                            <td>Bitcoin</td>
                                            <td>BTC</td>
                                            <td class="text-right">$ 17154.204062329</td>
                                            <td class="text-right">
                                                ₹ 1113479.3856858 </td>
                                            <td class="text-right">1.0</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/1"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">2</td>
                                            <td>Ethereum</td>
                                            <td>ETH</td>
                                            <td class="text-right">$ 1287.9138200275</td>
                                            <td class="text-right">
                                                ₹ 83598.486057985 </td>
                                            <td class="text-right">0.0808462</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/2"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">3</td>
                                            <td>Tether</td>
                                            <td>USDT</td>
                                            <td class="text-right">$ 0.99998526904142</td>
                                            <td class="text-right">
                                                ₹ 64.909043813479 </td>
                                            <td class="text-right">0.00011968</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/26"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">4</td>
                                            <td>Binance Coin</td>
                                            <td>BNB</td>
                                            <td class="text-right">$ 297.508885045</td>
                                            <td class="text-right">
                                                ₹ 19311.301728271 </td>
                                            <td class="text-right">0.00152912</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/28"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">5</td>
                                            <td>Ripple</td>
                                            <td>XRP</td>
                                            <td class="text-right">$ 0.40249141857045</td>
                                            <td class="text-right">
                                                ₹ 26.125717979408 </td>
                                            <td class="text-right">0.00008174</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/3"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">6</td>
                                            <td>Dogecoin</td>
                                            <td>DOGE</td>
                                            <td class="text-right">$ 0.10462016710205</td>
                                            <td class="text-right">
                                                ₹ 6.7908950465941 </td>
                                            <td class="text-right">0.00000051</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/37"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">7</td>
                                            <td>Cardano</td>
                                            <td>ADA</td>
                                            <td class="text-right">$ 0.31805492386338</td>
                                            <td class="text-right">
                                                ₹ 20.644945107972 </td>
                                            <td class="text-right">0.00003179</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/5"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">8</td>
                                            <td>Litecoin</td>
                                            <td>LTC</td>
                                            <td class="text-right">$ 77.415218246574</td>
                                            <td class="text-right">
                                                ₹ 5025.0218163851 </td>
                                            <td class="text-right">0.0165233</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/6"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">9</td>
                                            <td>VeChain</td>
                                            <td>VEN</td>
                                            <td class="text-right">$ 4.49988</td>
                                            <td class="text-right">
                                                ₹ 292.0872108 </td>
                                            <td class="text-right">0.00053581</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/32"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">10</td>
                                            <td>TRON</td>
                                            <td>TRX</td>
                                            <td class="text-right">$ 0.054617187186256</td>
                                            <td class="text-right">
                                                ₹ 3.5452016202599 </td>
                                            <td class="text-right">0.00000821</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/14"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">11</td>
                                            <td>Ethereum Classic</td>
                                            <td>ETC</td>
                                            <td class="text-right">$ 20.089643667176</td>
                                            <td class="text-right">
                                                ₹ 1304.0187704364 </td>
                                            <td class="text-right">0.00215936</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/16"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">12</td>
                                            <td>Monero</td>
                                            <td>XMR</td>
                                            <td class="text-right">$ 144.45279167047</td>
                                            <td class="text-right">
                                                ₹ 9376.4307073302 </td>
                                            <td class="text-right">0.024238</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/13"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">13</td>
                                            <td>Stellar</td>
                                            <td>XLM</td>
                                            <td class="text-right">$ 0.089006968311446</td>
                                            <td class="text-right">
                                                ₹ 5.777442313096 </td>
                                            <td class="text-right">0.00004314</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/9"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">14</td>
                                            <td>Bitcoin Cash</td>
                                            <td>BCH</td>
                                            <td class="text-right">$ 112.67704983479</td>
                                            <td class="text-right">
                                                ₹ 7313.8673047762 </td>
                                            <td class="text-right">0.170865</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/4"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">15</td>
                                            <td>BitConnect</td>
                                            <td>BCC</td>
                                            <td class="text-right">$ 0</td>
                                            <td class="text-right">
                                                ₹ 0 </td>
                                            <td class="text-right">0.0170269</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/30"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">16</td>
                                            <td>Stratis</td>
                                            <td>STRAT</td>
                                            <td class="text-right">$ 6.00647</td>
                                            <td class="text-right">
                                                ₹ 389.8799677 </td>
                                            <td class="text-right">0.0007152</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/24"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">17</td>
                                            <td>EOS</td>
                                            <td>EOS</td>
                                            <td class="text-right">$ 0.94371845287648</td>
                                            <td class="text-right">
                                                ₹ 61.256764776212 </td>
                                            <td class="text-right">0.00166942</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/11"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">18</td>
                                            <td>RChain</td>
                                            <td>RHOC</td>
                                            <td class="text-right">$ 1.57105</td>
                                            <td class="text-right">
                                                ₹ 101.9768555 </td>
                                            <td class="text-right">0.00018707</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/61"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">19</td>
                                            <td>Golem</td>
                                            <td>GNT</td>
                                            <td class="text-right">$ 0.563891</td>
                                            <td class="text-right">
                                                ₹ 36.60216481 </td>
                                            <td class="text-right">0.00006714</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/47"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">20</td>
                                            <td>Hshare</td>
                                            <td>HSR</td>
                                            <td class="text-right">$ 9.19715</td>
                                            <td class="text-right">
                                                ₹ 596.9870065 </td>
                                            <td class="text-right">0.00109512</td>
                                            <td>Inactive</td>
                                            <td>
                                                <a href="#backend/currency/currency_info/53"
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation" class="dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li class="active paginate_button page-item">
                                        <a href="#backend/currency/currency_list?page=1"
                                            class="page-link">
                                            1 </a>
                                    </li>
                                    <li class="paginate_button page-item">
                                        <a href="#backend/currency/currency_list?page=2"
                                            class="page-link">
                                            2 </a>
                                    </li>
                                    <li class="paginate_button page-item">
                                        <a href="#backend/currency/currency_list?page=3"
                                            class="page-link">
                                            3 </a>
                                    </li>
                                    <li>
                                        <a href="#backend/currency/currency_list?page=4"
                                            aria-label="Next" class="page-link">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#backend/currency/currency_list?page=5"
                                            aria-label="Last" class="page-link">
                                            <span aria-hidden="true">Last</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
