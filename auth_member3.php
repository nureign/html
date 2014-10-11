<?php

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$stat1 = $_POST['stat1'];
$stat2 = $_POST['stat2'];
$stat3 = $_POST['stat3'];
$stat4 = $_POST['stat4'];
$stat5 = $_POST['stat5'];
$stat6 = $_POST['stat6'];
$tendency = $_POST['tendency'];

if( !isset($email) || !isset($password) || !isset($name) || !isset($tendency) )
{
	exit;
}
//망할
$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "INSERT INTO project_members ( email_address, password, name, stat1, stat2, stat3, stat4, stat5, stat6, tendency ) VALUES ( '$email', MD5('$password'), '$name', '$stat1', '$stat2', '$stat3', '$stat4', '$stat5', '$stat6', '$tendency' );";
	$mysqli->query($sql);

	$sql = "SELECT * FROM project_members WHERE email_address = '$email';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$id = $row['id'];
		$joindate = $row['reg_date'];
	}

	echo json_encode(array('id'=>$id, 'joindate'=>$joindate));
}

$mysqli->close();

?>