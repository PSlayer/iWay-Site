<?php 

	if (isset($_GET['id_d'])) {
		$ID = $_GET['id_d'];
	} else {
		$ID = "";
	}
		
	$sql_query = "DELETE FROM tbl_services WHERE id = ?";
			
	$stmt = $connect->stmt_init();
	if ($stmt->prepare($sql_query)) {	
		// Bind your variables to replace the ?s
		$stmt->bind_param('s', $ID);
		// Execute query
		$stmt->execute();
		// store result 
		$delete_result = $stmt->store_result();
		$stmt->close();
	}
				
	// if delete data success back to reservation page
	if($delete_result) {
		header("location: manage-services.php");
	}

?>