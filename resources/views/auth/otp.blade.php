@extends('auth.master')

@section('content')
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1"><b>CxDx</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">An OTP sent to your email.</p>
                <form action="{{route('resetPassword')}}" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="OTP">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Check OTP</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">Login</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection