<?
	/*
		Main.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
?> 

    <!-- Carousel
    ================================================== -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>
    
    
    <!-- 가운데 중심 시작 -->
	<div class="col-xs-10">
    	<!-- 메뉴부분 시작 -->
		<div class="alert alert-warning width" role="alert">메뉴선택&nbsp;&nbsp;
            <!-- 행성공략 버튼 -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">공격대기<span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li class="center"><a href="javascript:;" id="adventure">모험하기</a></li>
                    <li class="divider"></li>
                    <li class="center"><a href="javascript:;" id="planetattack">행성공략</a></li>
                </ul>
            </div>
            <!-- 행성공략 버튼 닫기 -->
            <!-- 마켓 버튼 -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">마켓방문<span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li class="center"><a href="javascript:;" id="grocerymarket">편의점</a></li>
                    <li class="center"><a href="javascript:;" id="charactermarket">전통시장</a></li>
                    <li class="center"><a href="javascript:;" id="basemarket">베이스시장</a></li>
                    <li class="center"><a href="javascript:;">함선시장</a></li>
                    <li class="cemter"><a href="javascript:;">자원거래소</a></li>
                    <li class="divider"></li>
                    <li class="center"><a href="javascript:;">블랙마켓</a></li>
                    <li class="center"><a href="javascript:;">경매장</a></li>
                    <li class="center"><a href="javascript:;">프리미엄 마켓</a></li>
                </ul>
            </div>
            <!-- 마켓 버튼 닫기 -->
            <!-- 일반 버튼 -->
            <a href="./privateroom.php"><button type="button" class="btn btn-default" id="privateroom">개인룸</button></a>
            <a href="./mybase.php"><button type="button" class="btn btn-default">기지관리</button></a>
            <a href="./lab.php"><button type="button" class="btn btn-default">연구소</button></a>
            <a href="./quest.php"><button type="button" class="btn btn-default">퀘스트</button></a>
            <a href="./bank.php"><button type="button" class="btn btn-default">고블린은행</button></a>
            <a href="./promotion.php"><button type="button" class="btn btn-default">진급</button></a>
            <!-- 일반 버튼 닫기 -->
            <!-- 모험하기 -->
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">모험하기<span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li class="center"><a href="javascript:;">알려진 블랙홀</a></li>
                    <li class="center"><a href="javascript:;">지구로 귀환</a></li>
                </ul>
            </div>
            <!-- 모험하기 닫기 -->
    	</div>
        <!-- 메뉴부분 닫기 -->

		<!-- 케릭터 현황 시작 -->
        <h4 align="left" style="margin-left:120px"><strong>케릭터 현황</h4></strong>
        <table class="table table-condensed width" align="center">
          <tr>
            <td width="300px"><img data-src="holder.js/300x300" src="./images/char1.gif" alt="..."></td>
            <td width="300px">
            	<!-- 케릭터이름, 소개말, 직책, 성향 -->
                <ol class="breadcrumb">
                <li class="active">캐릭터 이름</a></li>
                <li id="name"></a></li>
                </ol>
                <ol class="breadcrumb">
                <li class="active">캐릭터 소개말</a></li>
                <li id="intro"></a></li>
                </ol>
                <ol class="breadcrumb">
                <li class="active">직책 (레벨)</a></li>
                <li id="level"></a></li>
                </ol>

               <div class="panel panel-default">
                <table class="table table-condensed" align="center">
                    <tr class="active">
                        <td class="active" align="center" width="100px">성향</td>
                        <td colspan="4" align="center" class="success" id='tendency'></td>
                    </tr>
                </table>
                </div>
                <!-- 케릭터이름, 소개말, 직책, 성향 닫기 -->
                <!-- 체력부분 열기 -->
                <div class="input-group">
                <span class="input-group-addon"><span class="label label-danger">체력</span></span>
                    <div class="progress, form-control" style="background-color:#FEE;">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="hp_per">0%</div>
                    </div>
                    <span class="input-group-addon" id="hp_text">0/0</span>
                </div>
                <!-- 체력부분 닫기 -->
            
                <!-- 멘탈부분 열기 -->
                <div class="input-group">
                <span class="input-group-addon"><span class="label label-warning">멘탈</span></span>
                    <div class="progress, form-control" style="background-color:#FFE7D9;">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="mental_per">0%</div>
                    </div>
                    <span class="input-group-addon" id="mental_text">0/0</span>
                </div>
                <!-- 멘탈부분 닫기 -->
    
                <!-- 경험치부분 열기 -->
                <div class="input-group">
                <span class="input-group-addon"><span class="label label-info">경험</span></span>
                    <div class="progress, form-control" style="background-color:#F4FFFF;">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="exp_per">0%</div>
                    </div>
                    <span class="input-group-addon" id="exp_text">0/0</span>
                </div>
                <!-- 경험치부분 닫기 -->
            </td>
            <td>
                <!-- 스테이터스 부분 열기 -->
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">스테이터스</div>
                        <table class="table table-condensed" align="center">
                            <tr class="danger">
                            <td class="danger" align="center">근력</td>
                            <td class="danger" align="center">민첩</td>
                            <td class="danger" align="center">지력</td>
                            <td class="danger" align="center">예지력</td>
                            </tr>
                            </tr>
                            <tr class="warning">
                            <td class="warning" align="center" id="stat1"></td>
                            <td class="warning" align="center" id="stat2"></td>
                            <td class="warning" align="center" id="stat3"></td>
                            <td class="warning" align="center" id="stat4"></td>
                            </tr>
                            <tr class="danger">
                            <td class="danger" align="center">행운</td>
                            <td class="danger" align="center">매력</td>
                            <td class="danger" align="center">명예</td>
                            <td class="danger" align="center">루비</td>
                            </tr>
                            <tr class="warning">
                            <td class="warning" align="center" id="stat5"></td>
                            <td class="warning" align="center" id="stat6"></td>
                            <td class="warning" align="center" id="honor"></td>
                            <td class="warning" align="center" id="ruby"></td>
                            </tr>
                        </table>
                   </div>
                </div>
                <!-- 스테이터스 부분 닫기 -->
                <!-- 케릭터 아이템 현황 열기 -->
                <div class="panel panel-default">
                    <div class="panel-heading" align="center">장착하고 있는 아이템</div>
                        <table class="table table-condensed" align="center">
                            <tr align="center">
                            <td class="active" width="90px">왼손 무기</td>
                            <td id="lefthand"></td>
                            <td class="active" width="90px">오른손 무기</td>
                            <td id="righthand"></td>
                            </tr>
                            </tr>
                            <tr align="center">
                            <td class="active">상의</td>
                            <td id="top"></td>
                            <td class="active">하의</td>
                            <td id="pants"></td>
                            </tr>
                            <tr align="center">
                            <td class="active">신발</td>
                            <td id="shoes"></td>
                            <td class="active">악세사리</td>
                            <td id="accessory"></td>
                            </tr>
                        </table>
                </div>
                <!-- 케릭터 아이템 현황 닫기 -->
            </td>
          </tr>
        </table>
		<!-- 케릭터 현황 닫기 -->
        
		<!-- 기지 현황 시작 -->
        <h4 align="left" style="margin-left:120px"><strong>기지 현황</h4></strong>
        <table class="table table-condensed width" align="center">
          <tr>
            <td width="400px"><img src="./images/base10.jpg" alt="..." width="400px" height="260px"></td>
            <td width="600px">
            	<!-- 기지 이름 및 소개말 -->
                <label>기지 소개</label>
				<table class="table table-condensed" style="width:550px;" align="center">
          			<tr>
						<td class="danger" align="center">기지 이름</td>
                        <td class="warning" align="center">아이리스의 집</td>
                    </tr>
                    <tr>
                    	<td class="danger" align="center">기지 소개말</td>
                        <td class="warning" align="center">우리집 좀 그만터세요ㅜㅜ</td>
                    </tr>
				</table>
                <!-- 기지 이름 및 소개말 -->
            	<!-- 기지 현황 -->
                <label>기지 현황</label>
				<table class="table table-condensed" style="width:550px;" align="center">
          			<tr align="center">
						<td class="danger" width="150px">커맨드센터 레벨</td>
                        <td class="warning">1</td>
                        <td class="danger" width="150px">보호막</td>
                        <td class="warning">없음</td>
                    </tr>
                    <tr align="center">
						<td class="danger">무기시스템</td>
                        <td class="warning">RX-d</td>
                        <td class="danger">방어시스템</td>
                        <td class="warning">NDV-3</td>
                    </tr>
                    <tr align="center">
						<td class="danger">방공시스템</td>
                        <td class="warning">종이미사일</td>
                        <td class="danger">방어벽</td>
                        <td class="warning">종이벽</td>
                    </tr>
                    <tr align="center">
						<td class="danger">티타늄보유</td>
                        <td class="warning">1000</td>
                        <td class="danger">팔라듐보유</td>
                        <td class="warning">300</td>
                    </tr>
				</table>
                <!-- 기지 현황 닫기 -->
            </td>
          </tr>
        </table>
		<!-- 기지 현황 닫기 -->
        <!-- 아래선 -->
        <table class="table table-condensed width">
          <tr>
            <td></td>
          </tr>
        </table>
		<!-- 아래선 닫기 -->
    
	</div>
    <!-- 가운데 중심 닫기 -->
    <div class="col-xs-1"><!--여백--></div>
</div>

	<?
		include_once "./common/footer.php";
	?>
	<script src="js/main.js"></script>
  </body>
</html>