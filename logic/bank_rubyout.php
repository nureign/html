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

	if( rand(0, 9) < 3 )
	{
		$tax = round($amount * 0.5);
		$type = '전산오류';
	}
	else
	{
		$tax = round($amount * 0.3);
		$type = '출금';
	}

	$sql = "UPDATE project_members SET bank = bank - '$amount', ruby = ruby + '$amount' - '$tax' WHERE id = '$id';";
	$mysqli->query($sql);

	$sql = "INSERT INTO banking ( id, type, amount, tax ) VALUES ( '$id', '$type', '$amount', '$tax' );";
	$mysqli->query($sql);
	
	echo $amount;// . ' (세금: ' . $tax . ', 결과: ' . $amount - $tax . ')';
}

$mysqli->close();

?>