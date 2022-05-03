<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow_Methods:DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

include "config.php";

$sql ="delete from foreign_companies where fc_id = {$id}";

if(mysqli_query($conn, $sql)){
    echo json_encode(array('message' => 'Recorde deleted', 'status' => true));
}    
else{
    echo json_encode(array('message' => 'Recorde not deleted', 'status' => false));
}
?>