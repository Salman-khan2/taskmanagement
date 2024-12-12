<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="login, admin dashboard" />
    <meta name="description" content="Login page for the admin dashboard" />
    <title>Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png" />
    <link href="../../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js for IE8 support -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="main-wrapper">
        <!-- Preloader -->
        <div class="preloader">
            <svg class="tea lds-ripple" width="37" height="48" viewBox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#1e88e5" stroke-width="2"></path>
                <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#1e88e5" stroke-width="2"></path>
                <path id="teabag" fill="#1e88e5" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
                <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#1e88e5"></path>
                <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#1e88e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
        <!-- Login Box -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background: url('https://img.freepik.com/free-vector/corporate-business-growth-arrow-showing-upward-trend_1017-53556.jpg') no-repeat center center; background-size: cover;">
            <div class="auth-box p-4 bg-white rounded" style="margin: 5% 0%;">
            @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
            @endif
                <div id="loginform">
                    <div class="logo">
                        <h3 class="box-title mb-3">Sign In</h3>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal mt-3 form-material" id="loginform" method="POST" action="/login" novalidate>
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control form-input-bg" id="tb-remail" placeholder="john@gmail.com" required name="email" />
                            <label for="tb-remail">Email</label>
                            <div class="invalid-feedback">Email is required</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control form-input-bg" id="text-rpassword" placeholder="*****" required name="password" />
                            <label for="text-rpassword">Password</label>
                            <div class="invalid-feedback">Password should have minimum 6 characters</div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex">
                                <div class="checkbox checkbox-info pt-0">
                                    <input id="checkbox-signup" type="checkbox" class="material-inputs chk-col-indigo" />
                                    <label for="checkbox-signup"> Remember me </label>
                                </div>
                                <!-- <div class="ms-auto">
                                    <a href="#" class="link font-weight-medium"><i class="fa fa-lock me-1"></i> Forgot pwd?</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="form-group text-center mt-4 mb-3">
                            <div class="col-xs-12">
                                <button class="btn btn-info d-block w-100 waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                        <!-- <div class="form-group mb-0 mt-4">
                            <div class="col-sm-12 justify-content-center d-flex">
                                <p>Don't have an account? <a href="/register" class="text-info font-weight-medium ms-1">Sign Up</a></p>
                            </div>
                        </div> -->
                    </form>
                </div>
                <div id="recoverform" style="display: none;">
                    <div class="logo">
                        <h3 class="font-weight-medium mb-3">Recover Password</h3>
                        <span class="text-muted">Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <form class="col-12" action="#">
                        <div class="form-group row">
                            <div class="col-12">
                                <input class="form-control" type="email" required="" placeholder="Email" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <button class="btn d-block w-100 btn-primary text-uppercase" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- All Required JS -->
    <script src="../../dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="../../dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(".preloader").fadeOut();
        // ==============================================================
        // Login and Recover Password
        // ==============================================================
        $("#to-recover").on("click", function () {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });

        $(document).ready(function () {
            $('#loginform').on('submit', function (e) {
                var isValid = true;

                // Check for email
                var email = $('#tb-remail').val().trim();
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (email === '' || !emailPattern.test(email)) {
                    $('#tb-remail').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#tb-remail').removeClass('is-invalid');
                }

                // Check for password
                if ($('#text-rpassword').val().trim() === '' || $('#text-rpassword').val().length < 6) {
                    $('#text-rpassword').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#text-rpassword').removeClass('is-invalid');
                }

                // Check for checkbox
                if (!$('#checkbox-signup').is(':checked')) {
                    $('#checkbox-signup').addClass('is-invalid');
                    isValid = false;
                } else {
                    $('#checkbox-signup').removeClass('is-invalid');
                }

                if (!isValid) {
                    e.preventDefault(); 
                }
            });
        });
    </script>
</body>
</html>