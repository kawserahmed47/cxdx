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
                        <li class="breadcrumb-item active">Language</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">Language List</h6>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td colspan="3">
                                            <form 
                                                class="form-inline" method="post" accept-charset="utf-8">
                                                <input type="hidden" name="csrf_test_name"
                                                    value="54fb31aa70f3257474ee442afd0753a3">
                                                <div class="form-group">
                                                    <label class="sr-only" for="addLanguage"> Language Name</label>
                                                    <input name="language" type="text" class="form-control"
                                                        id="addLanguage" placeholder="Language Name">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><i class="fa fa-th-list"></i></th>
                                        <th>Language</th>
                                        <th><i class="fa fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>English</td>
                                        <td><a href="#"
                                                class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>French</td>
                                        <td><a href="#"
                                                class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
