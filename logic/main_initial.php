<?php

session_start();

$id = $_SESSION['id'];

if( !isset($id) )
	exit;

/*
**	모험하기 전투로그에서 얻은 경험치 합산 및 레벨업 처리 루틴
*/

$sql = "SELECT * FROM battlelog_queue WHERE id = '$id' LIMIT 1;";
$result = $mysqli->query($sql);

while( $row = $result->fetch_array() )
{
	$log_exp	= $row['exp'];
	$log_ruby	= $row['ruby'];
	$log_hp		= $row['hp'];

	$sql = "UPDATE project_members SET exp = exp + '$log_exp', ruby = ruby + '$log_ruby', hp = '$log_hp' WHERE id = '$id';";
	$mysqli->query($sql);

	$sql = "DELETE FROM battlelog_queue WHERE id = '$id';";
	$mysqli->query($sql);
}

/*
**	내정보 세션으로 가져오기
*/

unset($_SESSION['myinfo']);

$sql = "SELECT * FROM project_members WHERE id = '$id';";
$result = $mysqli->query($sql);

if( $row = $result->fetch_assoc() )
{
	$_SESSION['myinfo'] = $row;
}

$sql = "SELECT * FROM config;";
$result = $mysqli->query($sql);

while( $row = $result->fetch_array() )
{
	if( $row['name'] == 'exp' )
	{
		$exp_model = json_decode($row['config'], true);
	}
	else if( $row['name'] == 'maxhp' )
	{
		$hp_model = json_decode($row['config'], true);
	}
}

if( $exp_model[$_SESSION['myinfo']['level']] <= $_SESSION['myinfo']['exp'] )
{
	$_SESSION['myinfo']['level']++;
	$_SESSION['myinfo']['maxhp'] = $hp_model[$_SESSION['myinfo']['level']];
	$sql = "UPDATE project_members SET level = '" . $_SESSION['myinfo']['level'] . "', hp = '" . $_SESSION['myinfo']['maxhp'] . "', maxhp = '" . $_SESSION['myinfo']['maxhp'] . "' WHERE id = '$id';";
	$mysqli->query($sql);
}

$hp_per = floor($_SESSION['myinfo']['hp'] / $_SESSION['myinfo']['maxhp'] * 100);
$mental_per = floor($_SESSION['myinfo']['mental'] / $_SESSION['myinfo']['mental'] * 100);
$exp_per = floor($_SESSION['myinfo']['exp'] / $exp_model[$_SESSION['myinfo']['level']] * 100);

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
		$_SESSION['inventory'][$i][] = $row;
	}
}

$_SESSION['myinfo']['low_power'] = 1;
$_SESSION['myinfo']['max_power'] = 1;
$_SESSION['myinfo']['defense'] = 0;

for( $i=0; $i<count($_SESSION['inventory']); $i++ )
{
	if( $_SESSION['inventory'][$i]['table_name'] != 'character_item' || $_SESSION['inventory'][$i]['equip'] != 1 )
		continue;
	
	$_SESSION['myinfo']['low_power'] += $_SESSION['inventory'][$i][0]['low_power'];
	$_SESSION['myinfo']['max_power'] += $_SESSION['inventory'][$i][0]['max_power'];
	$_SESSION['myinfo']['defense'] += $_SESSION['inventory'][$i][0]['defense'];
	
	// 장비처리
	if( $_SESSION['inventory'][$i]['slot'] )
	{
		$sql = "SELECT name FROM character_item WHERE no = " . $_SESSION['inventory'][$i][0]['no'];
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

?>