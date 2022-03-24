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
                            
                            <!-- <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form> -->

                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="companyName"
                                        placeholder="Company Name">
                                </div>
                                <div class="form-group row">                                    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="username"
                                            placeholder="Username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="Password" placeholder="Password">
                                    </div>
                                </div>

                                <div class="inputfield">
                                    <label>Select the company location</label>                          
                                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWTriBYWJYEzM-ZxPwcZGQEibq1Y0oTic&callback=initMap&libraries=&v=weekly" defer></script>                          
                                         <div id="map" style="width:535px;height:300px; background:grey; border-radius: 30px; margin-bottom: 15px;"></div>
                                </div> 

                                <script>
                                function initMap() {
                                    // The location of Uluru
                                    var uluru = { lat: 6.785277702704765, lng: 80.11392854687506 };
                                  
                                    
                                    // The map, centered at Uluru
                                    var map = new google.maps.Map(document.getElementById("map"), {
                                      zoom: 5,
                                      center: uluru,
                                      draggable:true
                                          
                                    });
                                  
                                    var marker = new google.maps.Marker({
                                      position: uluru,
                                      map: map,
                                      draggable:true
                                  
                                      
                                    });
                                  
                                    marker.setMap(map);
                                    
                                    
                                    map.addListener("center_changed", () => {
                                      // 3 seconds after the center of the map has changed, pan back to the
                                      // marker.
                                      window.setTimeout(() => {
                                        map.panTo(marker.getPosition());
                                      }, 3000);
                                    });
                                  
                                    marker.addListener("click", () => {
                                      map.setZoom(8);
                                      map.setCenter(marker.getPosition());
                                      console.log( 'i am dragged' );
                                  
                                  
                                      var lat = marker.getPosition().lat();
                                      var long = marker.getPosition().lng();
                                  
                                      console.log( lat );
                                      console.log( long );
                                  
                                      document.getElementById("latitude").value = lat;
                                      document.getElementById("loge").value = long;
                                  
                                    });
                                  }
                                </script>

                                <div class="form-group row">                                    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="latitude" name="lat"
                                            placeholder="Latitude">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                        id="loge"  name="lng" placeholder="Longitude">
                                    </div>
                                </div>

                                <a href="login.php" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                
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