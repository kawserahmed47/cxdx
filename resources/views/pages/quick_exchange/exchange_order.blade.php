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
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Quick Exchange</a></li>
                            <li class="breadcrumb-item active">Exchange Order</li>
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
                            <h6 class="fs-17 font-weight-600 mb-0">Quick Exchange Order List</h6>
                            </div>
                            <div class="text-right">
                            <div class="actions">
                            <a href=" " class="action-item"><i class="ti-reload"></i></a>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-4"><div class="dt-buttons btn-group flex-wrap">          <button class="btn btn-secondary buttons-copy buttons-html5 btn-success" tabindex="0" aria-controls="example" type="button" title="Copy"><span><i class="far fa-copy"></i></span></button> <button class="btn btn-secondary buttons-csv buttons-html5 btn-success" tabindex="0" aria-controls="example" type="button" title="CSV"><span><i class="fas fa-file-csv"></i></span></button> <button class="btn btn-secondary buttons-excel buttons-html5 btn-success" tabindex="0" aria-controls="example" type="button" title="Excel"><span><i class="far fa-file-excel"></i></span></button> <button class="btn btn-secondary buttons-pdf buttons-html5 btn-success" tabindex="0" aria-controls="example" type="button" title="PDF"><span><i class="far fa-file-pdf"></i></span></button> <button class="btn btn-secondary buttons-print btn-success" tabindex="0" aria-controls="example" type="button" title="Print"><span><i class="fa fa-print" aria-hidden="true"></i></span></button> </div></div><div class="col-sm-4"></div><div class="col-sm-4"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><table id="example" class="table table-bordered table-striped table-hover dataTable no-footer" role="grid">
                            <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SL No.: activate to sort column descending" style="width: 51.3125px;">SL No.</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Gmt: activate to sort column ascending" style="width: 136.938px;">Gmt</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Sell: activate to sort column ascending" style="width: 117.797px;">Sell</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Sell Transaction: activate to sort column ascending" style="width: 120.156px;">Sell Transaction</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Buy: activate to sort column ascending" style="width: 117.797px;">Buy</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Buy Transaction: activate to sort column ascending" style="width: 119.875px;">Buy Transaction</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 51.125px;">Status</th></tr>
                            </thead>
                            <tbody>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <tr role="row" class="odd">
                            <td class="sorting_1">1</td>
                            <td>2022-11-08 16:26:38</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/etherium.png"> 2.000000</div>
                            </td>
                            <td><a href="https://etherscan.io/tx/0x2e4cde7859b66b5bc25cb3c19e0e507e90dbe98dcb7d4a4db5ba492d4bee7cb9" rel="nofollow" target="_blank">0x2e4..e7cb9</a></td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 6201.210800</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="even">
                            <td class="sorting_1">2</td>
                            <td>2022-09-30 16:00:14</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 10.000000</div>
                            </td>
                            <td>hgfdf..gfghj</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bitcoin.png"> 0.000202</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="odd">
                            <td class="sorting_1">3</td>
                            <td>2022-09-16 23:31:29</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bip.png"> 100.000000</div>
                            </td>
                            <td><a href="https://explorer.minter.network/transactions/Mx24fbc5fd11f8181b4f431e07f5af9104c981eacasdasadzsdzsdzsdzsd" rel="nofollow" target="_blank">Mx24f..sdzsd</a></td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 0.140000</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="even">
                             <td class="sorting_1">4</td>
                            <td>2022-08-20 11:56:38</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 15.000000</div>
                            </td>
                            <td>hgtyu..hgtyu</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bip.png"> 8571.428571</div>
                            </td>
                             <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="odd">
                            <td class="sorting_1">5</td>
                            <td>2022-08-14 11:56:48</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bip.png"> 100.000000</div>
                            </td>
                            <td><a href="https://explorer.minter.network/transactions/11111111111111111111111111111111111111111111111111111111111111111111" rel="nofollow" target="_blank">11111..11111</a></td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 0.140000</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="even">
                            <td class="sorting_1">6</td>
                            <td>2022-08-12 11:01:22</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bip.png"> 1111.000000</div>
                            </td>
                            <td><a href="https://explorer.minter.network/transactions/111111111111111111111111111111111111111111111111111111111111111111111" rel="nofollow" target="_blank">11111..11111</a></td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 1.555400</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="odd">
                            <td class="sorting_1">7</td>
                            <td>2022-08-12 10:55:09</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/tether.png"> 15.000000</div>
                            </td>
                            <td><a href="https://etherscan.io/tx/1111111111111111111111111111111111111111111111111111111111111111111111" rel="nofollow" target="_blank">11111..11111</a></td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 29.976000</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="even">
                             <td class="sorting_1">8</td>
                            <td>2022-07-22 17:52:07</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bitcoin.png"> 0.100000</div>
                            </td>
                            <td><a href="https://www.blockchain.com/btc/tx/1JZsWoBE233axsthXnu4N5cwjX5fTq6k5r1JZsWoBE233axsthXnu4N5cwjX5fTq" rel="nofollow" target="_blank">1JZsW..X5fTq</a></td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 5974.053480</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="odd">
                            <td class="sorting_1">9</td>
                            <td>2022-07-03 23:27:10</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 3.996800</div>
                            </td>
                            <td>Sthh..h</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/bip.png"> 2283.885714</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr><tr role="row" class="even">
                            <td class="sorting_1">10</td>
                            <td>2022-06-29 03:41:29</td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/etherium.png"> 1.000000</div>
                            </td>
                            <td><a href="https://etherscan.io/tx/a1075db55d416d3ca199f55b6084e2115b9345e16c5cf302fc80e9d5fbf5d48d" rel="nofollow" target="_blank">a1075..5d48d</a></td>
                            <td>
                            <div class="d-flex"><img style="height:20px; width:20px" src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/dollarcoin.png"> 3553.070800</div>
                            </td>
                            <td></td>
                            <td>
                            <button class="btn btn-warning" title="Pending"><i class="fa fa-spinner fa-pulse "></i></button>
                            </td>
                            </tr></tbody>
                            </table></div>
                            <nav aria-label="Page navigation" class="dataTables_paginate paging_simple_numbers">
                            <ul class="pagination">
                            <li class="active paginate_button page-item">
                            <a href="https://nishuedemo.bdtask-demo.com/backend/quick_exchange/quickexchangeorder?page=1" class="page-link">
                            1 </a>
                            </li>
                            <li class="paginate_button page-item">
                            <a href="https://nishuedemo.bdtask-demo.com/backend/quick_exchange/quickexchangeorder?page=2" class="page-link">
                            2 </a>
                            </li>
                            </ul>
                            </nav>
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