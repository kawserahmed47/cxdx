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
                        <li class="breadcrumb-item active">List</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">Exchange List</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
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
                                                        class="fa fa-print" aria-hidden="true"></i></span></button>
                                        </div>
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
                                                colspan="1" style="width: 34.6094px;" aria-sort="ascending"
                                                aria-label="SL No.: activate to sort column descending">SL No.</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 58.4688px;"
                                                aria-label="Coin Name: activate to sort column ascending">Coin Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 55.875px;"
                                                aria-label="Full Name: activate to sort column ascending">Full Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 55.7344px;"
                                                aria-label="Wallet ID: activate to sort column ascending">Wallet ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 97.0312px;"
                                                aria-label="Transection Type: activate to sort column ascending">
                                                Transection Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 72.9062px;"
                                                aria-label="Coin Amount: activate to sort column ascending">Coin Amount
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 73.5156px;"
                                                aria-label="USD Amount: activate to sort column ascending">USD Amount</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 76.4844px;"
                                                aria-label="Local Amount: activate to sort column ascending">Local Amount
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 42.125px;"
                                                aria-label="Status: activate to sort column ascending">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" style="width: 42.25px;"
                                                aria-label="Action: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td valign="top" colspan="10" class="dataTables_empty">No data available
                                                in table</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation" class="dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
