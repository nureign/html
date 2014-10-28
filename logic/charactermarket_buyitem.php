<?php

session_start();

$id = $_SESSION['id'];
$item = $_POST['item'];

if( !isset($id) || !isset($item) )
	return;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	for( $i=0; $i<count($_SESSION['inventory']); $i++ )
	{
		if( $_SESSION['inventory'][$i]['table_name'] == 'character_item' && $_SESSION['inventory'][$i]['no'] == $item )
		{
			echo 'already have item';
			return;
		}
	}

	$sql = "SELECT * FROM character_item WHERE no = '$item';";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$no		= $row['no'];
		$name	= $row['name'];
		$price	= $row['price'];
	}

	if( $_SESSION['myinfo']['ruby'] < $price )
	{
		echo 'not enough ruby';
		return;
	}

	// 루비 감산 처리
	$sql = "UPDATE project_members SET ruby = ruby - '$price' WHERE id = '$id';";
	$mysqli->query($sql);

	// 인벤토리 넣기
	$sql = "INSERT INTO inventory ( id, table_name, no, num ) VALUES ( '$id', 'character_item', '$no', 1 );";
	$mysqli->query($sql);

	// 판매수 증가
	$sql = "UPDATE popular SET popular = popular + 1 WHERE table_name = 'character_item' AND no = '$no';";
	$mysqli->query($sql);
	
	echo $name;
}

?>