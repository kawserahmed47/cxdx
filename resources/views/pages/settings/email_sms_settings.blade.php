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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Settings</a></li>
                        <li class="breadcrumb-item active">Email & SMS</li>
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

                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 font-weight-600 mb-0">Fees Setting</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href=" " class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="54fb31aa70f3257474ee442afd0753a3">
                                        <fieldset>
                                            <legend> Email Notification Settings </legend>
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox" value="1" checked=""
                                                    name="deposit">
                                                <label for="checkbox1">Deposit</label>
                                            </div>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox2" type="checkbox" value="1" checked=""
                                                    name="transfer">
                                                <label for="checkbox2">Transfer</label>
                                            </div>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox3" type="checkbox" value="1" checked=""
                                                    name="payout">
                                                <label for="checkbox3">Payout</label>
                                            </div>
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox4" type="checkbox" value="1" checked=""
                                                    name="commission">
                                                <label for="checkbox4">Comission</label>
                                            </div>
                                            <div class="checkbox checkbox-warning">
                                                <input id="checkbox5" type="checkbox" value="1" checked=""
                                                    name="team_bonnus">
                                                <label for="checkbox5">Team Bonnus</label>
                                            </div>
                                            <div class="checkbox checkbox-danger">
                                                <input id="checkbox6" type="checkbox" value="1" checked=""
                                                    name="withdraw">
                                                <label for="checkbox6">Withdraw</label>
                                            </div>
                                            <input type="hidden" name="email" value="email">
                                        </fieldset>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="54fb31aa70f3257474ee442afd0753a3">
                                        <fieldset>
                                            <legend> SMS Sending </legend>
                                            <div class="checkbox">
                                                <input id="checkbox7" type="checkbox" value="1" checked=""
                                                    name="deposit">
                                                <label for="checkbox7">Deposit</label>
                                            </div>
                                            <div class="checkbox checkbox-primary">
                                                <input id="checkbox8" type="checkbox" value="1" checked=""
                                                    name="transfer">
                                                <label for="checkbox8">Transfer</label>
                                            </div>
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox9" type="checkbox" value="1" name="payout">
                                                <label for="checkbox9">Payout</label>
                                            </div>
                                            <div class="checkbox checkbox-info">
                                                <input id="checkbox10" type="checkbox" value="1" name="commission">
                                                <label for="checkbox10">Commissin</label>
                                            </div>
                                            <div class="checkbox checkbox-warning">
                                                <input id="checkbox11" type="checkbox" value="1"
                                                    name="team_bonnus">
                                                <label for="checkbox11">Team Bonnus</label>
                                            </div>
                                            <div class="checkbox checkbox-danger">
                                                <input id="checkbox12" type="checkbox" value="1" checked=""
                                                    name="withdraw">
                                                <label for="checkbox12">Withdraw</label>
                                            </div>
                                            <input type="hidden" name="sms" value="sms">
                                        </fieldset>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </form>
                                </div>
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
