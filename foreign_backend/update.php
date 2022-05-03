<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow_Methods:PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
// $affiliation = $data['affiliation'];
// $nic = $data['nic'];
$affiliation =1; 

include "config.php";

$sql = "update citizen_details set c_affiliation = '{$affiliation}' WHERE c_id = {$id}";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => "Congradualtions!. You have hired a new employee.", 'status' => true));
}
else{
    echo json_encode(array('message' => "Oops!. Couldn't  hire the employee.", 'status' => false));
}
?>