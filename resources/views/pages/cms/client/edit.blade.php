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
                            <li class="breadcrumb-item"><a href="{{route('cms.client.index')}}">CMS</a></li>
                            <li class="breadcrumb-item active">content</li>
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
                            <h6 class="fs-17 font-weight-600 mb-0">Edit Client</h6>
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
                            <form  enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <input type="hidden" name="csrf_test_name" value="6c313806bf5703a9a82f30164f68a9d9">
                            <input type="hidden" name="article_id" value="" style="display:none;">
                            <div class="form-group row">
                            <label for="headline_en" class="col-sm-2 col-form-label">Client<i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                            <input name="headline_en" value="" class="form-control" placeholder="Client" type="text" id="headline_en">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="article_image" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                            <input name="article_image" class="form-control" placeholder="Logo" type="file" id="article_image">
                            <input type="hidden" name="article_image_old" value="">
                            <div class="text-danger">200x200 px(jpg, jpeg, png)</div>
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="article1_en" class="col-sm-2 col-form-label">Link</label>
                            <div class="col-sm-10">
                            <input name="article1_en" value="" class="form-control" placeholder="Link" type="text" id="article1_en">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="position_serial" class="col-sm-2 col-form-label">Position Serial<i class="text-danger">*</i></label>
                            <div class="col-sm-10">
                            <input name="position_serial" value="" class="form-control" placeholder="Position Serial" type="text" id="position_serial">
                            </div>
                            </div>
                            <div class="row" align="center">
                            <div class="col-sm-12 col-sm-offset-3">
                            <a href="{{route('cms.client.index')}}" class="btn btn-primary  w-md m-b-5">Cancel</a>
                            <button type="submit" class="btn btn-success  w-md m-b-5">Update</button>
                            </div>
                            </div>
                            </form> </div>
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