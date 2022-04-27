<?php
	$delete_id = $_GET['delete_id'];
	
	$data = file_get_contents('..\Dcontact.json');
	$data = json_decode($data, true);
 
	
	//Method Delete
	unset($data[$delete_id]);

	//encode back to jsons
	$data = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents('..\Dcontact.json', $data);
	header('location: contact.php');
?>