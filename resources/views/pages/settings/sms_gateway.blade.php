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
                        <li class="breadcrumb-item active">SMS Gateway</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">SMS Gateway</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href="#" class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_test_name"
                                                value="54fb31aa70f3257474ee442afd0753a3">
                                            <input type="hidden" name="es_id" value="1" style="display:none;">
                                            <div class="form-group row">
                                                <label for="gatewayname" class="col-xs-3 col-sm-3 col-form-label">Gateway <i
                                                        class="text-danger">*</i></label>
                                                <div class="col-xs-9 col-sm-9">
                                                    <select class="form-control basic-single" name="gatewayname"
                                                        id="gatewayname" required="">
                                                        <option>Select Option</option>
                                                        <option value="budgetsms" selected="">BudgetSMS</option>
                                                        <option value="infobip">Infobip</option>
                                                        <option value="nexmo">Nexmo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="title" class="col-xs-3 col-sm-3 col-form-label">Title <i
                                                        class="text-danger">*</i></label>
                                                <div class="col-xs-9 col-sm-9">
                                                    <input name="title" type="text" class="form-control" id="title"
                                                        placeholder="Title" value="Bdtask" required="">
                                                </div>
                                            </div>
                                            <span id="sms_field">
                                                <div class="form-group row"><label for="host"
                                                        class="col-xs-3 col-sm-3 col-form-label">Host <i
                                                            class="text-danger">*</i></label>
                                                    <div class="col-xs-9 col-sm-9"><input name="host" type="text"
                                                            class="form-control" id="host" placeholder="Host"
                                                            value="https://api.budgetsms.net/sendsms/?" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row"><label for="user"
                                                        class="col-xs-3 col-sm-3 col-form-label">Username <i
                                                            class="text-danger">*</i></label>
                                                    <div class="col-xs-9 col-sm-9"><input name="user" type="text"
                                                            class="form-control" id="user" placeholder="Username"
                                                            value="bdtask" required=""></div>
                                                </div>
                                                <div class="form-group row"><label for="userid"
                                                        class="col-xs-3 col-sm-3 col-form-label">User ID <i
                                                            class="text-danger">*</i></label>
                                                    <div class="col-xs-9 col-sm-9"><input name="userid" type="text"
                                                            class="form-control" id="userid" placeholder="User ID"
                                                            value="2345" required=""></div>
                                                </div>
                                                <div class="form-group row"><label for="api"
                                                        class="col-xs-3 col-sm-3 col-form-label">API Key <i
                                                            class="text-danger">*</i></label>
                                                    <div class="col-xs-9 col-sm-9"><input name="api" type="text"
                                                            class="form-control" id="api" placeholder="API Key"
                                                            value="r44ee7b6b3bd16cc69aec82f6tt" required=""></div>
                                                </div>
                                            </span>
                                            <div>
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <br>
                                                <br>
                                                <p>For SMS Gateway Use <a href="https://www.budgetsms.net"
                                                        target="_blank"><b>budgetsms</b></a>/<a
                                                        href="https://www.infobip.com"
                                                        target="_blank"><b>infobip</b></a>/<a href="https://www.nexmo.com"
                                                        target="_blank"><b>nexmo</b></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_test_name"
                                                value="54fb31aa70f3257474ee442afd0753a3">
                                            <div class="form-group row">
                                                <div class="col-xs-12">
                                                    <h3 class="text-center">Test Your SMS</h3>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="mobile_num" class="col-xs-3 col-sm-3 col-form-label">Mobile
                                                    No. <i class="text-danger">*</i></label>
                                                <div class="col-xs-9 col-sm-9">
                                                    <input type="text" class="form-control" name="mobile_num"
                                                        id="mobile_num" placeholder="e. 88xxxxxxxx">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="test_message" class="col-xs-3 col-sm-3 col-form-label">Message
                                                    <i class="text-danger">*</i></label>
                                                <div class="col-xs-9 col-sm-9">
                                                    <textarea rows="5" class="form-control" name="test_message" id="test_message" placeholder="Test Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row text-right">
                                                <div class="col-xs-12 col-sm-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-success">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
