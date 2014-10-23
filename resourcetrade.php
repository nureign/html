<?
	/*
		Resourcetrade.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 자원거래소 시작 -->
	<div class="col-xs-10">

	<!-- 위에 표시 -->
    <div class="panel panel-warning width">
		<div class="panel-heading" style="background-color:#666"><strong><font color="white">자원거래소</font></strong></div>
		<div class="panel-body">
        <table class="table center" style="width:930px;">
        	<tr>
            	<td class="left" width="400px"><img src="./images/resourcetrade.jpg" alt="..." width="400px" height="200px"></td>
                <td align="left">
                	<h4 align="center">사람들이 북적거리는 자원거래소입니다.</h4><br />
					자원거래가 주를 이루는 곳으로 사람들이 많아서 소매치기를 조심해야 하지만<br />
                    주위에 배치되어 있는 자원거래소 청원경찰들이 지키고 있기에<br />
                    안심하고 자원거래를 할 수 있다고 판단됩니다.<br />
                    일반자원을 티타늄으로 교환 가능하며, 티타늄은 팔라듐으로 교환 가능합니다.                   
                </td>
            </tr>
        </table>
		</div>
	</div>
    <!-- 위에 표시 닫기 -->

	<!-- 현재 자원 시세 -->
	<div class="alert width center" role="alert" style="background-color:#CCC;">
    	<strong><h4><font color="white">현재 자원 시세</font></h4></strong>
        <table class="table center" style="width:940px;">
        	<tr class="center" style="background-color:#F2F2F2;">
            	<td>철</td>
                <td>구리</td>
                <td>주석</td>
                <td>납</td>
                <td>우라늄</td>
                <td>티타늄</td>
            </tr>
            <tr class="center" style="background-color:#F9F9F9;">
            	<td>+1</td>
                <td>+1</td>
                <td>+0.5</td>
                <td>+0.8</td>
                <td>+1.5</td>
                <td>-50</td>
			</tr>
         </table>
         
        <strong><h4><font color="white">현재 소지중인 자원량</font></h4></strong>
        <table class="table center" style="width:940px;">
        	<tr class="center" style="background-color:#F2F2F2;">
            	<td>철</td>
                <td>구리</td>
                <td>주석</td>
                <td>납</td>
                <td>우라늄</td>
                <td>티타늄</td>
            </tr>
            <tr class="center" style="background-color:#F9F9F9;">
            	<td>1000</td>
                <td>1233</td>
                <td>5323</td>
                <td>2343</td>
                <td>10000</td>
                <td>500</td>
			</tr>
         </table>

    </div>
    <!-- 현재 자원 시세 닫기 -->
    
	<!-- 변경부분 -->
    <div class="panel panel-default width">
      <div class="panel-body">
        <table class="table center" style="width:930px;">
        	<tr class="center" style="background-color:#999">
            <form class="form-inline" role="form" method="post" action="resourcetrade_select.php">
            	<td>일반자원 선택</td>
                <td>
                    <select class="form-control">
                      <option>철</option>
                      <option>구리</option>
                      <option>주석</option>
                      <option>납</option>
                      <option>우라늄</option>
                    </select>
                </td>
                <td>수량</td>
				<td>
                	<input type="text" class="form-control" id="normal_resource">
                </td>
                <td>
                	티타늄으로&nbsp;<button type="submit" class="btn btn-default">교환</button>
                </td>
            </form>
            </tr>
        	<tr class="center" style="background-color:#999">
            <form class="form-inline" role="form" method="post" action="resourcetrade_select.php">
            	<td><strong>가치자원</strong></td>
                <td>
					<strong>티타늄</strong>
                </td>
                <td>수량</td>
				<td>
                	<input type="text" class="form-control" id="special_resource">
                </td>
                <td>
                	팔라듐으로&nbsp;<button type="submit" class="btn btn-default">교환</button>
                </td>
            </form>
            </tr>
         </table>
    </div>
    </div>
    <!-- 변경부분 닫기 -->

	</div>     
    <!-- 자원거래소 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>