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
                            <li class="breadcrumb-item"><a href="{{route('subscriber.index')}}">Subscribers</a></li>
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
                              <h3 class="card-title">Subscriber List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <tr>
                                  <td>#1</td>
                                  <td>testing@example.com	</td>
                                  <td>{{date('d M, Y')}}</td>
                                  <td>
                                    <a href="#" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                  </td>
                                </tr>

                                <tr>
                                    <td>#1</td>
                                    <td>testing@example.com	</td>
                                    <td>{{date('d M, Y')}}</td>
                                    <td>
                                      <a href="#" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>testing@example.com	</td>
                                    <td>{{date('d M, Y')}}</td>
                                    <td>
                                      <a href="#" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>testing@example.com	</td>
                                    <td>{{date('d M, Y')}}</td>
                                    <td>
                                      <a href="#" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>testing@example.com	</td>
                                    <td>{{date('d M, Y')}}</td>
                                    <td>
                                      <a href="#" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>testing@example.com	</td>
                                    <td>{{date('d M, Y')}}</td>
                                    <td>
                                      <a href="#" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>#1</td>
                                    <td>testing@example.com	</td>
                                    <td>{{date('d M, Y')}}</td>
                                    <td>
                                      <a href="#" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                               
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Email</th>
                                        <th>Created At</th>
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