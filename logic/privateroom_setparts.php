<?php

session_start();

$id = $_SESSION['id'];		//아이디
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
	
	/*
	**	인벤토리 정보 세션으로 가져오기
	*/

	unset($_SESSION['inventory']);

	$sql = "SELECT * FROM inventory WHERE id = '$id';";
	$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

	while( $row = $result->fetch_assoc() )
	{
		$_SESSION['inventory'][] = $row;
	}

	for( $i=0; $i<count($_SESSION['inventory']); $i++ )
	{
		$sql = "SELECT * FROM " . $_SESSION['inventory'][$i]['table_name'] . " WHERE no = " . $_SESSION['inventory'][$i]['no'];
		$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

		while( $row = $result->fetch_assoc() )
		{
			$_SESSION['inventory'][$i]['info'] = $row;
		}
	}

	$_SESSION['myinfo']['low_power'] = 1;
	$_SESSION['myinfo']['max_power'] = 1;
	$_SESSION['myinfo']['defense'] = 0;

	for( $i=0; $i<count($_SESSION['inventory']); $i++ )
	{
		if( $_SESSION['inventory'][$i]['table_name'] != 'character_item' || $_SESSION['inventory'][$i]['equip'] != 1 )
			continue;
		
		$_SESSION['myinfo']['low_power'] += $_SESSION['inventory'][$i]['info']['low_power'];
		$_SESSION['myinfo']['max_power'] += $_SESSION['inventory'][$i]['info']['max_power'];
		$_SESSION['myinfo']['defense'] += $_SESSION['inventory'][$i]['info']['defense'];
		
		// 장비처리
		if( $_SESSION['inventory'][$i]['slot'] )
		{
			$sql = "SELECT name FROM character_item WHERE no = " . $_SESSION['inventory'][$i]['info']['no'];
			$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");

			while( $row = $result->fetch_assoc() )
			{
				$_SESSION['myinfo'][$_SESSION['inventory'][$i]['slot']] = $row['name'];
			}
		}
	}

	$_SESSION['myinfo']['low_power'] += $_SESSION['myinfo']['stat1'];
	$_SESSION['myinfo']['max_power'] += $_SESSION['myinfo']['stat1']*2;
	$_SESSION['myinfo']['defense'] += $_SESSION['myinfo']['stat2'];

	$res = array( 'lefthand' => $_SESSION['myinfo']['lefthand'],
				  'righthand' => $_SESSION['myinfo']['righthand'],
				  'top' => $_SESSION['myinfo']['top'],
				  'pants' => $_SESSION['myinfo']['pants'],
				  'shoes' => $_SESSION['myinfo']['shoes'],
				  'accessory' => $_SESSION['myinfo']['accessory'] );
	echo json_encode($res);
}

?>