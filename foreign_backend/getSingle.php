<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];

include "config.php";

// $sql = "SELECT * FROM citizen_details WHERE c_id = {$id}";

$sql = "select 
citizen_details.c_id, 
citizen_details.c_nic, 
citizen_details.c_name, 
citizen_details.c_latitude, 
citizen_details.c_longitude, 
highesteducation.e_name, 
citizen_details.c_email, 
citizen_details.c_address, 
citizen_details.c_profession,  
citizen_details.c_birthday,
citizen_qualification.cv_filename,
citizen_qualification.coverletter_filename,
citizen_qualification.certifi_filename
from citizen_details 
INNER JOIN highesteducation ON citizen_details.c_highestEducation=highesteducation.e_id
INNER JOIN citizen_qualification ON citizen_details.c_id=citizen_qualification.c_id
WHERE citizen_details.c_id = {$id}
";


$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if(mysqli_num_rows($result) > 0 ){
	
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($output);

}else{

 echo json_encode(array('message' => 'No Record Found.', 'status' => false));

}  
?>