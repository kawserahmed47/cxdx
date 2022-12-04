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
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">CMS</a></li>
                        <li class="breadcrumb-item active">Conatct</li>
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

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 font-weight-600 mb-0">Edit Contact</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href="" class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="border_preview">
                                    <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <input type="hidden" name="csrf_test_name"
                                            value="6c313806bf5703a9a82f30164f68a9d9">
                                        <input type="hidden" name="article_id" value="" style="display:none;">
                                        <div class="form-group row">
                                            <label for="headline_en" class="col-sm-2 col-form-label">Headline English<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-10">
                                                <input name="headline_en" value="" class="form-control"
                                                    placeholder="Headline English" type="text" id="headline_en">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="headline_fr" class="col-sm-2 col-form-label">Headline
                                                Français</label>
                                            <div class="col-sm-10">
                                                <input name="headline_fr" value="" class="form-control"
                                                    placeholder="Headline Français" type="text" id="headline_fr">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="headline_fr" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" class="form-control" placeholder="Address" col="30" rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="headline_fr" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" class="form-control" placeholder="Phone" col="30" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="headline_fr" class="col-sm-2 col-form-label">Office Time</label>
                                            <div class="col-sm-10">
                                                <textarea name="" id="" class="form-control" placeholder="Office Time" col="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-offset-3" align="center">
                                                <a href="{{ route('cms.content.index') }}"
                                                    class="btn btn-primary  w-md m-b-5">Cancel</a>
                                                <button type="submit" class="btn btn-success  w-md m-b-5">Update</button>
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
