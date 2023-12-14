<?php
include 'sql_server_connection.php';

// database connection code
if(isset($_POST['txtName']))
{

	$con = openCon();

	// get the post records

	$txtName = $_POST['txtName'];
	$txtEmail = $_POST['txtEmail'];
	$txtPhone = $_POST['txtPhone'];

	// database insert SQL code
	$sql = "INSERT INTO registration (id, name, email, phoneNumber) VALUES (?, ?, ?, ?)";
	$params = array(1, "moin", "moin@mahmud.com", "123456");

	$stmt = sqlsrv_query( $con, $sql, $params);
	if( $stmt === false ) {
		die( print_r( sqlsrv_errors(), true));
	} else {
		echo "Contact Records Inserted";
	}	
}
?>
