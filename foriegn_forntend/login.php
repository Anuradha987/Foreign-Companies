<?php
if(isset($_SESSION["id"])){
    header("Location: ./index.php");
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

    <title>Bureau - Foriegn</title>

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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                            <img src="https://media.istockphoto.com/vectors/international-migration-abstract-concept-vector-illustration-vector-id1274747986?k=20&m=1274747986&s=612x612&w=0&h=bIoDIdvKO-gGgLdBOpLM_KH7Q46lUCxxSC2AAqLFAK4=" style="background-size: cover; margin-left: -60px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    
                                    <form action="" method="POST" class="user" id="loginForm">
                                    
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="username" name="username"
                                            placeholder="Username">
                                            <input type="hidden" id="action" value="login">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <input class="btn btn-primary btn-user btn-block" onclick="submitData();" id="loginBtn" type="submit" name="loginBtn" value="Login"> 
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                    
                            <div id= "error-message" class="message alert alert-danger" role="alert"></div>
                            <div id= "success-message" class="message alert alert-success" role="alert"></div>
                                </div>
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



<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script type="text/javascript">

function submitData(){

$(document).ready(function(){

    var data ={
        username: $('#username').val(), 
        password: $('#password').val(), 
        // action: $('#action').val(),
    };
    $.ajax({
        url:'http://localhost/apicopy/foreign_backend/login.php',
        type:'POST', 
        data : jsonObj,
        success : function(data){
            message(data.message, data.status);
            alert(response);
            if(data.status == true){
                location.href = "./index.php"
            }
        }
    })
})
};
</script>

</html>