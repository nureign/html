<?php

	// 몬스터 스탯 배분
	$m_stat = array( 0, 0, 0, 0, 0, 0 );
	for($i=0; $i<$m_level*6; $i++)
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
					'hp' => $p_hp,
					'stat1' => $p_stat1, 
					'stat2' => $p_stat2, 
					'stat3' => $p_stat3, 
					'stat4' => $p_stat4, 
					'stat5' => $p_stat5, 
					'stat6' => $p_stat6
				);

				$defender = array(
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
					'hp' => $m_hp,
					'stat1' => $m_stat[0], 
					'stat2' => $m_stat[1], 
					'stat3' => $m_stat[2], 
					'stat4' => $m_stat[3], 
					'stat5' => $m_stat[4], 
					'stat6' => $m_stat[5]
				);

				$defender = array(
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

		if( rand(0, 99) < $defender['stat4'] * 2 + $defender['stat6'] )
		{
			// 회피
			
		}
		else
		{
			// 맞음
			$damage = $attacker['stat1'] * rand(4, 6);

			if( rand(0, 99) < $attacker['stat2'] * 2 + $attacker['stat5'] )
			{
				// 크리티컬
				$damage *= 2;	
			}

			
		}
		
		// 공수 교대
		$temp = $attacker;
		$attacker = $defender;
		$defender = $temp;
	}

?>