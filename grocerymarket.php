<?
	/*
		Grocerymarket.php (편의점)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
?>

<!-- 윗 상단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-md-2"><!--여백--></div>

    <!-- 가운데 편의점 시작 -->
	<div class="col-md-8">
     
<div class="panel panel-primary">
            	<div class="panel-heading">편의점</div>
            	<div class="panel-body">
            		<h3>안파는 것이 없는 100년 전통의 편의점입니다.</h3><br />
                    매장안을 들어가자 지구의 편의점과 매우 흡사한 모습으로 인테리어 되어있습니다.<br /><br />
                    들어온지 얼마 안된 따끈따끈한 잡화와 그것을 정리하는 아르바이트생이 분주해보입니다.<br />
            	</div>
            </div>
  <div class="bs-example bs-example-tabs">
    <ul id="myTab" class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#recovery" role="tab" data-toggle="tab">회복제</a></li>
      <li><a href="#buff" role="tab" data-toggle="tab">버프코너</a></li>
      <li><a href="#grocery" role="tab" data-toggle="tab">잡화코너</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade in active" id="recovery">
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">설명</td>
                    <td class="info">사용레벨</td>
					<td class="info">인기도</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	$charinfo = mysql_query("SELECT `level` FROM `project_members` WHERE `id` = '$email'");
	@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	$charinfo_level = '1'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	$choosing = mysql_query("SELECT * FROM `grocery_item` WHERE `level` = '$charinfo_level' and `type` = 'recovery'"); 
	
	while ($showme = mysql_fetch_array($choosing))
	{
		$popular_sum = mysql_query("select sum(popular) from `grocery_item` WHERE `type` = 'recovery'");
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
				<td>$showme[explain]</td>
				<td>$showme[level]</td>
				<td>$showme[popular]</td>
				<td>$rate</td>
				<td>$showme[price] 루비</td>
				<td>
                    <form role='form' method='post' action='grocerymarket_confirm.php'>
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
      
      
      <div class="tab-pane fade" id="buff">
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">설명</td>
                    <td class="info">사용레벨</td>
					<td class="info">인기도</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	$charinfo = mysql_query("SELECT `level` FROM `project_members` WHERE `id` = '$email'");
	@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	$charinfo_level = '1'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	$choosing = mysql_query("SELECT * FROM `grocery_item` WHERE `level` = '$charinfo_level' and `type` = 'buff'"); 
	
	while ($showme = mysql_fetch_array($choosing))
	{
		$popular_sum = mysql_query("select sum(popular) from `grocery_item` WHERE `type` = 'recovery'");
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
				<td>$showme[explain]</td>
				<td>$showme[level]</td>
				<td>$showme[popular]</td>
				<td>$rate</td>
				<td>$showme[price] 루비</td>
				<td>
                    <form role='form' method='post' action='grocerymarket_confirm.php'>
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
      
      <div class="tab-pane fade" id="grocery">
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">설명</td>
                    <td class="info">사용레벨</td>
					<td class="info">인기도</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	$charinfo = mysql_query("SELECT `level` FROM `project_members` WHERE `id` = '$email'");
	@$charinfo_level = mysql_result($charinfo, 0, 0); //@는 임시.
	$charinfo_level = '1'; //아직 지정되지 않았으므로 임시.... 나중에 지워야함!!!!
	$choosing = mysql_query("SELECT * FROM `grocery_item` WHERE `level` = '$charinfo_level' and `type` = 'grocery'"); 
	
	while ($showme = mysql_fetch_array($choosing))
	{
		$popular_sum = mysql_query("select sum(popular) from `grocery_item` WHERE `type` = 'grocery'");
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
				<td>$showme[explain]</td>
				<td>$showme[level]</td>
				<td>$showme[popular]</td>
				<td>$rate</td>
				<td>$showme[price] 루비</td>
				<td>
                    <form role='form' method='post' action='grocerymarket_confirm.php'>
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