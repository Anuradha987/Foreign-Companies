<?php
//POST method
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
        echo json_encode(array('message' => 'Login Successful.', 'status' => true));
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["fc_id"];

    }
    else{
        echo json_encode(array('message' => 'Wrong password.', 'status' => false));
        exit;
    }
}
else{
    echo json_encode(array('message' => 'User not registered.', 'status' => false));
    exit;
}

?>