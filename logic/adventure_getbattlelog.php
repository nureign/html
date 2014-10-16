<?php

$bid = $_POST['bid'];
$seq = $_POST['seq'];

if( !isset($bid) || !isset($seq) )
{
	exit;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT * FROM battlelog WHERE bid = '$bid' AND seq = '$seq';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$sound = $row['sound'];
		$message = $row['message'];
		$message_type = $row['message_type'];
	}

	echo json_encode(array(
		'sound' => $sound,
		'message' => $message,
		'message_type' => $message_type
	));
}

$mysqli->close();

?>