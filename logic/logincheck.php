<?php

$email = $_POST['email'];
$password = $_POST['password'];

if( strlen($email) < 6 || !isset($email) || !isset($password) )
{
	echo 'fail';
	exit;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SELECT * FROM project_members WHERE email_address = '$email' AND password = MD5('$password');";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$id = $row['id'];
		$email_address = $row['email_address'];
	}

	echo json_encode(array('id'=>$id, 'email'=>$email_address));
}

$mysqli->close();

?>