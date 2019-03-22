<!doctype html>
<html lang="en">

@include('front.particle.head')

<body>
@include('front.particle.navbar')
<div class="wrapper">
    <div class="page-header" style="background-image: url('{{ asset('assetsA/img/login-image.jpg') }}');">
        <div class="filter"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ml-auto mr-auto">
                    <div class="card card-register">
                        <h3 class="title">Login</h3>
                        <form class="register-form" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <label>Email</label>
                            <input type="text"
                                   name="email"
                                   class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{ old('email') }}"
                                   placeholder="Email"/>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <button type="submit" class="btn btn-primary">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="footer register-footer text-center">
                <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
            </div>
        </div>
    </div>
</div>
</body>

@include('front.particle.script')
@section('scripts')
    <script src="{{ asset('assetsA/js/tether.min.js') }}" type="text/javascript"></script>
@stop
</html>






{{--@extends('layouts.app')--}}

{{--@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
