<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="{{asset('dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">CxDx</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">User Name</a>
            </div>
        </div>

       

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{url('/')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                  
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tag"></i>
                        <p>
                            Roles
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('role.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('role.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles List</p>
                            </a>
                        </li>
                    </ul>
                </li>
             
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            Admins
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Admin</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admins List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-rss"></i>
                        <p>
                            Subscribers
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('subscriber.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Subscriber</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('subscriber.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subscribers List</p>
                            </a>
                        </li>
                    </ul>
                </li>

          

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-gifts"></i>
                        <p>
                            Package
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('package.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Package</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('package.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Packages List</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-credit-card"></i>
                        <p>
                            Finance
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('depositList')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Deposit List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('pendingDeposit')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending Deposit</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('withdrawList')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Withdraw List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('pendingWithdraw')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pending Withdraw</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('addCredit')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Credit</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('creditList')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Credit List</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('transferList')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transfer List</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('appSettings')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>App Settings</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('feesSettings')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fees Settings</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('commissionSetup')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Commission Setup</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('emailSmsSettings')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Email and SMS Setting</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('emailGateway')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Email Gateway</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('smsGateway')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SMS Gateway</p>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SMS/Email Template</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>External API</p>
                            </a>
                        </li> --}}

                        <li class="nav-item">
                            <a href="{{route('languageSettings')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Exchange Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('exchangeList')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Exchange</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('cryptoCurrency')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Crypto Currency</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('localCurrency')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Local Currency</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('exchangeWallet')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Exchange Wallet</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Payment Gateway
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('payment-gateway.gourl')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gourl</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('payment-gateway.payeer')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payeer</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('payment-gateway.paypal')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Paypal</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('payment-gateway.paystack')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Paystack</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('payment-gateway.phone')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Phone</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('payment-gateway.stripe')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Stripe</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fab fa-stack-exchange"></i>
                        <p>
                            Quick Exchanger
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('quick-exchange.exchangeCoin')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quick Exchange Coin</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('quick-exchange.fiatCurrency')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fiat Currency</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('quick-exchange.exchangeRequest')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quick Exchange Request</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('quick-exchange.exchangeOrder')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quick Exchange Order</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('quick-exchange.documentation')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Documentation</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            CMS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

               

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Reports
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Support Tickets
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Withdrawals
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Deposits
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Logs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Staking Manager
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            MLLM Manager
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Forex Manager
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            ICO Manager
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Bots Manager
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top Navigation</p>
                            </a>
                        </li>
                    </ul>
                </li>

               

              

                <li class="nav-item menu-open">
                    <a  href="{{url('/')}}" class="nav-link bg-success">
                        <i class="nav-icon fa fa-question-circle"></i>
                        <p>Support</p>
                    </a>
                </li>


               
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>