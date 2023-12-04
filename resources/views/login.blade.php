<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/css/adminlte.css" />
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <p href="#">Sign In</p>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body px-4 py-5 rounded">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="/login" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="ri-mail-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="ri-lock-2-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">
                                Sign In
                                <i class="ri-login-box-line"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/assets/js/adminlte.min.js"></script>
</body>

</html>
