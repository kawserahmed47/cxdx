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
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admins</a></li>
                            <li class="breadcrumb-item active">Add Admin</li>
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
                          <h3 class="card-title">Add Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                          <div class="card-body">

                            <div class="row">
                                <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="first_name">First Name<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" id="first_name" placeholder="First Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="last_name">Last Name<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                                      </div>
                                      <div class="form-group">
                                        <label for="email">Email Address<span class="text-danger"> *</span></label>
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                      </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password<span class="text-danger"> *</span></label>
                                        <input type="password" class="form-control" id="password" placeholder="*******">
                                      </div>
                                      <div class="form-group">
                                        <label for="confirm_password">Confirm Password<span class="text-danger"> *</span></label>
                                        <input type="password" class="form-control" id="confirm_password" placeholder="*******">
                                      </div>

                                     
                                      <div class="form-group ">
                                        <label for="status" class=" col-form-label">Status<span class="text-danger"> *</span></label>
                                        <div class="col-sm-12">
                                        <label class="radio-inline">
                                        <input type="radio" name="status" value="1" checked="checked">
                                        Active </label>
                                        <label class="radio-inline">
                                        <input type="radio" name="status" value="0">
                                        Inactive </label>
                                        </div>
                                        </div>
                                </div>
                            </div>

                            
                          
                          </div>
                          <!-- /.card-body -->
          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                      <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                  </div>
                  <!-- /.row -->
            </div>
        </section>
@endsection