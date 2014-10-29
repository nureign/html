<?php

session_start();

function session_refresh()
{
	// 세션 아이디 저장
	$id = $_SESSION['id'];
	
	if( !isset($id) )
		return;

	// 세션 정보 삭제
	unset($_SESSION['myinfo']);
	unset($_SESSION['inventory']);

	// DB 접속
	$mysqli = mysqli_init();

	if( !( $mysqli->real_connect('localhost', 'project', 'project!', 'project') ) )
		return;

	/*
	**	내정보 세션으로 가져오기
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
			$_SESSION['exp_model'] = json_decode($row['config'], true);
		}
		else if( $row['name'] == 'maxhp' )
		{
			$_SESSION['hp_model'] = json_decode($row['config'], true);
		}
	}

	if( $_SESSION['exp_model'][$_SESSION['myinfo']['level']] <= $_SESSION['myinfo']['exp'] )
	{
		$_SESSION['myinfo']['level']++;
		$_SESSION['myinfo']['maxhp'] = $_SESSION['hp_model'][$_SESSION['myinfo']['level']];
		$sql = "UPDATE project_members SET level = '" . $_SESSION['myinfo']['level'] . "', hp = '" . $_SESSION['myinfo']['maxhp'] . "', maxhp = '" . $_SESSION['myinfo']['maxhp'] . "' WHERE id = '$id';";
		$mysqli->query($sql);
	}

	/*
	**	인벤토리 정보 세션으로 가져오기
	*/

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
	//장착아이템
	$_SESSION['myinfo']['lefthand'] = '없음';
	$_SESSION['myinfo']['righthand'] = '없음';
	$_SESSION['myinfo']['top'] = '없음';
	$_SESSION['myinfo']['pants'] = '없음';
	$_SESSION['myinfo']['shoes'] = '없음';
	$_SESSION['myinfo']['accessory'] = '없음';
	//기지방호시스템
	$_SESSION['myinfo']['defense1'] = '무방비';
	$_SESSION['myinfo']['defense2'] = '무방비';
	$_SESSION['myinfo']['defense3'] = '무방비';
	$_SESSION['myinfo']['defense4'] = '무방비';
	for( $i=0; $i<count($_SESSION['inventory']); $i++ )
	{
		if( $_SESSION['inventory'][$i]['table_name'] == 'character_item' && $_SESSION['inventory'][$i]['equip'] == 1 )
		{
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
		else if( $_SESSION['inventory'][$i]['table_name'] == 'base_item' && $_SESSION['inventory'][$i]['equip'] == 1 )
		{
			if( $_SESSION['inventory'][$i]['slot'] )
			{
				$sql = "SELECT name, type FROM base_item WHERE no = " . $_SESSION['inventory'][$i]['info']['no'];
				$result = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
				
				while( $row = $result->fetch_assoc() )
				{
					$_SESSION['myinfo'][$_SESSION['inventory'][$i]['slot']] = $row['name'] . ' (' . $row['type'] . ')';
				}
			}
		}
	}

	$_SESSION['myinfo']['low_power'] += $_SESSION['myinfo']['stat1'];
	$_SESSION['myinfo']['max_power'] += $_SESSION['myinfo']['stat1']*2;
	$_SESSION['myinfo']['defense'] += $_SESSION['myinfo']['stat2'];

	//echo var_dump($_SESSION['inventory']);
	//echo $_SESSION['inventory'][1]['info']['name'];

	return;
}

?>