<?
	/*
		adventure.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
?>
<!--<audio src="./bgm/adventure_bg.mp3" autoplay="autoplay" loop="loop"></audio>-->
<!-- 윗 상단 로우 전체 시작 -->
<!--<style type="text/css">
body {

	background-image: url(images/bgleft.gif), url(images/bgright.gif); 
	background-repeat: repeat-y; 
	background-position: top left, top right; 
}
</style>-->

<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 중간부분 정렬로우 -->
	<div class="col-xs-10">
		<!-- 모험하기 시작 -->
     	<div class="well well-sm width"><h2>모험을 떠나왔다</h2><span id="m_planet">행성: </span><br /><span id="m_location">위치: </span></div>
		<div class="panel panel-info width">
            <div class="panel-heading">특수아이템 발동</div>
            <div class="panel-body" align="center">
            	<h5>소지하고 있던 의문의 넥클레스에 의해 상대방에게 의문의 저주를 겁니다.</h5>
            </div>
           	</div>
		<!-- 모험하기 닫기 -->
    </div>
    <!-- 중간부분 정렬로우 종료 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->


<!-- 중간 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 중간부분 시작-->
	<div class="col-xs-10">
        <table class="table table-bordered width">
            <tr>
              <td align="center" id="p_turn">
              	<!-- 나의 케릭터 현황 -->
              	<img src="./images/char1.gif" alt="..." width="170" height="170" class="img-rounded" data-src="holder.js/300x300" id="p_image">
                <!-- 나의 케릭터 현황 닫기 -->
              </td>
              <td align="center" width="380px">
              
                <!-- 체력부분 열기 -->
                <div class="input-group">
                    <span class="input-group-addon"><span class="label label-danger">체력</span></span>
                        <div class="progress, form-control">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="p_hp_per">0%</div>
                        </div>
                        <span class="input-group-addon" id="p_hp_text">0 / 0</span>
                		</div>
                <!-- 체력부분 닫기 -->
                
                <!-- 멘탈부분 열기 -->
                <div class="input-group">
                    <span class="input-group-addon"><span class="label label-warning">멘탈</span></span>
                        <div class="progress, form-control">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="p_mental_per">0%</div>
                        </div>
                        <span class="input-group-addon" id="p_mental_text">0 / 0</span>
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
              <td align="center" id="m_turn">
              	<!-- 모험의 적 이미지 표시 -->
				<img src="" width="170" height="170" class="img-rounded" data-src="holder.js/300x300" id="m_image">
                <!-- 모험의 적 이미지 닫기 -->
              </td>
              <td align="center" width="380px">
				<!-- 체력부분 열기 -->
                <div class="input-group">
                    <span class="input-group-addon"><span class="label label-danger">체력</span></span>
                        <div class="progress, form-control">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%;" id="m_hp_per">0%</div>
                        </div>
                        <span class="input-group-addon" id="m_hp_text">0/0</span>
                		</div>
                <!-- 체력부분 닫기 -->
            
            <!-- 모험의 적 이름, 속성 자원형태 표시부분 -->   
            <ul class="list-group">
			  <li class="list-group-item" id="m_name"></li>
              <li class="list-group-item" id="m_type"></li>
              <li class="list-group-item" id="m_resource"></li>
            </ul>
            <!-- 모험의 적 이름, 속성, 자원형태 표시 닫기 -->
              </td>
            </tr>
        </table>
    </div>
    <!-- 중간부분 종료 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 중간 로우 전체 닫기 -->


<!-- 아래 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 중간부분 로우 시작-->
	<div class="col-xs-10">
    	<!-- 전투 로직 디자인 시작 -->
        <div class="panel panel-default width">
          <div class="panel-body">
			<button type="button" class="btn btn-default" id="skip">스킵</button><br/><br/>
            <ul class="list-group" id="battlelog">
            </ul>
          </div>
        </div>
        <!-- 전투 로직 디자인 종료 -->
    </div>
    <!-- 중간부분 로우 종료 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 아래 로우 전체 닫기 -->
<?
	include_once "./common/footer.php";
?>
	<script src="js/adventure.js"></script>
  </body>
</html>