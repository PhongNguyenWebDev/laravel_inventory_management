<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App title -->
    <title>Zircos - Responsive Admin Dashboard Template</title>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="spinner-wrapper">
                    <div class="rotator">
                        <div class="inner-spin"></div>
                        <div class="inner-spin"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HOME -->
    <section>
        {{-- <div class="container-alt">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="m-t-40 account-pages">
                            <div class="text-center account-logo-box">
                                <h2 class="text-uppercase">
                                    <a href="index.html" class="text-success">
                                        <span><img src="assets/images/logo.png" alt="" height="36"></span>
                                    </a>
                                </h2>
                                <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                            </div>
                            <div class="account-content">
                                <form class="form-horizontal" action="#">
                                    <div class="form-group ">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="text" required=""
                                                placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input class="form-control" type="password" required=""
                                                placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group text-center m-t-30">
                                        <div class="col-sm-12">
                                            <a href="page-recoverpw.html" class="text-muted"><i
                                                    class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                        </div>
                                    </div>
                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-xs-12">
                                            <button class="btn w-md btn-bordered btn-danger waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </div>

                                </form>

                                <div class="clearfix"></div>

                            </div>
                        </div>
                        <!-- end card-box-->
                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="{{ route('register') }}"
                                        class="text-primary m-l-5"><b>Sign Up</b></a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div> --}}
        @yield('content')
    </section>
    <!-- END HOME -->

    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>
