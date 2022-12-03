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
                                    <h6 class="fs-17 font-weight-600 mb-0">Crypto Currency</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a  class="btn btn-success w-md m-b-5 pull-right"
                                            href="{{route('quick-exchange.exchangeCoinForm')}}">
                                            <i class="fa fa-plus" aria-hidden="true"></i> 
                                            Coin
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form  id="ajaxcointableform" method="post">
                                @csrf
                                <div class="table-responsive">
                                    <div id="ajaxcointable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="dt-buttons btn-group flex-wrap"> <button
                                                class="btn btn-secondary buttons-copy buttons-html5 btn-success"
                                                tabindex="0" aria-controls="ajaxcointable" type="button"
                                                title="Copy"><span><i class="far fa-copy"></i></span></button> <button
                                                class="btn btn-secondary buttons-csv buttons-html5 btn-success"
                                                tabindex="0" aria-controls="ajaxcointable" type="button"
                                                title="CSV"><span><i class="fas fa-file-csv"></i></span></button> <button
                                                class="btn btn-secondary buttons-excel buttons-html5 btn-success"
                                                tabindex="0" aria-controls="ajaxcointable" type="button"
                                                title="Excel"><span><i class="far fa-file-excel"></i></span></button>
                                            <button class="btn btn-secondary buttons-pdf buttons-html5 btn-success"
                                                tabindex="0" aria-controls="ajaxcointable" type="button"
                                                title="PDF"><span><i class="far fa-file-pdf"></i></span></button> <button
                                                class="btn btn-secondary buttons-print btn-success" tabindex="0"
                                                aria-controls="ajaxcointable" type="button" title="Print"><span><i
                                                        class="fa fa-print" aria-hidden="true"></i></span></button> </div>
                                        <div id="ajaxcointable_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="ajaxcointable"></label></div>
                                        <div id="ajaxcointable_processing" class="dataTables_processing card"
                                            style="display: none;">Processing...</div>
                                        <table id="ajaxcointable"
                                            class="table display table-bordered table-striped table-hover dataTable no-footer"
                                            role="grid" aria-describedby="ajaxcointable_info" style="width: 1006px;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        style="width: 83px;" aria-label="SL No.">SL No.</th>
                                                    <th class="sorting" tabindex="0" aria-controls="ajaxcointable"
                                                        rowspan="1" colspan="1" style="width: 123px;"
                                                        aria-label="Coin Icon: activate to sort column ascending">Coin Icon
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="ajaxcointable"
                                                        rowspan="1" colspan="1" style="width: 142px;"
                                                        aria-label="Coin Name: activate to sort column ascending">Coin Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="ajaxcointable"
                                                        rowspan="1" colspan="1" style="width: 107px;"
                                                        aria-label="Symbol: activate to sort column ascending">Symbol</th>
                                                    <th class="sorting" tabindex="0" aria-controls="ajaxcointable"
                                                        rowspan="1" colspan="1" style="width: 95px;"
                                                        aria-label="SL.NO: activate to sort column ascending">SL.NO</th>
                                                    <th class="sorting" tabindex="0" aria-controls="ajaxcointable"
                                                        rowspan="1" colspan="1" style="width: 95px;"
                                                        aria-label="Status: activate to sort column ascending">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="ajaxcointable"
                                                        rowspan="1" colspan="1" style="width: 95px;"
                                                        aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td>1</td>
                                                    <td><img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bip.png"
                                                            width="50px"></td>
                                                    <td>BIP</td>
                                                    <td>BIP</td>
                                                    <td>1</td>
                                                    <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                                                    <td>
                                                        <a href="{{route('quick-exchange.exchangeCoinFormEdit', 1)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>2</td>
                                                    <td><img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/tether.png"
                                                            width="50px"></td>
                                                    <td>Tether</td>
                                                    <td>USDT</td>
                                                    <td>2</td>
                                                    <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                                                    <td>
                                                        <a href="{{route('quick-exchange.exchangeCoinFormEdit', 1)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>3</td>
                                                    <td><img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/etherium.png"
                                                            width="50px"></td>
                                                    <td>Ethereum</td>
                                                    <td>ETH</td>
                                                    <td>3</td>
                                                    <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                                                    <td>
                                                        <a href="{{route('quick-exchange.exchangeCoinFormEdit', 1)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                                    </td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td>4</td>
                                                    <td><img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bitcoin.png"
                                                            width="50px"></td>
                                                    <td>Bitcoin</td>
                                                    <td>BTC</td>
                                                    <td>4</td>
                                                    <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                                                    <td>
                                                        <a href="{{route('quick-exchange.exchangeCoinFormEdit', 1)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                                    </td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td>5</td>
                                                    <td><img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/pzm.jpeg"
                                                            width="50px"></td>
                                                    <td>Prizm</td>
                                                    <td>PZM</td>
                                                    <td>5</td>
                                                    <td><span class="badge badge-success"><i class="fas fa-check"></i></span></td>
                                                    <td>
                                                        <a href="{{route('quick-exchange.exchangeCoinFormEdit', 1)}}" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="dataTables_info" id="ajaxcointable_info" role="status"
                                            aria-live="polite">Showing 1 to 6 of 6 entries</div>
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="ajaxcointable_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="ajaxcointable_previous"><a href="#"
                                                        aria-controls="ajaxcointable" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="ajaxcointable" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="ajaxcointable_next"><a href="#"
                                                        aria-controls="ajaxcointable" data-dt-idx="2" tabindex="0"
                                                        class="page-link">Next</a></li>
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
