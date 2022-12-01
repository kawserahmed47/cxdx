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
                        <li class="breadcrumb-item active">Wallet</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">Exchange Wallet List</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a class="btn btn-success w-md m-b-5 pull-right"
                                            href="{{route('exchangeWalletInfo')}}"><i
                                                class="fa fa-plus" aria-hidden="true"></i> Exchange Wallet</a>
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
                                                style="width: 85.6875px;">SL No.</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Coin Name: activate to sort column ascending"
                                                style="width: 128.875px;">Coin Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1"
                                                aria-label="Sell Adjustment: activate to sort column ascending"
                                                style="width: 181.469px;">Sell Adjustment</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1"
                                                aria-label="Buy Adjustment: activate to sort column ascending"
                                                style="width: 181.094px;">Buy Adjustment</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Status: activate to sort column ascending"
                                                style="width: 85.5px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 93.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr role="row" class="odd">
                                            <td class="sorting_1">1</td>
                                            <td>Bitcoin</td>
                                            <td>1%</td>
                                            <td>1%</td>
                                            <td>Active</td>
                                            <td>
                                                <a href=""
                                                    class="btn btn-info btn-sm" data-toggle="tooltip"
                                                    data-placement="left" title="Update"><i class="fas fa-edit"
                                                        aria-hidden="true"></i></a>
                                                <a href=""
                                                    onclick="return confirm('Are You Sure ? ')"
                                                    class="btn btn-danger btn-sm submit-disable" data-toggle="tooltip"
                                                    data-placement="right" title="Delete "><i class="fas fa-trash-alt"
                                                        aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation" class="dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li class="active paginate_button page-item">
                                        <a href=""
                                            class="page-link">
                                            1 </a>
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
