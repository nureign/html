<?php
$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	// �ڿ� ���� Ž��
	$sql = "UPDATE project_members SET ruby = 100000 WHERE email_address = 'ssalguk@gmail.com';";
	$mysqli->query($sql);
	
}

$mysqli->close();
?>