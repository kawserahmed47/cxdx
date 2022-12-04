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
                        <li class="breadcrumb-item"><a href="{{ route('cms.content.index') }}">CMS</a></li>
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

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                            <div>
                            <h6 class="fs-17 font-weight-600 mb-0">Add Content</h6>
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
                                        <input type="hidden" name="csrf_test_name" value="6c313806bf5703a9a82f30164f68a9d9">
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
                                            <label for="headline_fr" class="col-sm-2 col-form-label">Headline Français</label>
                                            <div class="col-sm-10">
                                                <input name="headline_fr" value="" class="form-control"
                                                    placeholder="Headline Français" type="text" id="headline_fr">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="article_image" class="col-sm-2 col-form-label">Image</label>
                                            <div class="col-sm-10"> 
                                                <input name="article_image" type="file" id="article_image">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="video" class="col-sm-2 col-form-label">video (If Youtube
                                                Link)</label>
                                            <div class="col-sm-10">
                                                <input name="video" value="" class="form-control"
                                                    placeholder="video (If Youtube Link)" type="text" id="video">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="article1_en" class="col-sm-2 col-form-label">Article English</label>
                                            <div class="col-sm-10">
                                                <textarea id="summernote" name="article1_en" class="form-control editor" placeholder="Article English" type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="article1_fr" class="col-sm-2 col-form-label">Article Français</label>
                                            <div class="col-sm-10">
                                                <textarea id="summernote1" name="article1_fr" class="form-control" placeholder="Article Français" type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="article2_en" class="col-sm-2 col-form-label">Article English</label>
                                            <div class="col-sm-10">
                                                <textarea id="summernote2" name="article2_en" class="form-control editor" placeholder="Article English" type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="article2_fr" class="col-sm-2 col-form-label">Article Français</label>
                                            <div class="col-sm-10">
                                                <textarea id="summernote3" name="article2_fr" class="form-control" placeholder="Article Français" type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="cat_id" class="col-sm-2 col-form-label">Select Category<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-10">
                                                <select class="form-control basic-single" name="cat_id">
                                                    <option value="">Select Category</option>
                                                    <option value="27">Quick Exchange</option>
                                                    <option value="25">Trading</option>
                                                    <option value="24">Blockchain</option>
                                                    <option value="23">Mining</option>
                                                    <option value="22">DASH</option>
                                                    <option value="21">LTC</option>
                                                    <option value="20">ETH</option>
                                                    <option value="19">BTC</option>
                                                    <option value="18">Coin Details</option>
                                                    <option value="17">Forgot Password</option>
                                                    <option value="16">Register</option>
                                                    <option value="15">Client</option>
                                                    <option value="14">Testimonial</option>
                                                    <option value="13">Team</option>
                                                    <option value="12">Contact</option>
                                                    <option value="11">Service</option>
                                                    <option value="10">F.A.Q</option>
                                                    <option value="9">News</option>
                                                    <option value="8">About</option>
                                                    <option value="7">More</option>
                                                    <option value="6">Sell</option>
                                                    <option value="5">Buy</option>
                                                    <option value="3">Package</option>
                                                    <option value="2">Coinmarket</option>
                                                    <option value="1">Home</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="position_serial" class="col-sm-2 col-form-label">Position Serial<i
                                                    class="text-danger">*</i></label>
                                            <div class="col-sm-10">
                                                <input name="position_serial" value="" class="form-control" placeholder="Position Serial" type="text" id="position_serial">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-sm-offset-3" align="center">
                                                <a href="{{ route('cms.content.index') }}"
                                                    class="btn btn-primary  w-md m-b-5">Cancel</a>
                                                <button type="submit" class="btn btn-success  w-md m-b-5">Create</button>
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
