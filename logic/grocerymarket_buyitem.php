<?php

$id = $_POST['id'];
$item = $_POST['item'];

if( !isset($id) || !isset($item) )
{
	return;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT * FROM project_members WHERE id = '$id';";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$ruby = $row['ruby'];
	}

	$sql = "SELECT * FROM grocery_item WHERE no = '$item';";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$no = $row['no'];
		$name = $row['name'];
		$price = $row['price'];
	}

	if( !isset($ruby) || !isset($price) )
	{
		return;
	}

	if( $ruby < $price )
	{
		echo 'not enough ruby';
		return;
	}

	// 루비 감산 처리
	$sql = "UPDATE project_members SET ruby = ruby - '$price' WHERE id = '$id';";
	$mysqli->query($sql);

	// 인벤토리 넣기
	$sql = "INSERT INTO inventory ( id, table_name, no, num ) VALUES ( '$id', 'grocery_item', '$no', 1 ) ON DUPLICATE KEY UPDATE num = num + 1;";
	$mysqli->query($sql);
	
	echo $name;
}

?>