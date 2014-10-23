<?
	/*
		Lab.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 연구실 시작 -->
	<div class="col-xs-10">

	<!-- 위에 표시 -->
    <div class="panel panel-warning width">
		<div class="panel-heading" style="background-color:#0CF"><strong><font color="white">연구실</font></strong></div>
		<div class="panel-body">
        <table class="table center" style="width:930px;">
        	<tr>
            	<td class="left" width="450px"><img src="./images/lab.jpg" alt="..." width="450px" height="229px"></td>
                <td align="left">
                	<h4 align="center">들어오자마자 연구실 특유의 냄새가 납니다.</h4><br />
					이곳에서는 아이템 업그레이드와 더불어 스킬을 배울 수 있는 스킬방이 존재합니다. <br />
                    많은 사람들이 방문을 하기 때문에 챙겨오신 아이템들을 분실하지 않도록 주의해주세요!<br />
                    아! 그리고 스킬룸에서는 타인에 방해가 되지 않도록 정숙해 주시구요!
                </td>
            </tr>
        </table>
		</div>
	</div>
    <!-- 위에 표시 닫기 -->

    <!-- 메뉴부분 시작 -->
    <div class="bs-example bs-example-tabs width" align="center">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#itemupgrade" role="tab" data-toggle="tab">아이템 업그레이드</a></li>
          <li><a href="#skillroom" role="tab" data-toggle="tab">스킬룸</a></li>
        </ul>
    </div>
    <!-- 메뉴부분 닫기 -->
    
<!-- 마이탭컨텐츠 시작 -->
<div id="myTabContent" class="tab-content width">

	<!-- 탭 시작 -->
	<div class="tab-pane fade in active width" id="itemupgrade">
    
	<!-- 연구실 핵심기능 시작 -->
    <div class="panel panel-default width">
      <div class="panel-body">
      	<!-- 아이템 업그레이드 -->
        <table class="table center" style="width:930px;">
            <tr class="info">
				<td>이름</td>
                <td>타입</td>
                <td>레벨</td>
                <td>공격력</td>
                <td>방어력</td>
                <td>내구도</td>
                <td>비용</td>
                <td>업글</td>
            </tr>
            <tr>
            	<td>불주먹</td>
                <td>왼손무기</td>
                <td>2</td>
                <td>100~120</td>
                <td>-</td>
                <td>1000</td>
                <td>500 루비</td>
                <td>
                    <form class="form-inline" role="form" method="post" action="lab_item_upgrade.php">
                        <input type="hidden" id="left_weapons" value="" />
                        <button type="submit" class="btn btn-default">업그레이드</button>
                    </form>
                </td>
            </tr>
            <tr>
            	<td>광선검</td>
                <td>오른손무기</td>
                <td>3</td>
                <td>400~600</td>
                <td>-</td>
                <td>100</td>
                <td>2000 루비</td>
                <td>
                    <form class="form-inline" role="form" method="post" action="lab_item_upgrade.php">
                        <input type="hidden" id="right_weapons" value="" />
                        <button type="submit" class="btn btn-default">업그레이드</button>
                    </form>
                </td>
            </tr>
            <tr>
            	<td>LOVE 티셔츠</td>
                <td>상의</td>
                <td>1</td>
                <td>-</td>
                <td>100</td>
                <td>300</td>
                <td>200 루비</td>
                <td>
                    <form class="form-inline" role="form" method="post" action="lab_item_upgrade.php">
                        <input type="hidden" id="top" value="" />
                        <button type="submit" class="btn btn-default">업그레이드</button>
                    </form>
                </td>
            </tr>
            <tr>
            	<td>LOVE 바지</td>
                <td>하의</td>
                <td>1</td>
                <td>-</td>
                <td>100</td>
                <td>300</td>
                <td>200 루비</td>
                <td>
                    <form class="form-inline" role="form" method="post" action="lab_item_upgrade.php">
                        <input type="hidden" id="pants" value="" />
                        <button type="submit" class="btn btn-default">업그레이드</button>
                    </form>
                </td>
            </tr>
            <tr>
            	<td>전투신발</td>
                <td>신발</td>
                <td>1</td>
                <td>-</td>
                <td>50</td>
                <td>100</td>
                <td>300 루비</td>
                <td>
                    <form class="form-inline" role="form" method="post" action="lab_item_upgrade.php">
                        <input type="hidden" id="shoes" value="" />
                        <button type="submit" class="btn btn-default">업그레이드</button>
                    </form>
                </td>
            </tr>
            <tr>
            	<td>프로도 반지</td>
                <td>악세사리</td>
                <td>10</td>
                <td>500</td>
                <td>500</td>
                <td>10000</td>
                <td>100000 루비</td>
                <td>
                    <form class="form-inline" role="form" method="post" action="lab_item_upgrade.php">
                        <input type="hidden" id="accessory" value="" />
                        <button type="submit" class="btn btn-default">업그레이드</button>
                    </form>
                </td>
            </tr>
       </table>
        <!-- 아이템 업그레이드 종료 -->
      </div>
    </div>
    <!-- 연구실 핵심기능 닫기 -->
    </div>
    
    <!-- 탭 종료 -->
    <!-- 탭 시작 -->
    <div class="tab-pane fade width" id="skillroom">
    
    <!-- 현재 스킬 포인트 -->
	<div class="alert alert-info width center" role="alert">
    	<strong>현재 스킬 포인트</strong> : 0
    </div>
    <!-- 현재 스킬 포인트 -->
    
    <div class="panel panel-default width">
      <div class="panel-body">
      	<!-- 스킬룸 -->
        <table class="table center" style="width:930px;">
            <tr class="info">
            	<td>이름</td>
                <td>타입</td>
                <td>특징</td>
                <td>설명</td>
                <td>배우기</td>
            </tr>
            <tr>
            	<td>전격미사일</td>
                <td>물리</td>
                <td>데미지 +10 / 추가데미지 +5</td>
				<td>상대는 미사일을 맞고 난 후 전격데미지를 추가로 +5를 얻는다</td>
                <td>
                	<form class="form-inline" role="form" method="post" action="lab_item_upgrade.php">
                        <input type="hidden" id="accessory" value="" />
                        <button type="submit" class="btn btn-default">2 스킬포인트 필요</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <!-- 탭 종료 -->
</div>
<!-- 마이탭컨텐츠 닫기 -->
	</div>     
    <!-- 연구실 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->
</div></div>
	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>