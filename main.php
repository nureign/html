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
	<div class="col-md-1"><!--여백--></div>
    
    
    <!-- 왼쪽 메뉴 시작 -->
	<div class="col-md-3">
    
	<div class="well well-sm">
    	메뉴 선택
    </div>
        
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
			<a href="./adventure.php"><button type="button" class="btn btn-default">모험하기</button></a>
  		</div>
        <div class="btn-group">
        	<button type="button" class="btn btn-default">행성공략</button>
        </div>
	</div>
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
			<button type="button" class="btn btn-default">스테이터스</button>
  		</div>
        <div class="btn-group">
        	<button type="button" class="btn btn-default">기지관리</button>
        </div>
	</div>
    
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
			<a href="./grocerymarket.php"><button type="button" class="btn btn-default">편의점</button></a>
  		</div>
        <div class="btn-group">
        	<a href="./charactermarket.php"><button type="button" class="btn btn-default">전통시장</button></a>
        </div>
	</div>
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
			<a href="./basemarket.php"><button type="button" class="btn btn-default">베이스시장</button></a>
  		</div>
        <div class="btn-group">
        	<button type="button" class="btn btn-default">블랙마켓</button>
        </div>
	</div>
    
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
			<button type="button" class="btn btn-default">함선시장</button>
  		</div>
        <div class="btn-group">
        	<button type="button" class="btn btn-default">연구소(업글)</button>
        </div>
	</div>
    
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
			<button type="button" class="btn btn-default">진급</button>
  		</div>
        <div class="btn-group">
        	<button type="button" class="btn btn-default">퀘스트</button>
        </div>
	</div>    

	<br />
	<div class="well well-sm">
    	모험 떠나기
    </div>

	<div class="btn-group btn-group-justified">
		<div class="btn-group">
			<button type="button" class="btn btn-default">알려진 블랙홀</button>
  		</div>
        <div class="btn-group">
        	<button type="button" class="btn btn-default">지구로 귀환</button>
        </div>
	</div>

    </div>
    <!-- 왼쪽 메뉴 닫기 -->
    
    
    
    <!-- 케릭터 부분 열기 -->
	<div class="col-md-4"> 
		<img data-src="holder.js/300x300" src="./images/char1.gif" alt="...">
        <br /><br />
			<!-- 케릭터 아이템 현황 열기 -->
			<div class="panel panel-default">
				<div class="panel-heading">장착하고 있는 아이템</div>
                    <table class="table table-condensed" align="center">
                        <tr align="center">
                        <td class="active">왼손 무기</td>
                        <td>목검</td>
                        <td class="active">오른손 무기</td>
                        <td>죽도</td>
                        </tr>
                        </tr>
                        <tr align="center">
                        <td class="active">상의</td>
                        <td>와이셔츠</td>
                        <td class="active">하의</td>
                        <td>팬티</td>
                        </tr>
                        <tr align="center">
                        <td class="active">신발</td>
                        <td>금색단화 +1</td>
                        <td class="active">악세사리</td>
                        <td>블링블링 매니큐어</td>
                        </tr>
                    </table>
			</div>
            <!-- 케릭터 아이템 현황 닫기 -->
    </div>
    <!-- 케릭터 부분 닫기 -->
    
    
    <!-- 오른쪽 스테이터스 부분 열기-->
    <div class="col-md-3">
        <ol class="breadcrumb">
            <li class="active">캐릭터 이름</a></li>
            <li>모에모에 (#1653)</a></li>
        </ol>
		<ol class="breadcrumb">
            <li class="active">등급(레벨)</a></li>
            <li>견습(Lv.10)</a></li>
        </ol>
        
        <!-- 체력부분 열기 -->
		<div class="input-group">
  			<span class="input-group-addon"><span class="label label-danger">체력</span></span>
  				<div class="progress, form-control">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
					100%
					</div>
				</div>
                <span class="input-group-addon">5000/5000</span>
		</div>
        <!-- 체력부분 닫기 -->
        
        <!-- 멘탈부분 열기 -->
        <div class="input-group">
  			<span class="input-group-addon"><span class="label label-warning">멘탈</span></span>
  				<div class="progress, form-control">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
					99%
					</div>
				</div>
                <span class="input-group-addon">1980/2000</span>
		</div>
        <!-- 멘탈부분 닫기 -->

        <!-- 경험치부분 열기 -->
        <div class="input-group">
  			<span class="input-group-addon"><span class="label label-info">경험</span></span>
  				<div class="progress, form-control">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
					30%
					</div>
				</div>
                <span class="input-group-addon">300/1000</span>
		</div>
        <!-- 멘탈부분 닫기 -->
        
       <br />
       
       <!-- 성향부분 열기 -->
       <div class="panel panel-default">
		<table class="table table-condensed" align="center">
			<tr class="active">
				<td class="active" align="center">성향</td>
				<td colspan="4" align="center" class="success">책략가</td>
			</tr>
		</table>
        </div>
        <!-- 성향부분 닫기 -->
        
       <!-- 스테이터스 부분 열기 -->
		<div class="panel panel-default">
			<div class="panel-heading">스테이터스</div>
				<!-- Table -->
                <table class="table table-condensed" align="center">
                    <tr class="danger">
                    <td class="danger" align="center">근력</td>
                    <td class="danger" align="center">민첩</td>
                    <td class="danger" align="center">지력</td>
					<td class="danger" align="center">예지력</td>
                    </tr>
                    </tr>
                    <tr class="warning">
                    <td class="warning" align="center">30</td>
                    <td class="warning" align="center">45</td>
                    <td class="warning" align="center">57</td>
					<td class="warning" align="center">12</td>
                    </tr>
                    <tr class="danger">
                    <td class="danger" align="center">행운</td>
                    <td class="danger" align="center">매력</td>
					<td class="danger" align="center">명예</td>
					<td class="danger" align="center">루비</td>
                    </tr>
					<tr class="warning">
                    <td class="warning" align="center">80</td>
                    <td class="warning" align="center">60</td>
                    <td class="warning" align="center">10,000</td>
					<td class="warning" align="center">754,210</td>
                    </tr>
                </table>
           </div>
		</div>
        <!-- 스테이터스 부분 닫기 -->
    </div>
	<!-- 오른쪽 스테이터스 부분 닫기 -->
    
	<div class="col-md-1"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->

<br />

<!-- 아래 하단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-md-1"><!--여백--></div>
    
    <!-- 가운데 내기지 현황 부분 -->
	<div class="col-md-10" align="center">
    
    
    	<!-- 내기지 현황 시작 -->
    <div class="panel panel-default">
      <!-- Default panel contents -->
		<div class="panel-heading">내기지 현황</div>
    
    		<div class="row">
				<div class="col-md-8 col-md-offset-2"><br />
                	<!-- 행성사진 시작 -->
					<img data-src="holder.js/500x300" src="./images/base10.jpg" alt="..."><br /><br />
                    <!-- 행성사진 종료 -->
                    <!-- Table -->
                    <table class="table table-bordered">
                    <tr align="center">
                    <td class="success">무기시스템</td>
                    <td>나무총</td>
                    <td class="success">방어시스템</td>
                    <td>NS-1</td>
                    </tr>
                    <tr align="center">
                    <td class="success">방어벽</td>
                    <td>신문지</td>
                    <td class="success">방공시스템</td>
                    <td>Anti-M60</td>
                    </tr>
                    <tr align="center">
                    <td class="success">보호막</td>
                    <td>없음</td>
                    <td class="success">미정</td>
                    <td>없음</td>
                    </tr>
                    <tr align="center">
                    <td class="success">행성골드</td>
                    <td>123,000</td>
                    <td class="success">행성가스</td>
                    <td>3,000</td>
                    </tr>
                    </table>
                </div>
			</div>
      
    	</div>
    </div>
        <!-- 내기지 현황 닫기 -->
        
	</div>
    <!-- 가운데 내기지 현황 부분 닫기 -->

    <div class="col-md-1"><!--여백--></div>
</div>

	<?
		include_once "./common/footer.php";
	?>
    
  </body>
</html>