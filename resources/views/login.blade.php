<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:57:51 GMT -->
<head><title>Admin Dashboard HTML Template</title>
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
@include('flash-message')
<div class="all-wrapper menu-side with-pattern">
    <div class="auth-box-w">
        <div class="logo-w"><a href="index.html"><img alt="" src="img/logo-big.png"></a>Fedmak</div>
        <h4 class="auth-header">Login Form</h4>
        <form action="{{route('loginCustom')}}" method="post">
            @csrf
            <div class="form-group"><label for="">Id No/Phone No:</label><input class="form-control" name="idno" placeholder="Enter your Id no/Phone no" required>
                <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            </div>
            <div class="form-group"><label for="">Password</label><input class="form-control" name="password" placeholder="Enter your password" type="password" required>
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
            </div>
            <div class="buttons-w">
                <button class="btn btn-primary" type="submit">Log me in</button>
                <div class="form-check-inline"><label class="form-check-label"><input class="form-check-input"
                                                                                      type="checkbox">Remember
                        Me</label></div>
            </div>
        </form>
    </div>
</div>
</body>
<!-- Mirrored from light.pinsupreme.com/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2020 15:57:52 GMT -->
</html>
