<?
	/*
		mybase.php (기지관리)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
?>

<!-- 윗 상단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-md-2"><!--여백--></div>

    <!-- 가운데 기지관리 시작 -->
	<div class="col-md-8">

<!-- 프라이머리 시작 -->
<div class="panel panel-primary">
	<div class="panel-heading">
    	기지관리
    </div>
	<div class="panel-body">
		<!-- 행성사진 시작 -->
		<img data-src="holder.js/500x300" src="./images/base10.jpg" alt="..."><br /><br />
		<!-- 행성사진 종료 -->
		<h4>기지관리입니다.</h4>
			정결하고 깨끗한 나의 기지의 모습을 보고 있자니 흐뭇해져서 미소가 나옵니다.<br /><br />
			이내 미소를 감추고 자신의 본분에 맞게 업무를 진행하도록 마음먹었습니다.<br />
	</div>
</div>
<!-- 프라이머리 닫기 -->

<!-- 메뉴부분 시작 -->
<div class="bs-example bs-example-tabs" align="center">
	<ul id="myTab" class="nav nav-pills" role="tab">
      <li class="active"><a href="#baseSecurity" role="tab" data-toggle="tab">기지방호시스템 설정</a></li>
      <li><a href="#commandbase" role="tab" data-toggle="tab">군사시설 관리</a></li>
      <li><a href="#resources" role="tab" data-toggle="tab">행성자원 관리</a></li>
      <li><a href="#research" role="tab" data-toggle="tab">기지 연구소</a></li>
      <li><a href="#battleship" role="tab" data-toggle="tab">함선 항공관리소</a></li>
    </ul>

<!-- 마이탭컨텐츠 시작 -->
<div id="myTabContent" class="tab-content">
	<!-- 기지방호시스템 설정 열기 -->
	<div class="tab-pane fade in active" id="baseSecurity">

	<table class="table table-hover">
		 <h3>기지방호시스템 설정</h3>
         <tr align="center">
         	<td class="success"><strong>무기시스템</strong></td>
            <td>없음</td>
            <td class="success"><strong>방어시스템</strong></td>
            <td>없음</td>
         </tr>
         <tr align="center">
         	<td class="success"><strong>방공시스템</strong></td>
            <td>없음</td>
            <td class="success"><strong>방어벽</strong></td>
            <td>없음</td>
         </tr>
	</table>

	<form class="form-horizontal" role="form" method="post" action="#미정">
	<table class="table table-bordered">
    	<tr align="center">
        	<td>
                <div class="form-group">
                    무기시스템 변경 :
            </td>
            <td>
				<select class="form-control" id="weapons_system">
					<option>변경안함</option>
					<option>장착해제</option>
					<option>거대촉수</option>
					<option>고주파직격탄</option>
					<option>초음속탄환발사기</option>
				</select>
                </div>
            </td>
            <td>
				<div class="form-group">
                    방어시스템 변경 : 
            </td>
            <td>
				<select class="form-control" id="defense_system">
					<option>변경안함</option>
					<option>장착해제</option>
					<option>방어탄환회전기</option>
					<option>순간차폐벽</option>
					<option>LVD-30 레이저빔</option>
				</select>
                </div>
            </td>
         </tr>
         <tr align="center">
         	<td>
                <div class="form-group">
                    방공시스템 변경 : 
            </td>
            <td>
				<select class="form-control" id="weapons_system">
                    <option>변경안함</option>
                    <option>장착해제</option>
                    <option>멀티탄환기</option>
                    <option>나무화살</option>
                    <option>빔스의 헬게이트</option>
				</select>
                </div>
            </td>
            <td>
                <div class="form-group">
                    방어벽 변경 : 
            </td>
            <td>
				<select class="form-control" id="defense_system">
					<option>변경안함</option>
					<option>장착해제</option>
					<option>박스벽 (35)</option>
					<option>크리스탈벽 (50)</option>
					<option>형상자기합금 (3)</option>
				</select>
                </div>
            </td>
         </tr>
         <tr align="center">
         	<td colspan="4"><button type="submit" class="btn btn-default">방호 시스템 변경</button></td>
         </tr>	
	</table>
	</form>

	</div>
    <!-- 기지방호시스템 설정 닫기 -->
    
    
	
	
	
	
	
	    
	<div class="tab-pane fade" id="commandbase">
	<br />
	<table class="table">
		<tr>
        	<!-- 커맨드센터 시작 -->
        	<td>
            	<div class="well well-sm" align="center"><h3>커맨드센터</h3>
            	<img data-src="holder.js/450x300" src="./images/commandcenter_0.gif" alt="...">
            	<table class="table table-condensed">
                  <tr class="warning" align="center">
                  	<td>커맨드센터 레벨</td>
                    <td>1</td>
                  </tr>
                  <tr class="warning" align="center">
                  	<td>건물 HP</td>
                    <td>3000</td>
                  </tr>
                  <tr class="info" align="center">
                  	<td colspan="2">업그레이드</td>
                  </tr>
                  <tr class="info" align="center">
                  	<td colspan="2"><h6><font color="red">※다음 업그레이드에 필요한 자원은 미네랄 500이 필요합니다.</font></h6><h6><font color="#FF6600">사용 가능한 시설 : 건물 HP +500 / 인사과 +2 / 레이다 +2 / 생활관 +0</font></h6>
                    <form class="form-inline" role="form">
                    <input type="hidden" id="email" value="" />
                    <button type="submit" class="btn btn-default">커맨드센터 업그레이드</button>
                    </form>
                    </td>
                  </tr>
                  <tr align="center">
                  	<td colspan="2">특수임무카드<br />커맨드센터 레벨이 낮습니다.</td>
                  </tr>
                </table>
				</div>
            </td>
            <!-- 커맨드센터 마무리 -->
                      
			<!-- 레이다 시설 시작 -->
        	<td>
            <div class="well well-sm" align="center"><h3>레이다 시설</h3>
            <img data-src="holder.js/450x300" src="./images/radar_0.gif" alt="...">
            <!-- 레이다 테이블 시작 -->
            <table class="table table-condensed">
				<tr class="warning" align="center">
                  	<td>레이다 레벨</td>
                    <td>1</td>
				</tr>
				<tr class="warning" align="center">
                  	<td>공격감지 확률</td>
                    <td>1%</td>
				</tr>
				<tr class="warning" align="center">
                  	<td>회피율 확률</td>
                    <td>1%</td>
				</tr>
				<tr class="info" align="center">
                  	<td colspan="2">업그레이드</td>
				</tr>
				<tr class="info" align="center">
                  	<td colspan="2"><h6><font color="red">※커맨드센터 레벨이 2가 되어야 합니다.</font></h6><h6><font color="#FF6600">공격 감지 및 회피율 확률 증가 : 1% / 1%</font></h6>
                    <form class="form-inline" role="form">
                    <input type="hidden" id="email" value="" />
                    <button type="submit" class="btn btn-default" disabled="disabled">레이다 업그레이드</button>
                    </form>
					</td> 
				</tr>
			</table>
			<!-- 레이다 테이블 닫기 -->
			</div>
            </td>
            <!-- 레이다 시설 끝 --> 
 		</tr>

        <tr>
            <!-- 인사과 -->
        	<td>
            	<div class="well well-sm" align="center"><h3>인사과(인사배치)</h3>
            	<img data-src="holder.js/450x300" src="./images/humanresources_0.gif" alt="...">
                <!-- 인사과 테이블 시작 -->
                <table class="table table-condensed">
                	<tr class="warning" align="center">
                    	<td>인사과 레벨</td>
                        <td>1</td>
                    </tr>
					<tr class="info" align="center">
                        <td colspan="2">업그레이드</td>
                      </tr>
                      <tr class="info" align="center">
                        <td colspan="2"><h6><font color="red">※커맨드센터 레벨이 2가 되어야 합니다.</font></h6><h6><font color="#FF6600">사용 가능한 유닛 : 저격수</font></h6>
                        <form class="form-inline" role="form">
                        <input type="hidden" id="email" value="" />
                        <button type="submit" class="btn btn-default" disabled="disabled">인사과 업그레이드</button>
                        </form>
                        </td>
                    </tr>  
                	<tr align="center">
                    	<td colspan="2">
                        유닛배치대기
                        <!-- 상태바 시작 -->
						<div class="progress">
							<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">30%</div>
						</div>
                        <!-- 상태바 종료 -->
                         
                         <!-- 생산테이블 시작 -->       
						<table class="table">
							<tr align="center">
								<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
								<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
								<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
								<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
							</tr>
							<tr align="center">
								<td>+0 개체 생산</td>
								<td>+0 개체 생산</td>
								<td>+0 개체 생산</td>
								<td>+0 개체 생산</td>
							</tr>
							<tr align="center">
								<td>
									<form role="form">
									<div class="form-group">
										<label for="normalunit">일반유닛</label>
										<select id="disabledSelect" class="form-control">
											<option>일반병사(Lv 3)</option>
										</select><br />
										<button type="submit" class="btn btn-primary">배치</button>
									</div>
									</form>
								</td>
								<td>
									<form role="form">
									<div class="form-group">
										<label for="machineunit">기계유닛</label>
										<select id="disabledSelect2" class="form-control">
											<option>이온탱크(Lv 1)</option>
											<option>정찰바이크(Lv 1)</option>
										</select><br />
										<button type="submit" class="btn btn-primary">배치</button>
									</div>
									</form>
								</td>
                                <td>
									<form role="form">
									<div class="form-group">
										<label for="airunit">공중유닛</label>
										<select id="disabledSelect3" class="form-control">
											<option>종이비행기(Lv 2)</option>
											<option>하이퍼플락기(Lv 1)</option>
										</select><br />
										<button type="submit" class="btn btn-primary">배치</button>
									</div>
									</form>
                                    </td>
                                    <td>
                                        <form role="form">
                                        <fieldset disabled>
                                        <div class="form-group">
                                            <label for="specialunit">특수유닛</label>
                                            <select id="disabledSelect4" class="form-control">
                                                <option>곧 출시됩니다</option>
                                            </select><br />
                                            <button type="submit" class="btn btn-primary">배치</button>
                                        </div>
                                        </fieldset>
                                        </form>
                                    </td>
								</tr>
							</table>
                            <!-- 생산 테이블 닫기 -->
                        </td>
					</tr>
				</table>
                <!-- 인사과 테이블 닫기 -->
				</div>
            </td>
			<!-- 인사과 종료 -->
            
            <!-- 생활관 시작 -->
            <td>
            <div class="well well-sm" align="center"><h3>생활관</h3>
            <img data-src="holder.js/450x300" src="./images/barracks_0.gif" alt="...">
			<table class="table table-condensed">
				<tr class="warning" align="center">
					<td>생활관 레벨</td>
                    <td>1</td>
				</tr>
				<tr class="warning" align="center">
					<td>현재 유닛 상태</td>
                  	<td>0 / 10</td>
				</tr>
				<tr class="info" align="center">
					<td colspan="2">업그레이드</td>
				</tr>
				<tr class="info" align="center">
                  	<td colspan="2"><h6><font color="red">※커맨드센터 레벨이 3이 되어야 합니다.</font></h6><h6><font color="#FF6600">최대 유닛 수치 증가 : +10</font></h6>
                    <form class="form-inline" role="form">
                    <input type="hidden" id="email" value="" />
                    <button type="submit" class="btn btn-default" disabled="disabled">생활관 업그레이드</button>
                    </form>
                    </td>
				</tr>
			</table>

			<table class="table">
				<tr align="center">
					<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
					<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
					<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
					<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
				</tr>
				<tr align="center">
					<td>지상유닛 이름 (0)</td>
					<td>기계유닛 이름 (3)</td>
					<td>기계유닛 이름 (2)</td>
					<td>공중유닛 이름 (1)</td>
				</tr>
				<tr align="center">
					<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
					<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
					<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
					<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
				</tr>
				<tr align="center">
					<td>공중유닛 이름 (5)</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>
            </table>
            </div>
            </td>
            <!-- 생활관 마무리 -->
		</tr>
	</table>
	</div>
    
</div>

	<!-- (필수)행성자원관리 DIV 열기 -->
	<div class="tab-pane fade" id="resources">
		행성자원 관리
	</div>
    <!-- 행성자원관리 DIV 닫기 -->

	<!-- (필수)기지연구소 DIV 열기 -->
	<div class="tab-pane fade" id="research">
		기지 연구소 (연구레벨을 올려서 행성자체에 있는 고유의 자원을 찾아내야 연구완료, 자원관리탭에서 새로운 자원시설을 생산할 수 있도록 함), 막사 유닛 업그레이드 (기지전용)
	</div>
    <!-- 기지연구소 DIV 닫기 -->

	<!-- (필수) 함선 항공관리소 DIV 열기 -->
	<div class="tab-pane fade" id="battleship">
		함선 항공관리소
    </div>
    <!-- 함선 항공관리소 DIV 닫기 -->
    
    </div>

<!-- 마이탭컨텐츠 닫기 -->
    </div>
    <!-- 가운데 기지관리 닫기 -->

	<div class="col-md-2"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->
	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>