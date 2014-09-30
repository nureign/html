<?php

$email = $_POST['email'];
$password = MD5($_POST['password']);
$user_name = $_POST['user_name'];

if( !isset($email) || !isset($password) || !isset($user_name) )
{
	exit;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "root", "rootpwd", "project") )
{
	$sql = "INSERT INTO project_member ( email_address, password, user_name ) VALUES ( '$email', '$password', '$user_name' );";
	$mysqli->query($sql);
}

$mysqli->close();

?>