<?php

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];

if( !isset($email) || !isset($password) || !isset($name) )
{
	exit;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "INSERT INTO project_members ( email_address, password, name ) VALUES ( '$email', MD5('$password'), '$name' );";
	$mysqli->query($sql);
}

$mysqli->close();

?>