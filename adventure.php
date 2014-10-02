<?
	/*
		adventure.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	//include_once "./common/db_conn.php";
?>
<audio src="./bgm/adventure_bg.mp3" autoplay="autoplay" loop="loop">
</audio>
<!-- 윗 상단 로우 전체 시작 -->
<style type="text/css">
body {

	background-image: url(images/bgleft.gif), url(images/bgright.gif); 
   background-repeat: repeat-y; 
   background-position: top left, top right; 
}
</style>

<div class="row" align="center">
	<div class="col-md-2"><!--여백--></div>

    <!-- 중간부분 정렬로우 -->
	<div class="col-md-8">
     
     	<div class="well well-sm"><h2>모험을 떠나왔다</h2>행성이름 : 갤슈아 행성<br />위치 : 목초지</div>
         <!-- 모험하기 시작 -->
		<div class="panel panel-info">
            <div class="panel-heading">특수아이템 발동</div>
            <div class="panel-body" align="center">
            	<h5>소지하고 있던 의문의 넥클레스에 의해 상대방에게 의문의 저주를 겁니다.</h5>
            </div>
           	</div>
		<!-- 모험하기 닫기 -->
    </div>
    <!-- 중간부분 정렬로우 종료 -->

	<div class="col-md-2"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->




<!-- 중간 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-md-2"><!--여백--></div>

    <!-- 중간부분 왼쪽로우 시작-->
	<div class="col-md-4">
        <table class="table table-bordered">
            <tr>
              <td>
              	<img src="./images/char1.gif" alt="..." width="170" height="170" class="img-rounded" data-src="holder.js/300x300">
              </td>
              <td align="center">
              
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
        
        		<!-- 스킬 사용 부분 시작 -->
        		<br />
                <div class="btn-group">
                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                    스킬사용<span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">스킬첫번째</a></li>
                    <li><a href="#">스킬두번째</a></li>
                    <li><a href="#">스킬세번재</a></li>
                    <li class="divider"></li>
                    <li><a href="#">특수스킬</a></li>
                  </ul>
                </div>
                <!-- 스킬 사용 부분 종료 -->

				<!-- 아이템 사용 부분 -->
                <div class="btn-group">
                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                    아이템 사용<span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">합금용액</a></li>
                    <li><a href="#">A부품</a></li>
                    <li><a href="#">프리즘호출기</a></li>
                    <li class="divider"></li>
                    <li><a href="#">GMP 에너지펄스</a></li>
                  </ul>
                </div>
				<!-- 아이템 사용 부분 종료 -->
              </td>
            </tr>
        </table>
    </div>
    <!-- 중간부분 왼쪽로우 종료 -->
    
    
    
    
    <!-- 중간부분 오른쪽로우 시작-->
	<div class="col-md-4">
        <table class="table table-bordered">
            <tr>
              <td>
              	<img src="./images/mob_goblin.gif" alt="..." width="170" height="170" class="img-rounded" data-src="holder.js/300x300">
              </td>
              <td>
              
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
               
 
            <ul class="list-group">
			  <li class="list-group-item">이름 : 고블린전사</li>
              <li class="list-group-item">속성 : 물리타입</li>
              <li class="list-group-item">자원형태 : 골드</li>
            </ul>

              </td>
            </tr>
        </table>
    </div>
    <!-- 중간부분 오른쪽로우 종료 -->

	<div class="col-md-2"><!-- 공백 --></div>
</div>
<!-- 중간 로우 전체 닫기 -->




<!-- 아래 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-md-2"><!--여백--></div>

    <!-- 중간부분 로우 시작-->
	<div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-body">
            <ul class="list-group">
            	<li class="list-group-item">모에모에 이(/가) 고블린에게 도전하였다!<br />소지하고 있던 엑스칼리버로 적을 두동강 냈다! 적은 13500 데미지를 입었다!</li>
                <li class="list-group-item">고블린 이(/가) 모에모에에게 강력한 토네이도 발차기를 시전하였다!<br />모에모에는 1300 데미지를 입었다!</li>
              <li class="list-group-item list-group-item-success">전투에서 승리하였습니다.<br />골드 100,000, 엘릭서 500,000을 획득하였습니다!</li>
              <li class="list-group-item list-group-item-info">스킬작동!</li>
              <li class="list-group-item list-group-item-warning">특수아이템 발동!!!!!!</li>
              <li class="list-group-item list-group-item-danger">아직미정(보스전 활용)</li>
            </ul>
            <button type="button" class="btn btn-default">전투포기</button>&nbsp;
            <button type="button" class="btn btn-default">전투마무리</button>
          </div>
        </div>
    </div>
    <!-- 중간부분 로우 종료 -->

	<div class="col-md-2"><!-- 공백 --></div>
</div>
<!-- 아래 로우 전체 닫기 -->


	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>