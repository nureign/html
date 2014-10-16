<?php

$id = $_POST['id'];

if( !isset($id) )
{
	exit;
}

$mysqli = mysqli_init();

if( $mysqli->real_connect("localhost", "project", "project!", "project") )
{
	$sql = "SET NAMES UTF8";
	$mysqli->query($sql);

	$sql = "SELECT * FROM project_members WHERE id = '$id';";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$p_name = $row['name'];
		$p_level = $row['level'];
		$p_hp = $row['hp'];
		$p_mental = $row['mental'];
		$p_stat1 = $row['stat1'];
		$p_stat2 = $row['stat2'];
		$p_stat3 = $row['stat3'];
		$p_stat4 = $row['stat4'];
		$p_stat5 = $row['stat5'];
		$p_stat6 = $row['stat6'];
	}

	$sql = "SELECT * FROM monster WHERE level >= $p_level-3 AND level <= $p_level+3 ORDER BY RAND() LIMIT 1;";
	$result = $mysqli->query($sql);

	while( $row = $result->fetch_array() )
	{
		$m_name = $row['name'];
		$m_image = $row['image'];
		$m_sound_start = $row['sound_start'];
		$m_level = $row['level'];
		$m_planet = $row['planet'];
		$m_location = $row['location'];
		$m_hp = $row['hp'];
		$m_type = $row['type'];
		$m_resource = $row['resource'];
	}

	$sql = "SELECT bid FROM battlelog ORDER BY bid DESC LIMIT 1;";
	$result = $mysqli->query($sql);
	$bid = 1;

	while( $row = $result->fetch_array() )
	{
		$bid = $row['bid']+1;
	}

	echo json_encode(array(
		'bid' => $bid,

		'p_name' => $p_name,
		'p_level' => $p_level,
		'p_hp' => $p_hp,
		'p_mental' => $p_mental,
		'p_stat1' => $p_stat1,
		'p_stat2' => $p_stat2,
		'p_stat3' => $p_stat3,
		'p_stat4' => $p_stat4,
		'p_stat5' => $p_stat5,
		'p_stat6' => $p_stat6,

		'm_name' => $m_name,
		'm_image' => $m_image,
		'm_sound_start' => $m_sound_start,
		'm_level' => $m_level,
		'm_planet' => $m_planet,
		'm_location' => $m_location,
		'm_hp' => $m_hp,
		'm_type' => $m_type,
		'm_resource' => $m_resource
	));

	// 몬스터 스탯 배분
	$m_stat = array( 1, 0, 0, 0, 0, 0 );
	for($i=0; $i<$m_level*3; $i++)
	{
		$rand = rand( 0, 5 );
		$m_stat[$rand]++;
	}

	for($i=0; $i<20; $i++)
	{
		$attacker;
		$defender;
		$temp;
		
		if( $i == 0 )
		{
			// 첫턴
			$first_turn = ( (50 + $p_stat5) + ( ($p_level - $m_level) * 10) );
			if( rand(0, 99) < $first_turn )
			{
				// 플레이어턴
				$attacker = array(
					'isplayer' => true,
					'name' => $p_name,
					'level' => $p_level,
					'hp' => $p_hp,
					'stat1' => $p_stat1, 
					'stat2' => $p_stat2, 
					'stat3' => $p_stat3, 
					'stat4' => $p_stat4, 
					'stat5' => $p_stat5, 
					'stat6' => $p_stat6
				);

				$defender = array(
					'isplayer' => false,
					'name' => $m_name,
					'level' => $m_level,
					'hp' => $m_hp,
					'stat1' => $m_stat[0], 
					'stat2' => $m_stat[1], 
					'stat3' => $m_stat[2], 
					'stat4' => $m_stat[3], 
					'stat5' => $m_stat[4], 
					'stat6' => $m_stat[5]
				);
			}
			else
			{
				// 몬스터턴
				$attacker = array(
					'isplayer' => false,
					'name' => $m_name,
					'level' => $m_level,
					'hp' => $m_hp,
					'stat1' => $m_stat[0], 
					'stat2' => $m_stat[1], 
					'stat3' => $m_stat[2], 
					'stat4' => $m_stat[3], 
					'stat5' => $m_stat[4], 
					'stat6' => $m_stat[5]
				);

				$defender = array(
					'isplayer' => true,
					'name' => $p_name,
					'level' => $p_level,
					'hp' => $p_hp,
					'stat1' => $p_stat1, 
					'stat2' => $p_stat2, 
					'stat3' => $p_stat3, 
					'stat4' => $p_stat4, 
					'stat5' => $p_stat5, 
					'stat6' => $p_stat6
				);
			}
		}
		
		$damage = 0;
		$crits = false;

		// 30 + (나의 민첩 - 상대방의 예지력) * 5 + (나의 레벨 - 적의 레벨) * 10
		if( rand(0, 99) < 20 + ($defender['stat2'] - $attacker['stat4']) * 5 + ($defender['level'] - $attacker['level']) * 10 )
		{
			// 회피
			$avoid = array( '', '', '예지력을 발휘하여 ', '순간의 집중력으로 ', '운 좋게 ', '한숨을 쉬며 ' );
			$message = $defender['name'] . "이(가) " . $avoid[rand(0,5)] . $attacker['name'] . "의 공격을 피했다!";
			$message_type = "normal";
			$sound = "./sounds/claw_miss1.wav";
			$sql = "INSERT INTO battlelog ( bid, seq, damage, crits, sound, message, message_type ) VALUES ( $bid, $i, $damage, '$crits', '$sound', '$message', '$message_type' );";
			$mysqli->query($sql);
		}
		else
		{
			// 맞음
			$damage = $attacker['stat1'] * rand(4, 6);
			$crits = false;

			if( rand(0, 99) < $attacker['stat2'] * 2 + $attacker['stat5'] )
			{
				// 크리티컬
				$damage *= 2;
				$crits = true;
			}
			
			$message = $attacker['name'] . "이(가) " . $defender['name'] . "을(를) 공격했다!" . ($crits ? " (크리티컬!)" : "") . "<br/>" . $defender['name'] . "은(는) " . $damage . "의 피해를 입었다!";
			$message_type = ($crits ? "warning" : "normal");
			$sound = "./sounds/claw_strike1.wav";
			$sql = "INSERT INTO battlelog ( bid, seq, damage, crits, sound, message, message_type ) VALUES ( $bid, $i, $damage, '$crits', '$sound', '$message', '$message_type' );";
			$mysqli->query($sql);
		}
		
		// 공수 교대
		$temp = $attacker;
		$attacker = $defender;
		$defender = $temp;
	}
}

$mysqli->close();

?>