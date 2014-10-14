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

<!-- 앞에 설명부분 시작 -->
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
<!-- 앞에 설명부분 닫기 -->

<!-- 메뉴부분 시작 -->
<div class="bs-example bs-example-tabs" align="center">
	<ul id="myTab" class="nav nav-pills" role="tab">
      <li class="active"><a href="#baseSecurity" role="tab" data-toggle="tab">기지방호시스템 설정</a></li>
      <li><a href="#commandbase" role="tab" data-toggle="tab">군사시설 관리</a></li>
      <li><a href="#resources" role="tab" data-toggle="tab">행성자원 관리</a></li>
      <li><a href="#research" role="tab" data-toggle="tab">기지 연구소</a></li>
      <li><a href="#battleship" role="tab" data-toggle="tab">함선 항공관리소</a></li>
    </ul>
</div>
<!-- 메뉴부분 닫기 -->

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
    
	<!-- 군사시설 관리 시작 -->
	<div class="tab-pane fade" id="commandbase">
		<h3>군사시설 관리</h3>

		<table class="table">
			<tr align="center">
          		<td>
            	<!-- 이중 테이블 왼쪽 커맨드센터 시작 -->
            	<table class="table">
                	<tr align="center">
						<td colspan="2"><h4>커맨드센터</h4><img src="./images/commandcenter_0.gif" alt="..." width="400" height="300"></td>
          			</tr>
          			<tr align="left">
						<td colspan="2"><h5>커맨드센터는 지휘부로써 레벨이 올라가면 할 수 있는 역할도 커집니다.
                        					업그레이드 하는데 많은 자원이 소모됩니다.</h5></td>
          			</tr>
          			<tr class="warning" align="center">
          				<td>레벨</td>
            			<td>1</td>
          			</tr>
                    <tr class="warning" align="center">
                        <td>건물 HP</td>
                        <td>3000</td>
                    </tr>
                    <tr class="info" align="center">
                        <td colspan="2">
                            <h6><font color="red">※다음 업그레이드에 필요한 자원은 미네랄 500이 필요합니다.</font></h6>
                            <h6><font color="#FF6600">사용 가능한 시설 : 건물 HP +500 / 인사과 +2 / 레이다 +2 / 생활관 +0</font></h6>
                            <form class="form-inline" role="form">
                                <input type="hidden" id="email" value="" />
                                <button type="submit" class="btn btn-default">커맨드센터 업그레이드</button>
                            </form>
                        </td>
                    </tr>
				</table>
                <!-- 이중 테이블 왼쪽 커맨드센터 종료 -->
                </td>
                <td>
            	<!-- 이중 테이블 오른쪽 레이다 시작 -->
            	<table class="table">
                	<tr align="center">
						<td colspan="2"><h4>레이다 시설</h4><img src="./images/radar_0.gif" alt="..." width="400" height="300"></td>
          			</tr>
          			<tr align="left">
						<td colspan="2">레이다 시설은 업그레이드시 적의 공격을 간파하고 회피할 수 있는 힘을 가집니다.</td>
          			</tr>
          			<tr class="warning" align="center">
          				<td>레벨</td>
            			<td>1</td>
          			</tr>
                    <tr class="warning" align="center">
                        <td>공격감지 확률</td>
                        <td>0%</td>
                    </tr>
                    <tr class="warning" align="center">
                    	<td>회피율 확률</td>
                        <td>0%</td>
                    </tr>
                    <tr class="info" align="center">
                        <td colspan="2">
							<h6><font color="red">※커맨드센터 레벨이 2가 되어야 합니다.</font></h6>
                            <h6><font color="#FF6600">공격 감지 및 회피율 확률 증가 : 1% / 1%</font></h6>
                            <form class="form-inline" role="form">
                                <input type="hidden" id="email" value="" />
                                <button type="submit" class="btn btn-default" disabled="disabled">레이다 업그레이드</button>
                            </form>
                        </td> 
                    </tr>
				</table>
                <!-- 이중 테이블 오른쪽 레이다 종료 -->
                </td>
            </tr>
        </table>
        
        
		<table class="table">
			<tr align="center">
          		<td>
            	<!-- 이중 테이블 왼쪽 인사과 시작 -->
            	<table class="table">
                	<tr align="center">
						<td colspan="4"><h4>인사과 병력배치</h4><img src="./images/humanresources_0.gif" alt="..." width="400" height="300"></td>
          			</tr>
          			<tr align="left">
						<td colspan="4"><h5>인사과에서는 유닛을 생산하고 배치시키는 장소입니다.
                        					업그레이드시 새로운 유닛을 생산할 수 있습니다.</h5></td>
          			</tr>
          			<tr class="warning" align="center">
          				<td colspan="2">레벨</td>
            			<td colspan="2">1</td>
          			</tr>
                    <tr class="info" align="center">
                        <td colspan="4">
                            <h6><font color="red">※커맨드센터 레벨이 2가 되어야 합니다.</font></h6>
                            <h6><font color="#FF6600">사용 가능한 유닛 : 저격수</font></h6>
                            <form class="form-inline" role="form">
                                <input type="hidden" id="email" value="" />
                                <button type="submit" class="btn btn-default" disabled="disabled">인사과 업그레이드</button>
                            </form>
                        </td>
                    </tr>
                    <tr align="center">
                    	<td colspan="4">
                    	<label>유닛배치대기</label>
                        <!-- 상태바 시작 -->
						<div class="progress">
							<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">30%</div>
						</div>
                        <!-- 상태바 종료 -->
                        </td>
                    </tr>
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
							<Form role="form">
							<div class="form-group">
							<label for="normalunit">일반유닛</label>
							<select id="disabledSelect" class="form-control">
								<option>일반병사(Lv 3)</option>
							</select><br />
							<button type="submit" class="btn btn-primary">배치</button>
							</div>
							</Form>
						</td>
						<td>
							<Form role="form">
							<div class="form-group">
							<label for="machineunit">기계유닛</label>
							<select id="disabledSelect2" class="form-control">
								<option>이온탱크(Lv 1)</option>
								<option>정찰바이크(Lv 1)</option>
							</select><br />
							<button type="submit" class="btn btn-primary">배치</button>
							</div>
							</Form>
						</td>
						<td>
							<Form role="form">
							<div class="form-group">
							<label for="airunit">공중유닛</label>
							<select id="disabledSelect3" class="form-control">
								<option>종이비행기(Lv 2)</option>
								<option>하이퍼플락기(Lv 1)</option>
							</select><br />
							<button type="submit" class="btn btn-primary">배치</button>
							</div>
							</Form>
						</td>
						<td>
							<Form role="form">
							<fieldset disabled>
							<div class="form-group">
							<label for="specialunit">특수유닛</label>
							<select id="disabledSelect4" class="form-control">
								<option>곧 출시됩니다</option>
							</select><br />
							<button type="submit" class="btn btn-primary">배치</button>
							</div>
							</fieldset>
							</Form>
						</td>
                    </tr>
				</table>
                <!-- 이중 테이블 왼쪽 인사과 종료 -->
                </td>
                <td>
            	<!-- 이중 테이블 오른쪽 생활관 시작 -->
            	<table class="table">
                	<tr align="center">
						<td colspan="4"><h4>생활관</h4><img src="./images/barracks_0.gif" alt="..." width="400" height="300"></td>
          			</tr>
          			<tr align="left">
						<td colspan="4">생활관은 생산한 병력과 장비들이 집합해 있는 집결지입니다.<br />레벨이 올라가면 최대허용공간이 늘어나게 됩니다.</td>
          			</tr>
          			<tr class="warning" align="center">
          				<td colspan="2">레벨</td>
            			<td colspan="2">1</td>
          			</tr>
                    <tr class="warning" align="center">
                        <td colspan="2">공간 사용수치</td>
                        <td colspan="2">0/10</td>
                    </tr>
                    <tr class="info" align="center">
                        <td colspan="4">
							<h6><font color="red">※커맨드센터 레벨이 3이 되어야 합니다.</font></h6>
                            <h6><font color="#FF6600">최대 유닛 수치 증가 : +10</font></h6>
                            <form class="form-inline" role="form">
                                <input type="hidden" id="email" value="" />
                                <button type="submit" class="btn btn-default" disabled="disabled">생활관 업그레이드</button>
                            </form>
                        </td> 
                    </tr>
                    <tr align="center">
						<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
						<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
						<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
						<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
					</tr>
					<tr align="center">
						<td>유닛 이름 (1)</td>
						<td>유닛 이름 (1)</td>
						<td>유닛 이름 (1)</td>
						<td>유닛 이름 (1)</td>
					</tr>
                    <tr align="center">
						<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
						<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
						<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
						<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90" data-src="holder.js/90x90"></td>
					</tr>
					<tr align="center">
						<td>유닛 이름 (1)</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					</tr>
				</table>
                <!-- 이중 테이블 오른쪽 생활관 종료 -->
                </td>
            </tr>
        </table>
	</div>
	<!-- 군사시설 관리 닫기 -->
    
    <!-- 행성자원 관리 시작 -->
	<div class="tab-pane fade" id="resources">
		<h3>행성자원 관리</h3>
		<table class="table">
			<tr align="center" class="active">
          		<td><img src="./images/mine_t0.gif" alt="..." width="100" height="100"></td>
                <td><h4>일반자원 : 티타늄</h4></td>
                <td>티타늄 생산소 레벨</td>
                <td>1</td>
                <td>티타늄 시간당 수집량</td>
                <td>+100</td>
                <td><label>업그레이드</label><Form role="form"><input type='hidden' id='res' value='t'>
					<button type='submit' class='btn btn-default'>+100 루비</button></Form>
                </td>
			</tr>
            <tr align="center" class="danger">
          		<td><img src="./images/mine_p0.gif" alt="..." width="100" height="100"></td>
                <td><h4>고급자원 : 팔라듐</h4></td>
                <td>팔라듐 생산소 레벨</td>
                <td>1</td>
                <td>팔라듐 시간당 수집량</td>
                <td>+3</td>
                <td><label>업그레이드</label><Form role="form"><input type='hidden' id='res' value='p'>
					<button type='submit' class='btn btn-default'>+500 루비</button></Form>
                </td>
		</table>
	</div>
    <!-- 행성자원 관리 닫기 -->

    <!-- 기지 연구소 시작 -->
	<div class="tab-pane fade" id="research">
		기지 연구소는 차후 업데이트 될 예정입니다.
	</div>
    <!-- 기지 연구소 닫기 -->
    
    <!-- 함선 항공관리소 시작 -->
	<div class="tab-pane fade" id="battleship">
		함선 항공관리소는 차후 업데이트 예정입니다.
	</div>
    <!-- 함선 항공관리소 닫기 -->

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