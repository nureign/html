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
		$attacker = $row['attacker'];
		$defender = $row['defender'];
		$damage = $row['damage'];
		$crits = $row['crits'];
		$sound = $row['sound'];
		$message = $row['message'];
		$message_type = $row['message_type'];
	}

	echo json_encode(array(
		'attacker' => $attacker,
		'defender' => $defender,
		'damage' => $damage,
		'crits' => $crits,
		'sound' => $sound,
		'message' => $message,
		'message_type' => $message_type
	));
}

$mysqli->close();

?>