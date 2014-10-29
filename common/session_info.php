<?php

//session_start();

$id = $_SESSION['id'];

if( !isset($id) )
	return;

function session_refresh()
{
	/*
	**	������ �������� ��������
	*/
	
	$mysqli = mysqli_init();

	if( $mysqli->real_connect('localhost', 'project', 'project!', 'project') )
	{
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
		**	�κ��丮 ���� �������� ��������
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
			
			// ���ó��
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

		echo var_dump($_SESSION['inventory']);
		echo $_SESSION['inventory'][1]['info']['name'];
	}
}
?>