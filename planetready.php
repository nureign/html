<?
	/*
		Basemarket.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	//include_once "./common/db_conn.php";
?>

<!-- 윗 상단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-md-2"><!--여백--></div>

    <!-- 중간부분 정렬로우 -->
	<div class="col-md-8">
     
         <!-- 행성공략 - 행성상황 시작 -->
		<div class="panel panel-success">
            <div class="panel-heading">행성공략 - 행성상황</div>
            <div class="panel-body" align="left">
            	<h5>위치 : 갈릭토피아 은하계 알렉산드라 행성 북쪽지역 <br /><br />
                    날씨 : 덥고 습함 / 40도 <br /><br />
                    예상규모 : 30등급 보안시스템 작동예상</h5>
                    
                    <table class="table table-bordered">
                    <tr align="center">
                    <td class="success">무기시스템</td>
                    <td>정찰불가</td>
                    <td class="success">방어시스템</td>
                    <td>정찰불가</td>
                    </tr>
                    <tr align="center">
                    <td class="success">방어벽</td>
                    <td>하이페*온 특수**벽</td>
                    <td class="success">방공시스템</td>
                    <td>***한 ** Lvl *4</td>
                    </tr>
                    <tr align="center">
                    <td class="success">보호막</td>
                    <td>1,000</td>
                    <td class="success">미정</td>
                    <td>없음</td>
                    </tr>
                    <tr align="center">
                    <td class="success">행성골드</td>
                    <td>정찰불가</td>
                    <td class="success">행성가스</td>
                    <td>정찰불가</td>
                    </tr>
                    </table>
                    <div align="center">
                    <img src="./images/char1.gif" /> <!-- 임시 --><br />
                    <h4>행성 기지 주인 : 레알사나이(User)</h4>
                    행성 메시지 : 사용자 지정 메시지임. 반가워요! 오기만 해봐! 피토할꺼임!ㅋㅋ<br />
                    </div> 
            </div>
           	</div>
    <!-- 행성공략 - 행성상황 종료 -->

         <!-- 특수아이템 효과 발동 시작 -->
		<div class="panel panel-success">
            <div class="panel-heading">특수아이템 효과 발동</div>
            <div class="panel-body" align="center">
            	<h5>발동! 장착한 특수아이템 합금도굴꾼장갑 +5 으로 인해 골드약탈 보너스가 10% 상승합니다.<br /><br />
                    발동! 장착한 프리미엄 아이템 원샷! 불끈드링크 로 인해 멘탈이 매턴마다 50씩 회복됩니다.
                    </h5>
            </div>
           	</div>
		<!-- 특수아이템 효과 발동 종료 -->

		<!-- 일반아이템 발동 예약 시작 -->
		<div class="panel panel-success">
            <div class="panel-heading">일반아이템 사용하기</div>
            <div class="panel-body" align="center">
				<form role="form" method="post" id="planet_ready" action="#">
                <!-- 슬슬 여기서부터 아마 반복코드 필요성 제기 -->
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">케릭터 포션</div>
							<select class="form-control">
                            	<option>사용안함</option>
                                <option>호랑이연고</option>
                                <option>멘탈포션(소)</option>
                                <option>프리즘물약</option>
                            </select>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">일반물품</div>
							<select class="form-control">
                            	<option>사용안함</option>
                                <option>프리즘발생기</option>
                                <option>멘탈아웃총</option>
                                <option>사무라이의 정신</option>
                            </select>
						</div>
					</div>
            </div>
           	</div>
		<!-- 일반아이템 발동 예약 종료 -->


         <!-- 공격순서 셋팅 -->
		<div class="panel panel-success">
            <div class="panel-heading">공격순서 설정</div>
            <div class="panel-body" align="center">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">선택</div>
                        <select multiple class="form-control">
                          <option>대공포전용유닛</option>
                          <option>정찰병 투입</option>
                          <option>나노로봇 투입</option>
                          <option>VS-3 미사일 공격</option>
                          <option>(특수능력)원격폭격 지원</option>
                        </select>
						</div>
					</div>
                    <div class="input-group">
						<div class="input-group-addon">확정</div>
						<input class="form-control" id="attack1" type="text" placeholder="1번 공격 : 여기로" disabled><br />
                        <input class="form-control" id="attack2" type="text" placeholder="2번 공격 : 여기로2" disabled><br />
                        <input class="form-control" id="attack3" type="text" placeholder="3번 공격 : 여기로3" disabled><br />
                        <input class="form-control" id="attack4" type="text" placeholder="4번 공격 : 여기로4" disabled><br />
                        <input class="form-control" id="attack5" type="text" placeholder="5번 공격 : 여기로5" disabled><br />
                        </form>
						</div>
					</div>
            			<button type="submit" class="btn btn-danger">행성 공격!</button>&nbsp;
                        <button type="submit" class="btn btn-warning">기지로 돌아가기</button> <br /><br />
				</div>
           	</div>
			<!-- 공격순서 셋팅 종료 -->




</div>
<!-- 중간부분 정렬로우 종료 -->


	<div class="col-md-2"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->



	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>