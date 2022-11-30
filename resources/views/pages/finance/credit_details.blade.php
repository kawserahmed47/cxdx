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
                        <li class="breadcrumb-item"><a href="{{ route('creditList') }}">Credits</a></li>
                        <li class="breadcrumb-item active">Credit Details</li>
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
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Credit Details</h3>
                        </div>

                        <div class="card-body" id="printableArea">
                            <div class="row">
                                <div class="col-sm-6">
                                    <address>
                                        <strong>Crypto Currency Treading System</strong><br>
                                        Road # Sample Road / Town # Sample Town / City # Sample City / Country # Sample
                                        Country<br>
                                    </address>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <h1 class="m-t-0">Credit No : 279</h1>
                                    <div>27-Nov-2022</div>
                                    <address>
                                        <strong> </strong><br>
                                        <br>
                                        <br>
                                        <abbr title="Phone">Account :</abbr>
                                    </address>
                                </div>
                            </div>
                            <hr>
                            <div class="table-responsive m-b-20">
                                <table class="table table-border table-bordered ">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div><strong>EWTTVX</strong></div>
                                            </td>
                                            <td>$500</td>
                                            <td>27-Nov-2022</td>
                                            <td>Balance add</td>
                                        </tr>
                                    </tbody>
                                </table>
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
