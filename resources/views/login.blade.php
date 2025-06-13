<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb_admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb_admin') }}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-lg-4">
        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body p-0">
                <div class="p-5 text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    <form class="user" action="{{ route('login.submit') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" placeholder="Enter Username"
                                name="name">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" placeholder="Enter password"
                                name="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                        <hr>
                        @if (session('failed'))
                            <p class="text-danger">{{ session('failed') }}</p>
                        @endif
                    </form>
                    <hr>
                    <a class="small" href="/register">Create an Account!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb_admin') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('sb_admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb_admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb_admin') }}/js/sb-admin-2.min.js"></script>

</body>

</html>
