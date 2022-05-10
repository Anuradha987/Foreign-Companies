<?php 
// if(isset($_SESSION["id"])){
//   header ('Location: ./index.php');
// }
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

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                    <img src="http://relibion.in/images/Logo/signup-page.png" style="object-fit: cover; height:760px; width:530px; margin-top:60px;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                            <form class="user" id="registerationForm">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="companyName" name="companyName"
                                        placeholder="Company Name">
                                    <input type="hidden" id="action" value="register" hidden="">
                                </div>
                                <div class="form-group row">                                    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="username" name="username"
                                            placeholder="Username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="password" placeholder="Password">
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
                                      var lng = marker.getPosition().lng();
                                  
                                      console.log( lat );
                                      console.log( lng );
                                  
                                      document.getElementById("lat").value = lat;
                                      document.getElementById("lng").value = lng;
                                  
                                    });
                                  }
                                </script>

                                <div class="form-group row">                                    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="lat" name="lat"
                                            placeholder="Latitude">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user"
                                        id="lng"  name="lng" placeholder="Longitude">
                                    </div>
                                </div>

                                <div><input type="hidden" name ="crud_req" value="register"></div>
                                <input type="submit"  id="registerBtn" value="Register Company" class="btn btn-primary btn-user btn-block">
                                
                            </form>

                            <div id= "error-message" class="message alert alert-danger" role="alert"></div>
                            <div id= "success-message" class="message alert alert-success" role="alert"></div>
                                
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

<script type="text/javascript">
    
$(document).ready(function(){

    //show success or error message
    function message(message, status){
    if(status == true){
      $("#success-message").html(message).slideDown();
      $("#error-message").slideUp();
      setTimeout(function(){
        $("#success-message").slideUp();
      },4000);

    }else if(status == false){
      $("#error-message").html(message).slideDown();
      $("#success-message").slideUp();
      setTimeout(function(){
        $("#error-message").slideUp();
      },4000);
    }
  }

    //function for converting form data to JSON Object
    function jsonData(targetForm){        
        var arr = $(targetForm).serializeArray();
        var obj ={};
        for(var a= 0; a < arr.length; a++){
            if(arr[a].value == ""){
                return false;
            }
            obj[arr[a].name] = arr[a].value;
        }
        var json_string = JSON.stringify(obj);
        return json_string;
    }

    //register new company. insert data. 
    $("#registerBtn").on("click",function(e){
    e.preventDefault();
    var jsonObj = jsonData("#registerationForm");
    if( jsonObj == false){
      message("All Fields are required.",false);
    }else{
      $.ajax({ 
      url : 'http://localhost/apicopy/foreign_backend/insert.php',
      type : "POST",
      data : jsonObj,
      success : function(data){
        message(data.message, data.status);
       
        if(data.status == true){
        //   $("#registerationForm").trigger("reset");
        location.href = "./index.php"
         }
      }
    });
   }
  });

  
})
</script>

</html>
