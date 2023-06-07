<?php

$error_fname = '';
$error_lname = '';
$error_email = '';
$error_password = '';
$error_rpassword = '';



if ($_POST) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];

    if($fname == ''){
        $error_fname = "First name require!";
    } 
    elseif(strlen($fname) <= 2 ) {
        $error_fname = "more than 2 letter require!";
    }
    if($lname == ''){
        $error_lname = "last name require!";
    }
    if($email == ''){
        $error_email = "email name require!";
    }
    if($password == ''){
        $error_password = "password name require!";
    }
    if($rpassword == ''){
        $error_rpassword = "password name require!";
    }
    
    
    

    echo $fname . $lname .  $email . $password . $rpassword  ;
}


?>






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="register.php" >
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name" name="fname" >
                                            <span style="color: red; font-size: 13px; " ><?php echo $error_fname; ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name" name="lname" >
                                            <span style="color: red; font-size: 13px; " ><?php echo $error_lname; ?></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address" name="email" >
                                        <span style="color: red; font-size: 13px; " ><?php echo $error_email; ?></span>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password" >
                                            <span style="color: red; font-size: 13px; " ><?php echo $error_password; ?></span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="rpassword" >
                                            <span style="color: red; font-size: 13px; " ><?php echo $error_rpassword; ?></span>
                                    </div>
                                </div>
                                <button type="submit"  class="btn btn-primary btn-user btn-block" >
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>