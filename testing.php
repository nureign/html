<?php

//╦агр
$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SELECT * FROM project_members WHERE email_address = 'nureign@naver.com';";
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