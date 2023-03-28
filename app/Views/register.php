<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title><?= constant('PROJECT_NAME'); ?> | <?= $title; ?></title>
    <!-- page css -->    
    <link href="assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/pages/login.css" rel="stylesheet">
</head>
<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Montessori English Medium School</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register admin-login">
        <div class=" admin-login-body">
            <div class="copyright"> <a href="javascript:void(0)" class="form-logo"><img src="assets/images/logo-placeholder1.png" alt="Home" style="max-width:40px"></a>  Powered by RanSup Technolgies</div>
            <div class="row login_row">
                <div class="col-md-12 login-banner-block p-sm-5 p-4">
                    <div class="row login_menu mx-0">
                        <div class="col-6">
                            <div class="site-logo"><a href="javascript:void(0)" class="form-logo"><img src="assets/images/logo-placeholder1.png" alt="Home" /></a></div>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="col-md-6 login-block1 pt-3 pr-1 pr-md-5 mb-4 mb-md-0">
                            <div class="login-box card pt-4 mb-0 mx-auto">
                                <div class="card-body p-0 pr-1 pr-md-5">
                                    <form class="needs-validation form-control-line" novalidate id="loginform" action="/register/save" method="post">
                                        <h2 class="my-3 text-white">Create Account</h2>
                                        <h6 class="my-3 text-white">Having trouble signing in? <a href="javascript:void(0)" class="text-danger" id="to-recover">Click Here</a></h6>
                                        <div class="form-group m-t-40">
                                            <div class="col-xs-12">
                                                <input class="form-control text-white" type="text" name="name" placeholder="Name" id="validationCustom01" required>
                                                 <div class="invalid-feedback">Name is required</div>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40">
                                            <div class="col-xs-12">
                                                <input class="form-control text-white" type="email" name="email" placeholder="Username" id="validationCustom01" required>
                                                 <div class="invalid-feedback">Email is required</div>
                                            </div>
                                        </div>
                                        <div class="form-group m-t-40">
                                            <div class="col-xs-12">
                                                <input class="form-control text-white" type="text" name="phone" placeholder="Username" id="validationCustom01" required>
                                                 <div class="invalid-feedback">Phone is required</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control text-white" type="password" name="password" placeholder="Password" id="validationCustom02" required>
                                                <div class="invalid-feedback">Password is required</div>
                                            </div>
                                        </div>
                                        <div class="form-row m-t-40">
                                            <div class="col-md-6 col-12">
                                                <button class="btn btn-login btn-block text-uppercase font-weight-bold" type="submit">REGISTER</button>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <a href="/" class="btn btn-login btn-block text-uppercase font-weight-bold">L O G I N</a>
                                            </div>
                                        </div>
                                        <div class="row d-none">
                                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                                <div class="social">
                                                    <button class="btn btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </button>
                                                    <button class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="needs-validation form-control-line" novalidate id="recoverform" action="dashboard.html">
                                        <h2 class="my-3 text-white">Recover Password</h2>
                                        <h6 class="my-3 text-white">Enter your Email and instructions will be sent to you!</h6>
                                        <div class="form-group m-t-40">
                                            <div class="col-xs-12">
                                                <input class="form-control text-white" type="email" required="" placeholder="Email">
                                                 <div class="invalid-feedback">Email is required</div>
                                            </div>
                                        </div>
                                        <div class="form-row m-t-40">
                                            <div class="col-sm-6 col-xs-12 mb-sm-0 mb-3">
                                                <button class="btn btn-danger btn-block text-uppercase font-weight-bold" type="submit">R E S E T</button>
                                            </div>
                                            <div class="col-sm-6 col-xs-12 text-right">
                                                <a href="javascript:void(0)" id="to-login" class="btn btn-outline-danger btn-block text-uppercase font-weight-bold waves-effect waves-light">BACK TO LOGIN</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1 pl-md-4">
                            <div class="login_img text-center">
                                <img class="img-fluid" src="assets/images/login-banner.png">
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
     <script src="dist/js/user_validation.js" type="text/javascript"></script>
    <!--Custom JavaScript -->
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").hide();
            $("#recoverform").fadeIn();
        });
        $('#to-login').on("click", function() {
            $("#recoverform").hide();
            $("#loginform").fadeIn();
        });
        $(function () {
            $(".select2").select2({
                placeholder: "Select Location",
            });
        });
    </script>
</body>
</html>