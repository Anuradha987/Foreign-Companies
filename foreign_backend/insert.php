<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow_Methods:POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$companyName = $data['companyName'];
$username = $data['username'];
$password = $data['password'];
$lat = $data['lat'];
$lng = $data['lng'];

if(empty($companyName) || empty($username) || empty($password) || 
empty($lat) ||empty($lng)){
    echo json_encode(array('message' => 'All feilds are required.', 'status' => false));
    exit();
}


// $passwordhash = password_hash($password, PASSWORD_DEFAULT); 
$passwordhash = md5($password); 

include "config.php";
$sql = "Insert into foreign_companies (fc_name, fc_username, fc_password, fc_latitude, fc_longitude) values ('{$companyName}', '{$username}', '{$passwordhash}', '{$lat}', '{$lng}')";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Record inserted successfully', 'status' => true));
}
else{
    echo json_encode(array('message' => 'Record not inserted', 'status' => false));
}
?>