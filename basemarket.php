<?
	/*
		Basemarket.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
?>
<!-- 윗 상단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-md-2"><!--여백--></div>

    <!-- 가운데 베이스시장 (무기/방어시스템 상점) 시작 -->
	<div class="col-md-8">
     
<div class="panel panel-primary">
            	<div class="panel-heading">베이스시장</div>
            	<div class="panel-body">
            		<h3>어서오세요! 이곳은 베이스시장입니다.</h3><br />
                    저렴한 가격으로 손님여러분의 쇼핑을 즐겁게 해드리겠습니다!<br /><br />
                    오늘의 할인율은 <span id="salesrate"></span>% 입니다. <span id="name"></span>님께는 더 싸게(매력도) 드릴수도 있겠군요!<br />
            	</div>
            </div>
  <div class="bs-example bs-example-tabs">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#weapons_system" role="tab" data-toggle="tab">무기시스템</a></li>
      <li><a href="#defense_system" role="tab" data-toggle="tab">방어시스템</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="weapons_system">
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">속성</td>
					<td class="info">공격력</td>
					<td class="info">내구도</td>
					<td class="info">인기도</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	$id = $_POST['id'];
	if( !isset($id) )
		exit;

	$result = $mysqli->query("SELECT * FROM base_item WHERE type = 'weapons' AND level = (SELECT level FROM project_members WHERE id = $id);"); 

	while( $showme = $result->fetch_array() )
	{
		//$showme[lastName] = addslashes($s_a[lastName]);
		$popular_sum = $mysqli->query("SELECT sum(popular) as popular_sum FROM base_item WHERE type = 'weapons' AND level = (SELECT level FROM project_members WHERE id = $id);");
		$row = $popular_sum->fetch_array();
		$popular_sum = $row['popular_sum'];
		if( $popular_sum < 1 ) $popular_sum = 1;
		
		$tests = $showme[popular] * 9;

		$showme_popular = ($showme[popular] * 100) / $popular_sum;
		
		if ($showme_popular <= '20')
		{
			$rate = "★☆☆☆☆";
		}
		else if ($showme_popular > '20' and $showme_popular <= '40')
		{
			$rate = "★★☆☆☆";
		}
		else if ($showme_popular > '40' and $showme_popular <= '60')
		{
			$rate = "★★★☆☆";
		}
		else if ($showme_popular > '60' and $showme_popular <= '80')
		{
			$rate = "★★★★☆";
		}
		else
		{
			$rate = "★★★★★";
		}
		
		//여기서부터 반복 호출
		echo("<tr align='center'>
				<td>$showme[name]</td>
				<td>$showme[attribute]</td>
				<td>$showme[low_power]~$showme[max_power]</td>
				<td>$showme[durability]</td>
				<td>$rate</td>
				<td>$showme[price] 루비</td>
				<td>
                    <form role='form' method='post' action='basemarket_confirm.php'>
                        <input type='hidden' id='no' value='$showme[baseitem_no]'>
                        <button type='submit' class='btn btn-default'>구매</button>
                    </form>
                    </td>
                </tr>");
	}	
?>  
      </table>
        </p>
      </div>
      <div class="tab-pane fade" id="defense_system">
        <p>
<p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">속성</td>
					<td class="info">방어도</td>
					<td class="info">내구도</td>
					<td class="info">인기도</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	//$charinfo = mysql_query("SELECT `level` FROM `member` WHERE `id` = '$email'");
	//@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	//$charinfo_level = '10'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	//$choosing = mysql_query("SELECT `baseitem_no`, `name`, `level`, `attribute`, `min_defense`, `max_defense`, `durability`, `popular`, `price` FROM `base_item` WHERE `level` = '1' and `type` = 'defense'"); 
	
	$result = $mysqli->query("SELECT * FROM base_item WHERE type = 'defense' AND level = (SELECT level FROM project_members WHERE id = $id);"); 

	while ( $showme = $result->fetch_array() )
	{
		//$showme[lastName] = addslashes($s_a[lastName]);
		$popular_sum = $mysqli->query("SELECT sum(popular) as popular_sum FROM base_item WHERE type = 'defense' AND level = (SELECT level FROM project_members WHERE id = $id);");
		$row = $popular_sum->fetch_array();
		$popular_sum = $row['popular_sum'];
		if( $popular_sum < 1 ) $popular_sum = 1;
		
		$tests = $showme[popular] * 9;

		$showme_popular = ($showme[popular] * 100) / $popular_sum;
		
		if ($showme_popular <= '20')
		{
			$rate = "★☆☆☆☆";
		}
		else if ($showme_popular > '20' and $showme_popular <= '40')
		{
			$rate = "★★☆☆☆";
		}
		else if ($showme_popular > '40' and $showme_popular <= '60')
		{
			$rate = "★★★☆☆";
		}
		else if ($showme_popular > '60' and $showme_popular <= '80')
		{
			$rate = "★★★★☆";
		}
		else
		{
			$rate = "★★★★★";
		}
		
		//여기서부터 반복 호출
		echo("<tr align='center'>
				<td>$showme[name]</td>
				<td>$showme[attribute]</td>
				<td>$showme[min_defense]~$showme[max_defense]</td>
				<td>$showme[durability]</td>
				<td>$rate</td>
				<td>$showme[price] 루비</td>
				<td>
                    <form role='form' method='post' action='basemarket_confirm.php'>
                        <input type='hidden' id='no' value='$showme[baseitem_no]'>
                        <button type='submit' class='btn btn-default'>구매</button>
                    </form>
                    </td>
                </tr>");
	}	
?>  
      </table>
        </p>
      </div>
    </div>
  </div>
    
    
    
    
    
    
    
    </div>
    <!-- 가운데 베이스시장 (무기/방어시스템 상점) 닫기 -->

	<div class="col-md-2"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->



	<?
		include_once "./common/footer.php";
	?>
	<script src="js/basemarket.js"></script>

  </body>
</html>