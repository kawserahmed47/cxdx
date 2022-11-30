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
                        <li class="breadcrumb-item active">App Settings</li>
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
                            <h3 class="card-title">App Settings</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="app_settings">App Settings <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="app_settings" placeholder="App Settings">
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="address" placeholder="Address">
                                        </div>

                                        <div class="form-group">
                                            <label for="email">Email <span class="text-danger"> *</span></label>
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="phone">Phone <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="phone" placeholder="Phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="time_zone">Time Zone <span class="text-danger"> *</span></label>
                                            <select class="form-control" name="time_zone" id="time_zone">
                                                <option value="">Select Timezone </option>
                                            </select>
                                        </div>

                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                       

                                        <div class="form-group">
                                            <label for="latitude">Latitude <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="latitude" placeholder="Latitude">
                                        </div>

                                        <div class="form-group">
                                            <label for="longitude">Longitude <span class="text-danger"> *</span></label>
                                            <input type="text" class="form-control" id="longitude" placeholder="Longitude">
                                        </div>

                                        <div class="form-group">
                                            <label for="office_time">Footer Text</label>
                                            <textarea id="office_time" class="form-control" rows="3" placeholder="Office Time"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="office_time">Office Time</label>
                                            <textarea id="office_time" class="form-control" rows="3" placeholder="Office Time"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="reset" class="btn btn-danger">Reset</button>
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
