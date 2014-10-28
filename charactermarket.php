<?
	/*
		Charactermarket.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
	include_once "./logic/charactermarket_initial.php";
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
					<td class="info">공격력</td>
					<td class="info">능력치변화량</td>
					<td class="info">특수기능</td>
					<td class="info">판매수</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	for( $i=0; $i<count($character_item); $i++ )
	{
		if( $character_item[$i]['type'] != 'weapons' )
			continue;

		echo '<tr align="center">
				<td>'.$character_item[$i]['name'].'</td>
				<td>'.$character_item[$i]['low_power'].' ~ '.$character_item[$i]['max_power'].'</td>
				<td>'.$character_item[$i]['stat1'].'/'.$character_item[$i]['stat2'].'/'.$character_item[$i]['stat3'].'/'.$character_item[$i]['stat4'].'/'.$character_item[$i]['stat5'].'/'.$character_item[$i]['stat6'].'</td>
				<td>'.$character_item[$i]['special'].'</td>
				<td>'.$character_item[$i]['popular'].'</td>
				<td>'.$character_item[$i]['price'].' 루비</td>
				<td><button type="button" class="btn btn-default buy" value="'.$character_item[$i]['no'].'">구매</button></td>
              </tr>';
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
					<td class="info">방어력</td>
					<td class="info">능력치변화량</td>
					<td class="info">특수기능</td>
					<td class="info">판매수</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	for( $i=0; $i<count($character_item); $i++ )
	{
		if( $character_item[$i]['type'] != 'top' )
			continue;

		echo '<tr align="center">
				<td>'.$character_item[$i]['name'].'</td>
				<td>'.$character_item[$i]['defense'].'</td>
				<td>'.$character_item[$i]['stat1'].'/'.$character_item[$i]['stat2'].'/'.$character_item[$i]['stat3'].'/'.$character_item[$i]['stat4'].'/'.$character_item[$i]['stat5'].'/'.$character_item[$i]['stat6'].'</td>
				<td>'.$character_item[$i]['special'].'</td>
				<td>'.$character_item[$i]['popular'].'</td>
				<td>'.$character_item[$i]['price'].' 루비</td>
				<td><button type="button" class="btn btn-default buy" value="'.$character_item[$i]['no'].'">구매</button></td>
              </tr>';
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
					<td class="info">방어력</td>
					<td class="info">능력치변화량</td>
					<td class="info">특수기능</td>
					<td class="info">판매수</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	for( $i=0; $i<count($character_item); $i++ )
	{
		if( $character_item[$i]['type'] != 'pants' )
			continue;

		echo '<tr align="center">
				<td>'.$character_item[$i]['name'].'</td>
				<td>'.$character_item[$i]['defense'].'</td>
				<td>'.$character_item[$i]['stat1'].'/'.$character_item[$i]['stat2'].'/'.$character_item[$i]['stat3'].'/'.$character_item[$i]['stat4'].'/'.$character_item[$i]['stat5'].'/'.$character_item[$i]['stat6'].'</td>
				<td>'.$character_item[$i]['special'].'</td>
				<td>'.$character_item[$i]['popular'].'</td>
				<td>'.$character_item[$i]['price'].' 루비</td>
				<td><button type="button" class="btn btn-default buy" value="'.$character_item[$i]['no'].'">구매</button></td>
              </tr>';
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
					<td class="info">방어력</td>
					<td class="info">능력치변화량</td>
					<td class="info">특수기능</td>
					<td class="info">판매수</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	for( $i=0; $i<count($character_item); $i++ )
	{
		if( $character_item[$i]['type'] != 'shoes' )
			continue;

		echo '<tr align="center">
				<td>'.$character_item[$i]['name'].'</td>
				<td>'.$character_item[$i]['defense'].'</td>
				<td>'.$character_item[$i]['stat1'].'/'.$character_item[$i]['stat2'].'/'.$character_item[$i]['stat3'].'/'.$character_item[$i]['stat4'].'/'.$character_item[$i]['stat5'].'/'.$character_item[$i]['stat6'].'</td>
				<td>'.$character_item[$i]['special'].'</td>
				<td>'.$character_item[$i]['popular'].'</td>
				<td>'.$character_item[$i]['price'].' 루비</td>
				<td><button type="button" class="btn btn-default buy" value="'.$character_item[$i]['no'].'">구매</button></td>
              </tr>';
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
					<td class="info">방어력</td>
					<td class="info">능력치변화량</td>
					<td class="info">특수기능</td>
					<td class="info">판매수</td>
					<td class="info">가격</td>
                    <td class="info">구매</td>
                </tr>
                
<?
	for( $i=0; $i<count($character_item); $i++ )
	{
		if( $character_item[$i]['type'] != 'accessory' )
			continue;

		echo '<tr align="center">
				<td>'.$character_item[$i]['name'].'</td>
				<td>'.$character_item[$i]['defense'].'</td>
				<td>'.$character_item[$i]['stat1'].'/'.$character_item[$i]['stat2'].'/'.$character_item[$i]['stat3'].'/'.$character_item[$i]['stat4'].'/'.$character_item[$i]['stat5'].'/'.$character_item[$i]['stat6'].'</td>
				<td>'.$character_item[$i]['special'].'</td>
				<td>'.$character_item[$i]['popular'].'</td>
				<td>'.$character_item[$i]['price'].' 루비</td>
				<td><button type="button" class="btn btn-default buy" value="'.$character_item[$i]['no'].'">구매</button></td>
              </tr>';
	}	
?>       </table>
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
	<script src="js/charactermarket.js"></script>

  </body>
</html>