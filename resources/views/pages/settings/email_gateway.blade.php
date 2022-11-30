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
                        <li class="breadcrumb-item active">Email Gateway</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">Email Gateway</h6>
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
                                <div class="col-md-6">
                                    <form 
                                        enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="54fb31aa70f3257474ee442afd0753a3">
                                        <input type="hidden" name="es_id" value="2" style="display:none;">
                                        <div class="form-group row">
                                            <label for="email_title" class="col-xs-3 col-sm-3 col-form-label">Title <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_title" type="text" class="form-control"
                                                    id="email_title" placeholder="Title" value="nishue" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_protocol" class="col-xs-3 col-sm-3 col-form-label">Protocol <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_protocol" type="text" class="form-control"
                                                    id="email_protocol" placeholder="Protocol" value="gsmtp"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_host" class="col-xs-3 col-sm-3 col-form-label">Host <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_host" type="text" class="form-control" id="email_host"
                                                    placeholder="Host" value="ssl://smtp.gmail.com" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_port" class="col-xs-3 col-sm-3 col-form-label">Port <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_port" type="text" class="form-control" id="email_port"
                                                    placeholder="Port" value="465 " required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_user" class="col-xs-3 col-sm-3 col-form-label">Username <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_user" type="text" class="form-control" id="email_user"
                                                    placeholder="Username" value="bdtask@gmail.com" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_password" class="col-xs-3 col-sm-3 col-form-label">Password <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_password" type="password" class="form-control"
                                                    id="email_password" placeholder="Password" value="MTIzNA=="
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_mailtype" class="col-xs-3 col-sm-3 col-form-label">Mail Type
                                                <i class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_mailtype" type="text" class="form-control"
                                                    id="email_mailtype" placeholder="Mail Type" value="html"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_charset" class="col-xs-3 col-sm-3 col-form-label">Charset <i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_charset" type="text" class="form-control"
                                                    id="email_charset" placeholder="Charset" value="utf-8"
                                                    required="">
                                            </div>
                                        </div>
                                        <div >
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-sm-3">
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="notice-board">
                                                <p>Note: If problem with google smtp then please use another third party
                                                    smtp server
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="54fb31aa70f3257474ee442afd0753a3">
                                        <h3 class="text-center">Test Your SMTP Email Server</h3>
                                        <div class="form-group row">
                                            <label for="email_to" class="col-xs-3  col-sm-3 col-form-label">To<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_to" type="email" class="form-control"
                                                    id="email_to" placeholder="e. example@mail.com" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_sub" class="col-xs-3 col-sm-3 col-form-label">Subject<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <input name="email_sub" type="text" class="form-control"
                                                    id="email_sub" placeholder="e. Test Mail" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_message" class="col-xs-3 col-sm-3 col-form-label">Message<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-xs-9 col-sm-9">
                                                <textarea rows="5" class="form-control" name="email_message" id="email_message"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col-xs-9 col-sm-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Send</button>
                                            </div>
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
