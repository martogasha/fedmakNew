<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:57:51 GMT -->
<head><title>Login</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="http://fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.css" rel="stylesheet">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="css/main5739.css?version=4.5.0" rel="stylesheet">
</head>
<body class="auth-wrapper">
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w"><a href="index.html"><img alt="" src="img/logo-big.png">Fedmak</a></div>
        <h4 class="auth-header">Login Form</h4>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="idno" class="col-sm-12">{{ __('Id No') }}</label>
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>

                <div class="col-md-12">
                    <input id="idno" type="text" class="form-control{{ $errors->has('idno') ? ' is-invalid' : '' }}" name="idno" value="{{ old('idno') }}" required autofocus>

                    @if ($errors->has('idno'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idno') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>

    </div>
</div>
</body>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:57:52 GMT -->
</html>
