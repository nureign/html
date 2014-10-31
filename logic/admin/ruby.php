<?php
$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	// 자원 정보 탐색
	$sql = "UPDATE project_members SET ruby = 100000 WHERE email_address = 'ssalguk@gmail.com';";
	$mysqli->query($sql);
	
}

$mysqli->close();
?>