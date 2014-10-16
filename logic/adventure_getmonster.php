<?php
include_once "./alicetaylor.php";

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

	for($i=0; ; $i++)
	{
		$isdead = false;

		if( $i == 0 )
		{
			$att = array(
				'name' => $m_name,
				'level' => $m_level,
				'maxhp' => $m_hp,
				'curhp' => $m_hp,
				'stat1' => $m_stat[0], 
				'stat2' => $m_stat[1], 
				'stat3' => $m_stat[2], 
				'stat4' => $m_stat[3], 
				'stat5' => $m_stat[4], 
				'stat6' => $m_stat[5]
			);

			$def = array(
				'name' => $p_name,
				'level' => $p_level,
				'maxhp' => $p_hp,
				'curhp' => $p_hp,
				'stat1' => $p_stat1, 
				'stat2' => $p_stat2, 
				'stat3' => $p_stat3, 
				'stat4' => $p_stat4, 
				'stat5' => $p_stat5, 
				'stat6' => $p_stat6
			);
		}
		
		$att_name = $att['name'];
		$def_name = $def['name'];
		$def_maxhp = $def['maxhp'];
		$def_curhp = $def['curhp'];
		$dmg = 0;
		$crit = false;
		$snd;
		$msg = '1' . josa($att_name, '이', '가') . ' ' . josa($def_name, '을', '를') . ' 공격했습니다!';
		
		// 30 + (나의 민첩 - 상대방의 예지력) * 5 + (나의 레벨 - 적의 레벨) * 10
		if( rand(0, 99) < 20 + ($def['stat2'] - $att['stat4']) * 5 + ($def['level'] - $att['level']) * 10 )
		{
			// 회피
			$dmg = $att['stat1'] * rand(0, 2);
			$crit = false;
			$snd = './sounds/claw_miss1.wav';
			$msg = $msg . '/4공격 실패! ' . josa($def_name, '이', '가') . ' ' . $att_name . '의 공격을 회피했습니다!';

			if( $dmg )
			{
				$msg = $msg . '/1하지만 ' . josa($def_name, '은', '는') . ' ' . $dmg . '의 피해를 입었습니다. (스쳐 맞음!)';
			}

			$msg_type = "normal";
		}
		else
		{
			// 맞음
			$dmg = $att['stat1'] * rand(4, 6);
			$crit = false;

			if( rand(0, 99) < $att['stat2'] * 2 + $att['stat5'] )
			{
				// 크리티컬
				$dmg *= 2;
				$crit = true;
			}
			
			$snd = "./sounds/claw_strike1.wav";
			$msg = $msg . '/' . ($crit ? '3' : '1') . '공격 성공! ' . josa($def_name, '은', '는') . ' ' . $dmg . '의 피해를 입었습니다!' . ($crit ? ' (강타!)' : '');
			
			$def_curhp -= $dmg;
			$def['curhp'] = $def_curhp;

			if( $def_curhp < 1 )
			{
				$def_curhp = 0;
				$def['curhp'] = $def_curhp;

				// 죽음 처리
				$isdead = true;
				$msg = $msg . '/2' . josa($att_name, '이', '가') . ' ' . josa($def_name, '과', '와') . '의 대결에서 승리했습니다!';
			}
		}

		$sql = "INSERT INTO battlelog ( bid, seq, att_name, def_name, def_maxhp, def_curhp, dmg, crit, snd, msg ) VALUES ( $bid, $i, '$att_name', '$def_name', $def_maxhp, $def_curhp, $dmg, '$crit', '$snd', '$msg' );";
		$mysqli->query($sql);
		
		if( $isdead )
			break;

		// 공수 교대
		$temp = $att;
		$att = $def;
		$def = $temp;
	}
}

$mysqli->close();

?>