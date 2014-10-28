<?
	/*
		Grocerymarket.php (편의점)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
	include_once "./logic/grocerymarket_initial.php";
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
				<td class="info">구매수</td>
				<td class="info">가격</td>
				<td class="info">구매</td>
			</tr>
<?
			for( $i=0; $i<count($grocery_item); $i++ )
			{
				if( $grocery_item[$i]['type'] != 'recovery' )
					continue;

				echo '<tr align="center">
						<td>'.$grocery_item[$i]['name'].'</td>
						<td>'.$grocery_item[$i]['explain'].'</td>
						<td>'.$grocery_item[$i]['level'].'</td>
						<td>'.$grocery_item[$i]['popular'].'</td>
						<td>'.$grocery_item[$i]['price'].' 루비</td>
						<td><button type="button" class="btn btn-default buy" value="'.$grocery_item[$i]['no'].'">구매</button></td>
					  </tr>';
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
					<td class="info">구매수</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
<?
			for( $i=0; $i<count($grocery_item); $i++ )
			{
				if( $grocery_item[$i]['type'] != 'buff' )
					continue;

				echo '<tr align="center">
						<td>'.$grocery_item[$i]['name'].'</td>
						<td>'.$grocery_item[$i]['explain'].'</td>
						<td>'.$grocery_item[$i]['level'].'</td>
						<td>'.$grocery_item[$i]['popular'].'</td>
						<td>'.$grocery_item[$i]['price'].' 루비</td>
						<td><button type="button" class="btn btn-default buy" value="'.$grocery_item[$i]['no'].'">구매</button></td>
					  </tr>';
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
					<td class="info">구매수</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
			for( $i=0; $i<count($grocery_item); $i++ )
			{
				if( $grocery_item[$i]['type'] != 'grocery' )
					continue;

				echo '<tr align="center">
						<td>'.$grocery_item[$i]['name'].'</td>
						<td>'.$grocery_item[$i]['explain'].'</td>
						<td>'.$grocery_item[$i]['level'].'</td>
						<td>'.$grocery_item[$i]['popular'].'</td>
						<td>'.$grocery_item[$i]['price'].' 루비</td>
						<td><button type="button" class="btn btn-default buy" value="'.$grocery_item[$i]['no'].'">구매</button></td>
					  </tr>';
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
	<script src="js/grocerymarket.js"></script>

  </body>
</html>