<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow_Methods:PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];


include "config.php";

$sql = "update citizen_details set c_affiliation = NULL WHERE c_id = {$id}";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => "Employee removed successfully.", 'status' => true));
}
else{
    echo json_encode(array('message' => "Oops!. Couldn't removed the employee.", 'status' => false));
}
?>