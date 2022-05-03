<?php
//POST method

//method 1
// header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow_Methods:POST');
// header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

// require_once('config.php');

// $username = $_POST['username'];
// $password = $_POST['password'];
// $passwordhash = md5($password); 

// $loginqry = "SELECT * FROM `foreign_companies` WHERE `fc_username`='$username' AND `fc_password`='$passwordhash'";

// $qry = mysqli_query($conn, $loginqry);

// if(mysqli_num_rows($qry) > 0)
// {
//     $userObj = mysqli_fetch_assoc($qry);
//     $response['status']=true;
//     $response['message']="Login success";
//     $response['data']=$userObj;
// }
// else
// {
//     $response['status']=false;
//     $response['message']="Invalid Login";
// }


// header('Content-Type: application/json; charset=UTF-8');
// echo json_encode($response);


//method 2
// require_once('config.php');

// $username= $_POST["username"];
// $password= $_POST["password"];
// $passwordhash = md5($password); 

// if(empty($username) || empty($password) ){
//     // echo json_encode(array('message' => 'All feilds are required.', 'status' => false));
//     echo "All feilds are required";
//     exit();
// }

// $user = mysqli_query($conn, "SELECT * FROM `foreign_companies` WHERE `fc_username`='$username'");

// if(mysqli_num_rows($user)>0){
//     $row = mysqli_fetch_assoc($user);
//     if($passwordhash == $row["fc_password"]){
//         echo "Login successfull";
//         $_SESSION["login"] = true;
//         $_SESSION["id"] = $row["fc_id"];
//     }
//     else{
//         echo "Wrong password";
//         exit;
//     }
// }
// else{
//     echo "User not registered";
//     exit;
// }

//method 3
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow_Methods:POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
include "config.php";
$username= $_POST["username"];
$password= $_POST["password"];

if(empty($username) || empty($password) ){
    echo json_encode(array('message' => 'All feilds are required.', 'status' => false));
    exit();
}
$passwordhash = md5($password); 

$user = mysqli_query($conn, "SELECT * FROM `foreign_companies` WHERE `fc_username`='$username'");

if(mysqli_num_rows($user)>0){
    $row = mysqli_fetch_assoc($user);
    if($passwordhash == $row["fc_password"]){
        //echo "Login Successful";
        echo json_encode(array('message' => 'Login Successful.', 'status' => true));
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["fc_id"];

    }
    else{
        // echo "Wrong password";
        echo json_encode(array('message' => 'Wrong password.', 'status' => false));
        exit;
    }
}
else{
    // echo "User not registered";
    echo json_encode(array('message' => 'User not registered.', 'status' => false));
    exit;
}

?>