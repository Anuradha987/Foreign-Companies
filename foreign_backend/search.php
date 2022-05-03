<?php
sleep(1);
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

//// $data = json_decode(file_get_contents("php://input"), true);

//// $search_value = $data['search'];


$search_value = isset($_GET['search']) ? $_GET['search'] : die();

include "config.php";

// $sql ="select * from citizen_details where c_highestEducation like '%{$search_value}%'";

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
	WHERE citizen_details.c_isValid = true && citizen_details.c_affiliation IS NULL && c_highestEducation like '%{$search_value}%' 
	";


$result = mysqli_query($conn, $sql) or die("SQL Query Failed.") ;

if(mysqli_num_rows($result) > 0 ){
	
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($output);

}

else{
    echo json_encode(array('message' => 'No search found', 'status' => false));
}

?>
