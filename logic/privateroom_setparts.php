<?php

$id = $_POST['id'];			//아이디
$parts = $_POST['parts'];	//파츠이름
$name = $_POST['name'];		//아이템 이름

if( !isset($id) )
	exit;

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	// 아이템 해제 처리
	$sql = "UPDATE inventory SET equip = 0, slot = '' WHERE id = '$id' AND table_name = 'character_item' AND slot = '$parts';";
	$mysqli->query($sql);

	// 아이템 장착 처리
	$sql = "SELECT no FROM character_item WHERE name = '$name';";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$no = $row['no'];
	}

	$sql = "UPDATE inventory SET equip = 1, slot = '$parts' WHERE id = '$id' AND table_name = 'character_item' AND no = '$no';";
	$mysqli->query($sql);
	
	echo 'success';
}

?>