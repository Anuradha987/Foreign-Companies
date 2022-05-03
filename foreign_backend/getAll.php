<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "config.php";
//select citizens that have been approved by the bureau office and no affiliation
$sql ="select 
		citizen_details.c_id, 
		citizen_details.c_nic, 
		citizen_details.c_name, 
		citizen_details.c_latitude, 
		citizen_details.c_longitude, 
		highesteducation.e_name, 
		citizen_details.c_email
	from citizen_details 
	INNER JOIN highesteducation ON citizen_details.c_highestEducation=highesteducation.e_id
	WHERE citizen_details.c_isValid = true && citizen_details.c_affiliation IS NULL 
	";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");

if(mysqli_num_rows($result) > 0 ){
	
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($output);

}else{

 echo json_encode(array('message' => 'No Record Found.', 'status' => false));

}
?>