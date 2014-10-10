<?
	/*
		Charactermarket.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
?>

<!-- 윗 상단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-md-2"><!--여백--></div>

    <!-- 가운데 케릭터마켓 시작 -->
	<div class="col-md-8">
     
<div class="panel panel-primary">
            	<div class="panel-heading">전통시장</div>
            	<div class="panel-body">
            		<h3>이국적인 분위기가 풍기는 전통시장입니다.</h3><br />
                    입구 앞에는 300년 역사를 자랑하는 전통시장! 이라는 문구의 표지판이 보입니다.<br /><br />
                    사람들이 북적이는걸로 보아 그 인기를 실감할 수 있습니다.<br />
            	</div>
            </div>
  <div class="bs-example bs-example-tabs">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#weapons" role="tab" data-toggle="tab">무기상점</a></li>
      <li><a href="#top" role="tab" data-toggle="tab">상의상점</a></li>
      <li><a href="#pants" role="tab" data-toggle="tab">하의상점</a></li>
      <li><a href="#shoes" role="tab" data-toggle="tab">신발상점</a></li>
      <li><a href="#accessory" role="tab" data-toggle="tab">악세사리상점</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="weapons">
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">속성</td>
					<td class="info">공격력</td>
					<td class="info">인기도</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<? //아직 이부분은 손안봄 //
	$charinfo = mysql_query("SELECT `level` FROM `project_members` WHERE `id` = '$email'");
	@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	$charinfo_level = '10'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	$choosing = mysql_query("SELECT `characteritem_no`, `name`, `level`, `attribute`, `low_power`, `max_power`, `special`, `popular`, `price` FROM `character_item` WHERE `level` = '1' and `type` = 'weapons'"); 
	
	while ($showme = mysql_fetch_array($choosing))
	{
		//$showme[lastName] = addslashes($s_a[lastName]);
		$popular_sum = mysql_query("select sum(popular) from `character_item` WHERE `type` = 'weapons'");
		$popular_sum = mysql_result($popular_sum, 0, 0);
		
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
				<td>$rate</td>
				<td>$showme[price] 수정</td>
				<td>
                    <form role='form' method='post' action='basemarket_confirm.php'>
                        <input type='hidden' id='no' value='$showme[characteritem_no]'>
                        <button type='submit' class='btn btn-default'>구매</button>
                    </form>
                    </td>
                </tr>");
	}	
?>  
      </table>
        </p>
      </div>
      
      
      <div class="tab-pane fade" id="top">
        <p>
<p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">속성</td>
					<td class="info">방어력</td>
					<td class="info">스텟변화</td>
					<td class="info">특수기능</td>
                    <td class="info">인기도</td>
					<td class="info">금액</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	$charinfo = mysql_query("SELECT `level` FROM `project_members` WHERE `id` = '$email'");
	@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	$charinfo_level = '10'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	$choosing = mysql_query("SELECT * FROM `character_item` WHERE `level` = '1' and `type` = 'top'"); 
	
	while ($showme = mysql_fetch_array($choosing))
	{
		//$showme[lastName] = addslashes($s_a[lastName]);
		$popular_sum = mysql_query("select sum(popular) from `character_item` WHERE `type` = 'top'");
		$popular_sum = mysql_result($popular_sum, 0, 0);
		
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
				<td>$showme[min_defense]</td>
				<td>$showme[stat1] / $showme[stat2] / $showme[stat3] / $showme[stat4] / $showme[stat5] / $showme[stat6]</td>
				<td>$special</td>
				<td>$rate</td>
				<td>$showme[price] 수정</td>
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
      
      
      <div class="tab-pane fade" id="pants">
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">속성</td>
					<td class="info">방어력</td>
					<td class="info">스텟변화</td>
					<td class="info">특수기능</td>
                    <td class="info">인기도</td>
					<td class="info">금액</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	$charinfo = mysql_query("SELECT `level` FROM `project_members` WHERE `id` = '$email'");
	@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	$charinfo_level = '10'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	$choosing = mysql_query("SELECT * FROM `character_item` WHERE `level` = '1' and `type` = 'pants'"); 
	
	while ($showme = mysql_fetch_array($choosing))
	{
		//$showme[lastName] = addslashes($s_a[lastName]);
		$popular_sum = mysql_query("select sum(popular) from `character_item` WHERE `type` = 'pants'");
		$popular_sum = mysql_result($popular_sum, 0, 0);
		
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
				<td>$showme[min_defense]</td>
				<td>$showme[stat1] / $showme[stat2] / $showme[stat3] / $showme[stat4] / $showme[stat5] / $showme[stat6]</td>
				<td>$special</td>
				<td>$rate</td>
				<td>$showme[price] 수정</td>
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
      
      
      <div class="tab-pane fade" id="shoes">
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">속성</td>
					<td class="info">방어력</td>
					<td class="info">스텟변화</td>
					<td class="info">특수기능</td>
                    <td class="info">인기도</td>
					<td class="info">금액</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	$charinfo = mysql_query("SELECT `level` FROM `project_members` WHERE `id` = '$email'");
	@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	$charinfo_level = '10'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	$choosing = mysql_query("SELECT * FROM `character_item` WHERE `level` = '1' and `type` = 'shoes'"); 
	
	while ($showme = mysql_fetch_array($choosing))
	{
		//$showme[lastName] = addslashes($s_a[lastName]);
		$popular_sum = mysql_query("select sum(popular) from `character_item` WHERE `type` = 'shoes'");
		$popular_sum = mysql_result($popular_sum, 0, 0);
		
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
				<td>$showme[min_defense]</td>
				<td>$showme[stat1] / $showme[stat2] / $showme[stat3] / $showme[stat4] / $showme[stat5] / $showme[stat6]</td>
				<td>$special</td>
				<td>$rate</td>
				<td>$showme[price] 수정</td>
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
      


      <div class="tab-pane fade" id="accessory">
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">속성</td>
					<td class="info">방어력</td>
					<td class="info">스텟변화</td>
					<td class="info">특수기능</td>
                    <td class="info">인기도</td>
					<td class="info">금액</td>
                    <td class="info">구매</td>
                </tr>
                
<? //아직 이부분은 손안봄 //
	$charinfo = mysql_query("SELECT `level` FROM `project_members` WHERE `id` = '$email'");
	@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	$charinfo_level = '10'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	$choosing = mysql_query("SELECT * FROM `character_item` WHERE `level` = '1' and `type` = 'accessory'"); 
	
	while ($showme = mysql_fetch_array($choosing))
	{
		//$showme[lastName] = addslashes($s_a[lastName]);
		$popular_sum = mysql_query("select sum(popular) from `character_item` WHERE `type` = 'accessory'");
		$popular_sum = mysql_result($popular_sum, 0, 0);
		
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
				<td>$showme[min_defense]</td>
				<td>$showme[stat1] / $showme[stat2] / $showme[stat3] / $showme[stat4] / $showme[stat5] / $showme[stat6]</td>
				<td>$special</td>
				<td>$rate</td>
				<td>$showme[price] 수정</td>
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
    <!-- 가운데 케릭터시장 닫기 -->

	<div class="col-md-2"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->



	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>