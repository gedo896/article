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
                     <form class="register-form" method="POST" action="{{ route('login') }}">
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

                            <label>Password</label>
                            <input type="password"
                                   name="password"
                                   class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   placeholder="Password"/>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <button class="btn btn-danger btn-block btn-round" type="submit">Login</button>

                        </form>

                        @if (Route::has('password.request'))
                            <div class="forgot">
                                <a href="{{ route('password.request') }}" class="btn btn-link btn-danger">{{ __('Forgot Your Password?') }}</a>
                            </div>
                        @endif

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


