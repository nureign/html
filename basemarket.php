<?
	/*
		Basemarket.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
	include_once "./logic/basemarket_initial.php";
?>
<!-- 윗 상단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 가운데 베이스시장 (무기/방어시스템 상점) 시작 -->
	<div class="col-xs-10">
     
<div class="panel panel-primary">
            	<div class="panel-heading">베이스시장</div>
            	<div class="panel-body">
            		<h3>어서오세요! 이곳은 베이스시장입니다.</h3><br />
                    저렴한 가격으로 손님여러분의 쇼핑을 즐겁게 해드리겠습니다!<br /><br />
                    오늘의 할인율은 5% 입니다. <?=$myinfo[0]['name']?>님께는 더 싸게 드릴수도 있겠군요!<br />
            	</div>
            </div>
        <p>
            <table class="table table-condensed">
				<tr align="center">
					<td class="info">이름</td>
					<td class="info">속성</td>
					<td class="info">공격력</td>
					<td class="info">내구도</td>
					<td class="info">구매수</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	for( $i=0; $i<count($base_item); $i++ )
	{
		echo '<tr align="center">
				<td>'.$base_item[$i]['name'].'</td>
				<td>'.$base_item[$i]['type'].'</td>
				<td>'.$base_item[$i]['low_power'].' ~ '.$base_item[$i]['max_power'].'</td>
				<td>'.$base_item[$i]['durability'].'</td>
				<td>'.$base_item[$i]['popular'].'</td>
				<td>'.$base_item[$i]['price'].' 루비</td>
				<td><button type="button" class="btn btn-default buy" value="'.$base_item[$i]['no'].'">구매</button></td>
              </tr>';
	}	
?>  
      </table>
        </p>
  </div>
    <!-- 가운데 베이스시장 (무기/방어시스템 상점) 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->



	<?
		include_once "./common/footer.php";
	?>
	<script src="js/basemarket.js"></script>

  </body>
</html>