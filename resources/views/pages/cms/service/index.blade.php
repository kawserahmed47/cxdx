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
                            <li class="breadcrumb-item"><a href="{{route('cms.service.index')}}">CMS</a></li>
                            <li class="breadcrumb-item active">service</li>
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
                                    <h6 class="fs-17 font-weight-600 mb-0">Page Service</h6>
                                    </div>
                                    <div class="text-right">
                                    <div class="actions">
                                    <a class="btn btn-success w-md m-b-5 pull-right" href="{{route('cms.service.create')}}"><i class="fa fa-plus" aria-hidden="true"></i> Service</a>
                                    </div>
                                    </div>
                                    </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Heading English</th>
                                        <th>Category</th>
                                        <th>Position Serial</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <tr>
                                  <td>1</td>
                                  <td>Security and Privacy-Centric	</td>
                                  <td>Service</td>
                                  <td>0</td>
                                  <td>
                                    <a href="#" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('cms.service.edit', 1)}}" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                  </td>
                                </tr>

                                
                                <tr>
                                    <td>1</td>
                                    <td>Security and Privacy-Centric	</td>
                                    <td>Service</td>
                                    <td>0</td>
                                    <td>
                                      <a href="#" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                      <a href="{{route('cms.service.edit', 1)}}" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  
                                <tr>
                                    <td>1</td>
                                    <td>Security and Privacy-Centric	</td>
                                    <td>Service</td>
                                    <td>0</td>
                                    <td>
                                      <a href="#" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                      <a href="{{route('cms.service.edit', 1)}}" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  
                                <tr>
                                    <td>1</td>
                                    <td>Security and Privacy-Centric	</td>
                                    <td>Service</td>
                                    <td>0</td>
                                    <td>
                                      <a href="#" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                      <a href="{{route('cms.service.edit', 1)}}" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  
                                <tr>
                                    <td>1</td>
                                    <td>Security and Privacy-Centric	</td>
                                    <td>Service</td>
                                    <td>0</td>
                                    <td>
                                      <a href="#" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                      <a href="{{route('cms.service.edit', 1)}}" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                                  
                                <tr>
                                    <td>1</td>
                                    <td>Security and Privacy-Centric	</td>
                                    <td>Service</td>
                                    <td>0</td>
                                    <td>
                                      <a href="#" class="btn btn-primary" title="Show"><i class="fa fa-eye"></i></a>
                                      <a href="{{route('cms.service.edit', 1)}}" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                      <a href="#" class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                                    </td>
                                  </tr>

                               
                            
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Heading English</th>
                                        <th>Category</th>
                                        <th>Position Serial</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                              </table>
                            </div>
                            <!-- /.card-body -->
                          </div>
                      <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                  </div>
                  <!-- /.row -->
            </div>
        </section>
@endsection