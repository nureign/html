<?
	/*
		mybase.php (기지관리)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	//include_once "./common/db_conn.php";
	//include_once "./logic/mybase_initial.php";
?>

<!-- 윗 상단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 가운데 기지관리 시작 -->
	<div class="col-xs-10">

<!-- 앞에 설명부분 시작 -->
<div class="panel panel-primary width">
	<div class="panel-heading">
    	기지관리
    </div>
	<div class="panel-body">
		<table class="table" align="center" width="650px">
        	<tr>
            	<td width="350px">
                    <!-- 행성사진 시작 -->
                    <img src="./images/base10.jpg" alt="..." width="350px">
                    <!-- 행성사진 종료 -->
                </td>
                <td>
                <h4 align="center">기지관리입니다.</h4>
				정결하고 깨끗한 나의 기지의 모습을 보고 있자니 흐뭇해져서 미소가 나옵니다.<br /><br />
				이내 미소를 감추고 자신의 본분에 맞게 업무를 진행하도록 마음먹었습니다.<br />
                </td>
            </tr>
        </table>
	</div>
</div>
<!-- 앞에 설명부분 닫기 -->

<!-- 메뉴부분 시작 -->
<div class="bs-example bs-example-tabs width" align="center">
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
<div id="myTabContent" class="tab-content width">
	<!-- 기지방호시스템 설정 열기 -->
	<div class="tab-pane fade in active" id="baseSecurity">

	<table class="table table-hover">
		 <h3>기지방호시스템 설정</h3>
         <tr align="center">
         	<td class="success"><strong>방어시스템1</strong></td>
            <td id="def1"><?=$_SESSION['myinfo']['defense1']?></td>
            <td class="success"><strong>방어시스템2</strong></td>
            <td id="def2"><?=$_SESSION['myinfo']['defense2']?></td>
         </tr>
         <tr align="center">
         	<td class="success"><strong>방어시스템3</strong></td>
            <td id="def3"><?=$_SESSION['myinfo']['defense3']?></td>
            <td class="success"><strong>방어시스템4</strong></td>
            <td id="def4"><?=$_SESSION['myinfo']['defense4']?></td>
         </tr>
	</table>

	<form class="form-horizontal" role="form" method="post" action="#미정">
	<table class="table table-bordered">
    	<tr align="center">
        	<td>
                <div class="form-group">
                    방어시스템1 변경 :
            </td>
            <td>
				<select class="form-control" id="changedef1">
					<option id="0">무방비</option>
					<?
					for($i=0; $i<count($_SESSION['inventory']); $i++)
					{
						if( $_SESSION['inventory'][$i]['table_name'] == 'base_item'  )
						{
							echo '<option id="'.$_SESSION['inventory'][$i]['info']['no'].'">'.$_SESSION['inventory'][$i]['info']['name'].' ('.$_SESSION['inventory'][$i]['info']['type'].')</option>';
						}
					}
					?>
				</select>
                </div>
            </td>
            <td>
				<div class="form-group">
                    방어시스템2 변경 : 
            </td>
            <td>
				<select class="form-control" id="changedef2" disabled>
					<option id="0">무방비</option>
					<?
					for($i=0; $i<count($_SESSION['inventory']); $i++)
					{
						if( $_SESSION['inventory'][$i]['table_name'] == 'base_item'  )
						{
							echo '<option id="'.$_SESSION['inventory'][$i]['info']['no'].'">'.$_SESSION['inventory'][$i]['info']['name'].' ('.$_SESSION['inventory'][$i]['info']['type'].')</option>';
						}
					}
					?>
				</select>
                </div>
            </td>
         </tr>
         <tr align="center">
         	<td>
                <div class="form-group">
                    방어시스템3 변경 : 
            </td>
            <td>
				<select class="form-control" id="changedef3" disabled>
                    <option id="0">무방비</option>
                    <?
					for($i=0; $i<count($_SESSION['inventory']); $i++)
					{
						if( $_SESSION['inventory'][$i]['table_name'] == 'base_item'  )
						{
							echo '<option id="'.$_SESSION['inventory'][$i]['info']['no'].'">'.$_SESSION['inventory'][$i]['info']['name'].' ('.$_SESSION['inventory'][$i]['info']['type'].')</option>';
						}
					}
					?>
				</select>
                </div>
            </td>
            <td>
                <div class="form-group">
                    방어시스템4 변경 : 
            </td>
            <td>
				<select class="form-control" id="changedef4" disabled>
					<option id="0">무방비</option>
					<?
					for($i=0; $i<count($_SESSION['inventory']); $i++)
					{
						if( $_SESSION['inventory'][$i]['table_name'] == 'base_item'  )
						{
							echo '<option id="'.$_SESSION['inventory'][$i]['info']['no'].'">'.$_SESSION['inventory'][$i]['info']['name'].' ('.$_SESSION['inventory'][$i]['info']['type'].')</option>';
						}
					}
					?>
				</select>
                </div>
            </td>
         </tr>
         <tr align="center">
         	<td colspan="4"><button type="button" class="btn btn-default" id="changedef">방호 시스템 변경</button></td>
         </tr>	
	</table>
	</form>

	</div>
    <!-- 기지방호시스템 설정 닫기 -->
    
	<!-- 군사시설 관리 시작 -->
	<div class="tab-pane fade width" id="commandbase">
		<table class="table width">
        	<tr>
            	<td colspan="2" align="center"><h5><strong>커맨드센터</strong></h5></td>
            </tr>
			<tr align="center">
            	<!-- 커맨드센터 부분 -->
				<td width="400px"><img src="./images/commandcenter_0.gif" alt="..." width="400"></td>
				<td>
                	<div class="panel panel-default">
					<div class="panel-body">
						커맨드센터는 지휘부로써 레벨이 올라가면 할 수 있는 역할도 커집니다.<br />
						업그레이드 하는데 많은 자원이 소모됩니다.
					</div>
					</div>
                    
					<table class="table table-condensed">
						<tr class="warning" align="center">
          					<td>레벨</td>
            				<td id="cc_level"><?=$_SESSION['base']['commandcenter']?></td>
          				</tr>
                    	<tr class="warning" align="center">
                            <td>건물 HP</td>
                            <td id="cc_hp"><?=$_SESSION['cc_hp'][$_SESSION['base']['commandcenter']]?></td>
                    	</tr>
						<tr class="info" align="center">
                            <td colspan="2">
                                <h6><font color="red">※다음 업그레이드에 필요한 자원은 <span id="cc_price"><?=$_SESSION['cc_price'][$_SESSION['base']['commandcenter']]?></span> 루비가 필요합니다.</font></h6>
                                <h6><font color="#FF6600">사용 가능한 시설 : 건물 HP +500 / 인사과 +2 / 레이다 +2 / 생활관 +0</font></h6>
                                <form class="form-inline" role="form" method="post" action="mybase_upgrade.php">
                                    <input type="hidden" id="cc_upgrade" value="" />
                                    <button type="button" class="btn btn-default" id="upgrade_cc">커맨드센터 업그레이드</button>
                                </form>
                            </td>
                        </tr>
                    </table>
				</td>
                <!-- 커맨드센터 닫기 -->
			</tr>
            
            
			<tr align="center">
            	<td colspan="2" align="center"><h5><strong>레이다 시설</strong></h5></td>
            </tr>
            <tr>
            	<!-- 레이다 시설 부분 -->
				<td width="400px"><img src="./images/radar_0.gif" alt="..." width="400"></td>
				<td>
                	<div class="panel panel-default">
					<div class="panel-body">
						레이다 시설은 업그레이드시<br />적의 공격을 간파하고 회피할 수 있는 힘을 가집니다.
					</div>
					</div>
                    
					<table class="table table-condensed">
						<tr class="warning" align="center">
          					<td>레벨</td>
            				<td id="ra_level"><?=$_SESSION['base']['rader']?></td>
          				</tr>
                    	<tr class="warning" align="center">
                            <td>공격감지 확률</td>
                            <td id="ra_stat1"><?=$_SESSION['ra_stat'][$_SESSION['base']['rader']]?>%</td>
                    	</tr>
						<tr class="warning" align="center">
                            <td>회피율 확률</td>
                            <td id="ra_stat2"><?=$_SESSION['ra_stat'][$_SESSION['base']['rader']]?>%</td>
                    	</tr>
						<tr class="info" align="center">
                            <td colspan="2">
                                <h6><font color="red"><span id="ra_warn"></span></font></h6>
                                <h6><font color="#FF6600">공격 감지 및 회피율 확률 증가 : <span id="ra_stat1_next"><?=$_SESSION['ra_stat'][$_SESSION['base']['rader']+1]?></span>% / <span id="ra_stat2_next"><?=$_SESSION['ra_stat'][$_SESSION['base']['rader']+1]?></span>%</font></h6>
                                <form class="form-inline" role="form" method="post" action="mybase_upgrade.php">
                                    <input type="hidden" id="radar_upgrade" value="" />
                                    <button type="button" class="btn btn-default" disabled="disabled" id="upgrade_ra">레이다 업그레이드</button>
                                </form>
                            </td>
                        </tr>
					</table>
				</td>
                <!-- 레이다 시설 부분 닫기 -->
			</tr>
            
            
			<tr align="center">
            	<td colspan="2" align="center"><h5><strong>인사과</strong></h5></td>
            </tr>
            <tr>
            	<!-- 인사과 부분 -->
				<td width="400px"><img src="./images/humanresources_0.gif" alt="..." width="400"></td>
				<td>
                	<div class="panel panel-default">
					<div class="panel-body">
						인사과에서는 유닛을 생산하고 배치시키는 장소입니다.<br />
						업그레이드시 새로운 유닛을 생산할 수 있습니다.
					</div>
					</div>
                    
					<table class="table table-condensed">
						<tr class="warning" align="center">
          					<td>레벨</td>
            				<td id="de_level"><?=$_SESSION['base']['department']?></td>
          				</tr>
						<tr class="info" align="center">
                            <td colspan="2">
                                <h6><font color="red"><span id="de_warn"></span></font></h6>
                                <h6><font color="#FF6600">사용 가능한 유닛 : 저격수</font></h6>
                                <form class="form-inline" role="form" method="post" action="mybase_upgrade.php">
                                    <input type="hidden" id="hr_upgrade" value="" />
                                    <button type="button" class="btn btn-default" disabled="disabled" id="upgrade_de">인사과 업그레이드</button>
                                </form>
                            </td>
                        </tr>
                        <tr class="" align="center">
                        	<td colspan="2">
                            	<!-- 유닛배치버튼 -->
                                <br />
                                <a href="#unit_one" class="open-popup-link">
                                <button type="button" class="btn btn-default">
                                  <span class="glyphicon glyphicon-user"></span> 지상유닛배치
                                </button>
                                </a>
                                
                                <a href="#unit_two" class="open-popup-link">
                                <button type="button" class="btn btn-default">
                                  <span class="glyphicon glyphicon-road"></span> 기계유닛배치
                                </button>
                                </a>
                                
                                <a href="#unit_three" class="open-popup-link">
                                <button type="button" class="btn btn-default">
                                  <span class="glyphicon glyphicon-plane"></span> 공중유닛배치
                                </button>
                                </a>
                                <!-- 유닛배치버튼 닫기 -->
                                
                                <!-- 생산버튼에 따른 DIV 출력 -->
                                <!-- 지상유닛 -->
                                <div id="unit_one" class="white-popup mfp-hide">
                                    <table class="table table-condensed" width="1000px">
                                    	<tr class="center">
                                        	<td colspan="14" class="info center">
                                            <h4><strong><span class="glyphicon glyphicon-user"></span> 지상유닛 배치</strong></h4></td>
                                        </tr>
                                        <tr class="center">
                                        	<td colspan="14" class="center">
                                            <div class="alert alert-success" role="alert"><strong>현재소지자원</strong> 티타늄 : 1230 / 팔라듐 : 200</div>
                                            </td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_g_unit1.gif" alt="일반병사" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>일반병사(LV 1)</td>
                                            <td>10</td>
                                            <td>5</td>
                                            <td>없음</td>
                                            <td>1</td>
                                            <td>티타늄 10</td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_g_unit2.gif" alt="저격병" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>저격병(LV 1)</td>
                                            <td>15</td>
                                            <td>20</td>
                                            <td>방공시스템</td>
                                            <td>2</td>
                                            <td>티타늄 30</td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_g_unit3.gif" alt="패스루트" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>패스루트(LV 1)</td>
                                            <td>50</td>
                                            <td>100</td>
                                            <td>방어벽</td>
                                            <td>1</td>
                                            <td>티타늄 20</td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_g_unit4.gif" alt="암살자" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>암살자(LV 1)</td>
                                            <td>80</td>
                                            <td>500</td>
                                            <td>기지커맨더</td>
                                            <td>1</td>
                                            <td>티타늄 1000</td>
										</tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_g_unit5.gif" alt="화염방사병" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>화염방사병(LV 1)</td>
                                            <td>100</td>
                                            <td>50</td>
                                            <td>공격시스템</td>
                                            <td>2</td>
                                            <td>티타늄 110<br />팔라듐 5</td>
                                        </tr>
                                    </table>
								</div>
                                <!-- 지상유닛 닫기 -->
                                <!-- 기계유닛 -->
                                <div id="unit_two" class="white-popup mfp-hide">
                                    <table class="table table-condensed" width="1000px">
                                    	<tr class="center">
                                        	<td colspan="14" class="center" style="background-color:#EDDEFA">
                                            <h4><strong><span class="glyphicon glyphicon-road"></span> 기계유닛 배치</strong></h4></td>
                                        </tr>
                                        <tr class="center">
                                        	<td colspan="14" class="center">
                                            <div class="alert alert-success" role="alert"><strong>현재소지자원</strong> 티타늄 : 1230 / 팔라듐 : 200</div>
                                            </td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_m_unit1.gif" alt="이온탱크" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>이온탱크(Lv 1)</td>
                                            <td>100</td>
                                            <td>30</td>
                                            <td>없음</td>
                                            <td>2</td>
                                            <td>티타늄 300<br />팔라듐 10</td>
                                        </tr>
										<tr class="center">
                                            <td rowspan="2"><img src="./images/base_m_unit2.gif" alt="정찰바이크" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
										<tr class="center">
                                            <td>정찰바이크(LV 1)</td>
                                            <td>100</td>
                                            <td>5</td>
                                            <td>없음</td>
                                            <td>2</td>
                                            <td>티타늄 300<br />팔라듐 10</td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_m_unit3.gif" alt="톱날로봇" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>톱날로봇(LV 1)</td>
                                            <td>100</td>
                                            <td>50</td>
                                            <td>방어벽</td>
                                            <td>5</td>
                                            <td>티타늄 50<br />팔라듐 80</td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_m_unit4.gif" alt="자폭로봇" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>자폭로봇(LV 1)</td>
                                            <td>10</td>
                                            <td>1000</td>
                                            <td>없음</td>
                                            <td>10</td>
                                            <td>티타늄 5<br />팔라듐 500</td></td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_m_unit5.gif" alt="팔라딘" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>팔라딘(LV 1)</td>
                                            <td>2000</td>
                                            <td>10</td>
                                            <td>공격시스템</td>
                                            <td>1</td>
                                            <td>티타늄 1000<br />팔라듐 300</td>
                                        </tr>
                                    </table>
								</div>
                                <!-- 기계유닛 닫기 -->
                                <!-- 공중유닛 -->
                                <div id="unit_three" class="white-popup mfp-hide">
                                    <table class="table table-condensed" width="1000px">
                                    	<tr class="center">
                                        	<td colspan="14" class="danger center">
                                            <h4><strong><span class="glyphicon glyphicon-plane"></span> 공중유닛 배치</strong></h4></td>
                                        </tr>
                                        <tr class="center">
                                        	<td colspan="14" class="center">
                                            <div class="alert alert-success" role="alert"><strong>현재소지자원</strong> 티타늄 : 1230 / 팔라듐 : 200</div>
                                            </td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_p_unit1.gif" alt="종이비행기" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>종이비행기(LV 1)</td>
                                            <td>10</td>
                                            <td>5</td>
                                            <td>없음</td>
                                            <td>2</td>
                                            <td>티타늄 20</td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_p_unit2.gif" alt="하이퍼플락기" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>하이퍼플락기(LV 1)</td>
                                            <td>30</td>
                                            <td>20</td>
                                            <td>방어시스템</td>
                                            <td>2</td>
                                            <td>티타늄 50</td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_p_unit3.gif" alt="미정" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>미정(LV 1)</td>
                                            <td>100</td>
                                            <td>100</td>
                                            <td>미정</td>
                                            <td>3</td>
                                            <td>티타늄 200<br />팔라듐 30</td>
                                        </tr>
                                        <tr class="center">
                                            <td rowspan="2"><img src="./images/base_p_unit4.gif" alt="EMP 통제함" width="80"></td>
                                            <td class="warning">이름</td>
                                            <td class="warning">체력</td>
                                            <td class="warning">공격력</td>
                                            <td class="warning">추가공격</td>
                                            <td class="warning">인구수</td>
                                            <td class="warning">배치비용</td>
                                        </tr>
                                        <tr class="center">
                                            <td>EMP 통제함(LV 1)</td>
                                            <td>500</td>
                                            <td>0</td>
                                            <td>모든시스템</td>
                                            <td>10</td>
                                            <td>티타늄 500<br />팔라듐 500</td>
                                        </tr>
                                    </table>
								</div>
                                <!-- 공중유닛 닫기 -->
                            </td>
                        </tr>
					</table>
				</td>
                <!-- 인사과 닫기 -->
			</tr>
            
            
			<tr align="center">
            	<td colspan="2" align="center"><h5><strong>생활관</strong></h5></td>
            </tr>
            <tr>
            	<!-- 생활관 시설 부분 -->
				<td width="400px"><img src="./images/barracks_0.gif" alt="..." width="400"></td>
				<td>
                	<div class="panel panel-default">
					<div class="panel-body">
						생활관은 생산한 병력과 장비들이 집합해 있는 집결지입니다.<br />레벨이 올라가면 최대허용공간이 늘어나게 됩니다.
					</div>
					</div>
                    
					<table class="table table-condensed">
                        <tr class="warning" align="center">
                            <td>레벨</td>
                            <td id="do_level"><?=$_SESSION['base']['dorm']?></td>
                        </tr>
                        <tr class="warning" align="center">
                            <td>공간 사용수치</td>
                            <td id="do_stat">0 / <?=$_SESSION['do_stat'][$_SESSION['base']['dorm']]?></td>
                        </tr>
						<tr class="info" align="center">
                            <td colspan="2">
								<h6><font color="red"><span id="do_warn"></span></font></h6>
                                <h6><font color="#FF6600">최대 유닛 수치 증가 : <span id="do_stat_next"><?=$_SESSION['do_stat'][$_SESSION['base']['dorm']+1]?></span></font></h6>
                                <form class="form-inline" role="form">
                                    <input type="hidden" id="email" value="" />
                                    <button type="button" class="btn btn-default" disabled="disabled" id="upgrade_do">생활관 업그레이드</button>
                                </form>
                            </td>
                        </tr>
					</table>
				</td>
            </tr>
			<tr align="center">
            	<td colspan="2">
                    <table class="table table-condensed" width="500px">
                    	<tr class="warning center">
                        	<td colspan="6">배치된 유닛 현황</td>
                        </tr>
                    	<tr class="center">
                        	<td>일반병사(Lv 3)</td>
                            <td>이온탱크(Lv 1)</td>
							<td>이온탱크(Lv 1)</td>
							<td>이온탱크(Lv 1)</td>
                            <td>이온탱크(Lv 1)</td>
                            <td>종이비행기(Lv 2)</td>
                        </tr>
                        <tr class="center"> <!-- 배치한 유닛이 있어야만 이미지가 뜨고 없으면 빈칸으로 표시 -->
                        	<td><img src="./images/barracks_0.gif" alt="..." width="90" height="90"></td>
                            <td><img src="./images/barracks_0.gif" alt="..." width="90" height="90"></td>
                            <td><img src="./images/barracks_0.gif" alt="..." width="90" height="90"></td>
                            <td><img src="./images/barracks_0.gif" alt="..." width="90" height="90"></td>
                            <td><img src="./images/barracks_0.gif" alt="..." width="90" height="90"></td>
                            <td><img src="./images/barracks_0.gif" alt="..." width="90" height="90"></td>
						</tr>
                        <tr class="center"> <!-- 배치한 유닛이 있어야만 이미지가 뜨고 없으면 빈칸으로 표시 -->
                        	<td>배치된 유닛수 : 5</td>
                            <td>배치된 유닛수 : 1</td>
                            <td>배치된 유닛수 : 1</td>
                            <td>배치된 유닛수 : 1</td>
                            <td>배치된 유닛수 : 1</td>
                            <td>배치된 유닛수 : 3</td>
						</tr>
					</table>
                </td>
				<!-- 생활관 시설 부분 닫기 -->
            </tr>
            
        </table>

	</div>
	<!-- 군사시설 관리 닫기 -->
    
    <!-- 행성자원 관리 시작 -->
	<div class="tab-pane fade" id="resources">
		<h3>행성자원 관리</h3>
        <table class="table width center">
        	<tr>
            	<td>형태</td>
                <td>타입</td>
                <td>이름</td>
                <td>수집레벨</td>
                <td>수집량(시간당)</td>
                <td>저장된자원</td>
                <td>업그레이드</td>
             </tr>
             <tr>
             	<td><img src="./images/resource_chul.gif" alt="철" width="50"></td>
                <td>일반자원</td>
                <td>철</td>
                <td><?=$_SESSION['resource']['metal']?></td>
                <td><?=$_SESSION['resource']['metal']*$_SESSION['res_model']['metal']?></td>
                <td><?=$_SESSION['myinfo']['metal']?></td>
                <td><Form role="form"><input type='hidden' id='res' value='chul'>
					<button type='submit' class='btn btn-default'>+50 루비</button></Form></td>
             </tr>
             <tr>
             	<td><img src="./images/resource_guri.gif" alt="구리" width="50"></td>
                <td>일반자원</td>
                <td>구리</td>
                <td><?=$_SESSION['resource']['copper']?></td>
                <td><?=$_SESSION['resource']['copper']*$_SESSION['res_model']['copper']?></td>
                <td><?=$_SESSION['myinfo']['copper']?></td>
                <td><Form role="form"><input type='hidden' id='res' value='guri'>
					<button type='submit' class='btn btn-default'>+50 루비</button></Form></td>
             </tr>
             <tr>
             	<td><img src="./images/resource_jusuk.gif" alt="주석" width="50"></td>
                <td>일반자원</td>
                <td>주석</td>
                <td><?=$_SESSION['resource']['sin']?></td>
                <td><?=$_SESSION['resource']['sin']*$_SESSION['res_model']['sin']?></td>
                <td><?=$_SESSION['myinfo']['sin']?></td>
                <td><Form role="form"><input type='hidden' id='res' value='jusuk'>
					<button type='submit' class='btn btn-default'>+50 루비</button></Form></td>
             </tr>
             <tr>
             	<td><img src="./images/resource_nap.gif" alt="납" width="50"></td>
                <td>일반자원</td>
                <td>납</td>
                <td><?=$_SESSION['resource']['lead']?></td>
                <td><?=$_SESSION['resource']['lead']*$_SESSION['res_model']['lead']?></td>
                <td><?=$_SESSION['myinfo']['lead']?></td>
                <td><Form role="form"><input type='hidden' id='res' value='nap'>
			   <button type='submit' class='btn btn-default'>+50 루비</button></Form></td>
             </tr>
             <tr>
             	<td><img src="./images/resource_uranium.gif" alt="우라늄" width="50"></td>
                <td>일반자원</td>
                <td>우라늄</td>
                <td><?=$_SESSION['resource']['uranium']?></td>
                <td><?=$_SESSION['resource']['uranium']*$_SESSION['res_model']['uranium']?></td>
                <td><?=$_SESSION['myinfo']['uranium']?></td>
                <td><Form role="form"><input type='hidden' id='res' value='uranium'>
					<button type='submit' class='btn btn-default'>+100 루비</button></Form></td>
             </tr>
             <tr class="warning">
             	<td><img src="./images/resource_titanium.gif" alt="티타늄" width="50"></td>
                <td>가치자원-일반</td>
                <td>티타늄</td>
                <td><?=$_SESSION['resource']['titanium']?></td>
                <td><?=$_SESSION['resource']['titanium']*$_SESSION['res_model']['titanium']?></td>
                <td><?=$_SESSION['myinfo']['titanium']?></td>
                <td><Form role="form"><input type='hidden' id='res' value='titanium'>
					<button type='submit' class='btn btn-default'>+500 루비</button></Form></td>
             </tr>
             <tr class="danger">
             	<td><img src="./images/resource_palladium.gif" alt="팔라듐" width="50"></td>
                <td>가치자원-고급</td>
                <td>팔라듐</td>
                <td><?=$_SESSION['resource']['palladium']?></td>
                <td><?=$_SESSION['resource']['palladium']*$_SESSION['res_model']['palladium']?></td>
                <td><?=$_SESSION['myinfo']['palladium']?></td>
                <td><Form role="form"><input type='hidden' id='res' value='palladium'>
					<button type='submit' class='btn btn-default'>+1000 루비</button></Form></td>
             </tr>
         </table>
	</div>
    <!-- 행성자원 관리 닫기 -->

    <!-- 기지 연구소 시작 -->
	<div class="tab-pane fade" id="research">
		<h3>기지 연구소</h3>
        <div class="well well-sm">유닛 연구</div>
        <table class="table">
         <tr class="info" align="center">
            <td>유닛형태</td>
			<td>유닛타입</td>
         	<td>유닛이름</td>
            <td>레벨</td>
            <td>추가공격</td>
            <td>공격력</td>
            <td>업그레이드 금액</td>
			<td>업그레이드</td>
         </tr>
         <tr align="center">
         	<td><img src="./images/mine_p0.gif" alt="..." width="50" height="50"></td>
         	<td>공중타입</td>
            <td>종이비행기</td>
            <td>Lv 2</td>
            <td>적 공중</td>
            <td>30(+5)</td>
            <td>800 티타늄</td>
            <td>
            <Form class="form-inline" role="form">
				<input type="hidden" id="unit_no" value="" />
				<button type="submit" class="btn btn-default">업그레이드</button>
            </Form>
            </td>
         </tr>
         <tr align="center"><!-- 하나도 보여보려고 테스트용 -->
         	<td><img src="./images/mine_p0.gif" alt="..." width="50" height="50"></td>
         	<td>공중타입</td>
            <td>종이비행기</td>
            <td>Lv 2</td>
            <td>적 공중</td>
            <td>30(+5)</td>
            <td>800 티타늄</td>
            <td>
            <Form class="form-inline" role="form">
				<input type="hidden" id="unit_no" value="" />
				<button type="submit" class="btn btn-default">업그레이드</button>
            </Form>
            </td>
         </tr><!-- 테스트용 종료 -->
        </table>
	</div>
    <!-- 기지 연구소 닫기 -->
    
    <!-- 함선 항공관리소 시작 -->
	<div class="tab-pane fade" id="battleship">
		<h3>함선 항공관리소</h3>
        <div class="well well-sm">모에모에님의 함선 제원</div>
      <table class="table">
          <tr>
            <td rowspan="5"><img src="./images/spaceship_0.gif" alt="..." width="400" height="230" data-src="holder.js/90x90"></td>
            <td class="info">이름</td>
            <td>RX-2</td>
            <td class="info">등급</td>
            <td>기본함선</td>
          </tr>
          <tr>
            <td class="info">워프기술력</td>
            <td>1등급</td>
            <td class="info">최대속도</td>
            <td>50</td>
          </tr>
          <tr>
            <td class="info">회피율</td>
            <td>10%</td>
            <td class="info">항법장치</td>
            <td>구식NV-6</td>
          </tr>
          <tr>
            <td class="info">공격무기</td>
            <td>120mm 발칸포</td>
            <td class="info">방어장갑</td>
            <td>기본장갑</td>
          </tr>
          <tr>
            <td class="info">특수능력</td>
            <td>없음</td>
            <td class="info">-</td>
            <td>-</td>
          </tr>
        </table>
	</div>
    <!-- 함선 항공관리소 닫기 -->

</div>
<!-- 마이탭컨텐츠 닫기 -->

	</div>
    <!-- 가운데 기지관리 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>
    
  <!-- Magnific Popup for Mybase -->
  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
  <script src='http://dimsemenov-static.s3.amazonaws.com/dist/jquery.magnific-popup.min.js'></script>
  <script src="./js/popup.js"></script>
  <script src="js/mybase.js"></script>
  
  </body>
</html>