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
                        <li class="breadcrumb-item active">Commission Setup</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">Commission Setup</h6>
                                </div>
                                <div class="text-right">
                                    <div class="actions">
                                        <a href=" " class="action-item"><i class="ti-reload"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form  method="post" accept-charset="utf-8">
                                <input type="hidden" name="csrf_test_name" value="54fb31aa70f3257474ee442afd0753a3">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Level/Generation</th>
                                                <th>Personal Investment</th>
                                                <th>Total investment</th>
                                                <th>Team Bonus</th>
                                                <th>Referral Bonus(%)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <input type="hidden" name="id[]" value="2">
                                            <tr>
                                                <td><input class="form-control" type="number" name="level[]"
                                                        value="1"></td>
                                                <td><input class="form-control" type="number" name="personal_invest[]"
                                                        value="500"></td>
                                                <td><input class="form-control" type="number" name="total_invest[]"
                                                        value="1000"></td>
                                                <td><input class="form-control" type="number" name="team_bonous[]"
                                                        value="50"></td>
                                                <td><input class="form-control" type="number" name="referral_bonous[]"
                                                        value="5"></td>
                                            </tr>
                                            <input type="hidden" name="id[]" value="1">
                                            <tr>
                                                <td><input class="form-control" type="number" name="level[]"
                                                        value="2"></td>
                                                <td><input class="form-control" type="number" name="personal_invest[]"
                                                        value="2000"></td>
                                                <td><input class="form-control" type="number" name="total_invest[]"
                                                        value="4000"></td>
                                                <td><input class="form-control" type="number" name="team_bonous[]"
                                                        value="100"></td>
                                                <td><input class="form-control" type="number" name="referral_bonous[]"
                                                        value="4"></td>
                                            </tr>
                                            <input type="hidden" name="id[]" value="3">
                                            <tr>
                                                <td><input class="form-control" type="number" name="level[]"
                                                        value="3"></td>
                                                <td><input class="form-control" type="number" name="personal_invest[]"
                                                        value="5000"></td>
                                                <td><input class="form-control" type="number" name="total_invest[]"
                                                        value="10000"></td>
                                                <td><input class="form-control" type="number" name="team_bonous[]"
                                                        value="200"></td>
                                                <td><input class="form-control" type="number" name="referral_bonous[]"
                                                        value="3"></td>
                                            </tr>
                                            <input type="hidden" name="id[]" value="4">
                                            <tr>
                                                <td><input class="form-control" type="number" name="level[]"
                                                        value="4"></td>
                                                <td><input class="form-control" type="number" name="personal_invest[]"
                                                        value="12000"></td>
                                                <td><input class="form-control" type="number" name="total_invest[]"
                                                        value="24000"></td>
                                                <td><input class="form-control" type="number" name="team_bonous[]"
                                                        value="300"></td>
                                                <td><input class="form-control" type="number" name="referral_bonous[]"
                                                        value="2"></td>
                                            </tr>
                                            <input type="hidden" name="id[]" value="5">
                                            <tr>
                                                <td><input class="form-control" type="number" name="level[]"
                                                        value="5"></td>
                                                <td><input class="form-control" type="number" name="personal_invest[]"
                                                        value="30000"></td>
                                                <td><input class="form-control" type="number" name="total_invest[]"
                                                        value="60000"></td>
                                                <td><input class="form-control" type="number" name="team_bonous[]"
                                                        value="500"></td>
                                                <td><input class="form-control" type="number" name="referral_bonous[]"
                                                        value="1"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div>
                                    <button class="btn btn-success"> Update</button>
                                </div>
                            </form>
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
