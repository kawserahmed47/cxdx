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
                            <li class="breadcrumb-item active">Documentation</li>
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
                            <h6 class="fs-17 font-weight-600 mb-0">Documentation</h6>
                            </div>
                            <div class="text-right">
                            <div class="actions">
                            <a href=" " class="action-item"><i class="ti-reload"></i></a>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="card-body">
                            <dl>
                            <dt> How Admin Works – </dt>
                            <dd> After installing quick exchange module, Admin can see a quick exchange menu on the left side menu bar. In this quick exchange menu, there will be four submenu- Quick Exchange Coin, Fiat Currency, Quick Exchange Request, Quick Exchange Order.
                            <div align="center" class="mt-4">
                            <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/doc1.png?v=1.5" width="80%">
                            </div>
                            <p align="center">Figure 1: Quick Exchange Module Navigation Bar</p>
                            </dd>
                            <dt> Submenu 1 (Quick Exchange Coin)- </dt>
                            <dd> Quick exchange module give you five default coin such as- BIP, Tether, Ethereum, Bitcoin and Prizm. If admin wants to add new coin, it is possible by clicking on Add Coin Button.
                            <div align="center" class="mt-4">
                            <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/doc2.png" width="80%">
                            </div>
                            <p align="center">Figure 2: Quick exchange coin list</p>
                            After clicking Add Coin Button, A new page will appear. Fill out all required filled, then submit it.
                            <div align="center" class="mt-4">
                            <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/doc3.png" width="80%">
                            </div>
                            <p align="center">Figure 3: New Coin Add Form</p>
                            When Admin click submit, it will add in the coin list as a pending request coin. For checking validity of the coin and market price, admin will have to set a cron job url given in fig 4.
                            <div align="center" class="mt-4">
                            <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/doc4.png" width="80%">
                            </div>
                            <p align="center">Figure 4: Cron Job Url</p>
                            By editing coin info, admin can set price type automatically, base currency and transaction hash checking url-like minter.com, ethereum.com, blockchain.com and so on. For better understanding follow the figure 5.
                            <div align="center" class="mt-4">
                            <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/doc5.png" width="80%">
                            </div>
                            <p align="center">Figure 5: Edit Coin Form</p>
                            </dd>
                            <dt>Submenu 2( Fiat Currency) – </dt>
                            <dd>
                            Admin can set only one fiat currency such as- USD, INR, Euro and so on in our quick exchange modules. In fiat currency, admin have to set the market value of that currency according to usd rate. Moreover, admin can set the card or bank info in fiat currency. It is dynamic info for that reason admin can set as much level and value according to his needs. If admin wants to set the fiat currency as a base currency, it is possible to set in this module.
                            <div align="center" class="mt-4">
                            <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/doc6.png" width="80%">
                            </div>
                            <p align="center">Figure 6: Fiat Currency</p>
                            </dd>
                            <dt>Submenu 3 (Quick exchange request) - </dt>
                            <dd>
                            Here all the user exchange request will come. Admin can view all the requests and then clicking update button admin can approve or reject the request.
                            <div align="center" class="mt-4">
                            <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/doc7.png" width="80%">
                            </div>
                            <p align="center">Figure 7: Quick exchange request</p>
                            </dd>
                            <dt>Submenu 4 (Quick Exchange Order List) - </dt>
                            <dd>
                            In quick exchange order list, admin can only view the order history of the exchange.
                            <div align="center" class="mt-4">
                            <img src="https://nishuedemo.bdtask-demo.com/app/Modules/Quickexchange/Assets/Images/doc8.png" width="80%">
                            </div>
                            <p align="center">Figure 8: Quick Exchange Order List</p>
                            </dd>
                            </dl>
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