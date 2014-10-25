<?php

$id = $_POST['id'];
$amount = $_POST['amount'];

if( !isset($id) )
	exit;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);
	
	$sql = "SELECT * FROM project_members WHERE id = '$id';";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_array() )
	{
		$bank = $row['bank'];
	}

	if( $bank < $amount )
	{
		echo 'not enough ruby';
		return;
	}
	
	$tax = floor($amount * 0.3);
	
	$sql = "UPDATE project_members SET bank = bank - '$amount', ruby = ruby + '$amount' WHERE id = '$id';";
	$mysqli->query($sql);

	$sql = "INSERT INTO banking ( id, type, amount ) VALUES ( '$id', '입금', '$amount' );";
	$mysqli->query($sql);

	echo 'success';
}

$mysqli->close();

?>