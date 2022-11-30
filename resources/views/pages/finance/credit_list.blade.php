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
                            <li class="breadcrumb-item"><a href="{{route('creditList')}}">Credits</a></li>
                            <li class="breadcrumb-item active">List</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Credit List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>User ID</th>
                                        <th>Amount</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <tr>
                                  <td>#1</td>
                                  <td>EWTTVX</td>
                                  <td>$5000</td>
                                  <td>Balance add</td>
                                  <td>
                                    <a href="{{route('creditDetails', 1)}}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                  </td>
                                </tr>

                                <tr>
                                    <td>#1</td>
                                    <td>EWTTVX</td>
                                    <td>$5000</td>
                                    <td>Balance add</td>
                                    <td>
                                      <a href="{{route('creditDetails', 1)}}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                    </td>
                                  </tr>


                                  <tr>
                                    <td>#1</td>
                                    <td>EWTTVX</td>
                                    <td>$5000</td>
                                    <td>Balance add</td>
                                    <td>
                                      <a href="{{route('creditDetails', 1)}}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>EWTTVX</td>
                                    <td>$5000</td>
                                    <td>Balance add</td>
                                    <td>
                                      <a href="{{route('creditDetails', 1)}}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>EWTTVX</td>
                                    <td>$5000</td>
                                    <td>Balance add</td>
                                    <td>
                                      <a href="{{route('creditDetails', 1)}}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>EWTTVX</td>
                                    <td>$5000</td>
                                    <td>Balance add</td>
                                    <td>
                                      <a href="{{route('creditDetails', 1)}}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>EWTTVX</td>
                                    <td>$5000</td>
                                    <td>Balance add</td>
                                    <td>
                                      <a href="{{route('creditDetails', 1)}}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>EWTTVX</td>
                                    <td>$5000</td>
                                    <td>Balance add</td>
                                    <td>
                                      <a href="{{route('creditDetails', 1)}}" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                    </td>
                                  </tr>


                                
                               
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>User ID</th>
                                        <th>Amount</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
@endsection