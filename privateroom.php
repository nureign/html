<?
	/*
		privateRoom.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
	include_once "./logic/privateroom_initial.php";
?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 개인룸 시작 -->
	<div class="col-xs-10">

	<!-- 위에 표시 -->
    <div class="panel panel-success width">
		<div class="panel-heading">개인룸</div>
		<div class="panel-body">
        <table class="table width center">
        	<tr>
            	<td width="80px">
            	<td class="right" width="300px"><img src="./images/privateroom_assi.jpg" alt="..." width="250px" height="200px"></td>
                <td align="left">
                	<h4 align="center">개인룸 비서</h4><br />
					환영합니다! <?=$myinfo[0]['name']?>님! 저는 당신의 업무를 도와드리는 충실한 비서입니다. <br />
                    이곳에서 주인님이 보기 편하도록 종합현황 데이터를 제공하고 있습니다.<br />
                    이곳저곳에서 수집하고 계신 아이템 현황도 보기 쉽게 인벤토리에 넣어놓았습니다.<br />
                    구매를 하실 때 마다 제가 물건을 가질러 오지만 기쁜마음으로 일을 하고 있습니다.<br />
                    앞으로도 옆에서 많이 도와드리도록 하겠습니다.<br />
                    참! 스킬을 배울 수 있는 곳은 연구소라는 점! 이미 알고 계시죠? 흐흐..
                </td>
            </tr>
        </table>
		</div>
	</div>
    <!-- 위에 표시 닫기 -->

    <!-- 메뉴 -->
    <ul class="nav nav-pills nav-justified center" style="width: 800px;">
      <li class="active"><a href="#status_inven" role="tab" data-toggle="tab">종합 현황 / 인벤토리</a></li>
      <li><a href="#skills" role="tab" data-toggle="tab">스킬관리</a></li>
    </ul>
    <br />
    <!-- 메뉴 닫기 -->
    
<div id="myTabContent" class="tab-content width">
	<!-- 종합 현황 / 인벤토리 -->
	<div class="tab-pane fade in active width" id="status_inven">
    <div class="panel panel-default" style="width:1000px">
      <div class="panel-body">
      	<!-- 케릭터 소개말 추가 -->
		<table class="table table-condensed width center">
        	<tr style="background-color:#FEE;">
            	<td><strong>케릭터 소개말 바꾸기</strong></td>
            </tr>
            <tr>
				<td><br  />
                	<div class="form-group has-success">
                    <Form class="form-inline" role="form" method="post" action="javascript:;">
					<label class="control-label" for="inputSuccess1">소개말 상태 / 변경</label>&nbsp;
                	<textarea class="form-control" rows="2" style="width:500px;" id="intro"><?=$myinfo[0]['intro']?></textarea>
                    &nbsp;<button type="submit" class="btn btn-default" id="changeintro">소개말 변경</button>
                    </Form>
                    </div>
                </td>
            </tr>
         </table>
        <!-- 케릭터 소개말 닫기 -->
      	<!-- 종합스텟 -->
        <table class="table table-condensed width center">
        	<tr class="info">
            	<td colspan="6"><strong>종합스텟</strong></td>
            </tr>
            <tr>
            	<td class="warning">체력보너스</td>
                <td>+0</td>
                <td class="warning">멘탈보너스</td>
                <td>+0</td>
                <td class="warning">경험치보너스</td>
                <td>+0</td>
            </tr>
            <tr>
            	<td class="warning">공격력</td>
                <td><?=$myinfo[0]['low_power']?> ~ <?=$myinfo[0]['max_power']?></td>
                <td class="warning">방어력</td>
                <td><?=$myinfo[0]['defense']?></td>
                <td class="warning">성향보정치</td>
                <td>무기성애자</td>
            </tr>
            <tr>
            	<td class="warning">근력</td>
                <td><?=$myinfo[0]['stat1']?> (+0)</td>
                <td class="warning">민첩</td>
                <td><?=$myinfo[0]['stat2']?> (+0)</td>
                <td class="warning">지력</td>
                <td><?=$myinfo[0]['stat3']?> (+0)</td>
            </tr>
            <tr>
            	<td class="warning">예지력</td>
                <td><?=$myinfo[0]['stat4']?> (+0)</td>
                <td class="warning">행운</td>
                <td><?=$myinfo[0]['stat5']?> (+0)</td>
                <td class="warning">매력</td>
                <td><?=$myinfo[0]['stat6']?> (+0)</td>
            </tr>
         </table>
        <!-- 종합스텟 닫기 -->
        <!-- 종합 아이템 현황 --> 
		<table class="table table-condensed width center">
        	<tr>
            	<td colspan="8" class="success"><strong>종합 아이템 현황</strong></td>
            </tr>
            <tr>
            	<td class="warning" width="40px">왼손</td>
                <td width="60px" id="lefthand"><?=$myinfo[0]['lefthand']?></td>
                <td class="warning" width="40px">오른손</td>
                <td width="60px" id="righthand"><?=$myinfo[0]['righthand']?></td>
                <td class="warning" width="40px">상의</td>
                <td width="60px" id="top"><?=$myinfo[0]['top']?></td>
                <td class="warning" width="40px">하의</td>
                <td width="60px" id="pants"><?=$myinfo[0]['pants']?></td>
            </tr>
            <tr>
            	<td class="warning" width="40px">신발</td>
                <td width="60px" id="shoes"><?=$myinfo[0]['shoes']?></td>
                <td class="warning" width="40px">악세사리</td>
                <td width="60px" id="accessory"><?=$myinfo[0]['accessory']?></td>
                <td style="background-color:#EAFEBA" width="40px">특수아이템1</td>
                <td width="60px"><strong>의문의 넥클레스</strong></td>
                <td style="background-color:#EAFEBA" width="40px">특수아이템2</td>
                <td width="60px"><strong>없음</strong></td>
            </tr>
            <tr>
            	<td colspan="8">
				<Form class="form-inline" role="form" method="post" action="#">
					<select class="form-control">
                        <option>왼손</option>
                        <option>오른손</option>
                        <option>상의</option>
                        <option>하의</option>
                        <option>신발</option>
                        <option>악세사리</option>
                        <option>특수아이템1</option>
                        <option>특수아이템2</option>
                    </select>
					<select class="form-control">
                        <option>가지고 있는 아이템 표시</option>
                        <option>무기종류면 무기만 아니면 방어구 이런식</option>
                    </select>
					<input type="hidden" id="id" value="" />
					<button type="submit" class="btn btn-default">아이템 장착 변경</button>
				</Form>
                </td>
            </tr>
        </table>
        <!-- 종합 아이템 현황 닫기 -->
        <!-- 인벤토리 --> <!-- 그로서리(편의점), 케릭터 아이템, 베이스 아이템 -->
        
          <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#grocery" role="tab" data-toggle="tab">편의점 아이템</a></li>
              <li><a href="#character" role="tab" data-toggle="tab">케릭터시장 아이템</a></li>
              <li><a href="#base" role="tab" data-toggle="tab">베이스시장 아이템</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="grocery">
                <table class="table table-condensed width center">
                    <tr>
                        <td colspan="8" style="background-color:#FFCCA2"><strong>인벤토리</strong></td>
                    </tr>
                    <tr>
                        <td class="warning">이름</td>
                        <td class="warning">설명</td>
                        <td class="warning">사용레벨</td>
						<td class="warning">소지개수</td>
                    </tr>
					<?
					for( $i=0; $i<count($inventory); $i++ )
					{
						if( $inventory[$i]['table_name'] != 'grocery_item' )
							continue;
						
						echo '<tr><td>' . $inventory[$i][0]['name'] . '</td>
							  <td>' . $inventory[$i][0]['explain'] . '</td>
							  <td>' . $inventory[$i][0]['level'] . '</td>
							  <td>' . $inventory[$i]['num'] . '</td></tr>';
					}
					?>
            	</table>
               </div>
               <div class="tab-pane fade" id="character">
				<table class="table table-condensed width center">
                    <tr>
                        <td colspan="8" style="background-color:#FFCCA2"><strong>인벤토리</strong></td>
                    </tr>
                    <tr>
						<td class="warning">착용</td>
                        <td class="warning">이름</td>
                        <td class="warning">공격력</td>
                        <td class="warning">방어력</td>
                        <td class="warning">능력변화량</td>
                        <td class="warning">특수능력</td>
                        <td class="warning">소지개수</td>
                    </tr>
                    <?
						for( $i=0; $i<count($inventory); $i++ )
						{
							if( $inventory[$i]['table_name'] != 'character_item' )
								continue;
							
							echo '<tr><td>' . ($inventory[$i]['equip'] ? '착용중' : '') . '</td>
								  <td>' . $inventory[$i][0]['name'] . '</td>
								  <td>' . $inventory[$i][0]['low_power'] . ' ~ ' . $inventory[$i][0]['max_power'] . '</td>
								  <td>' . $inventory[$i][0]['defense'] . '</td>
								  <td>' . $inventory[$i][0]['stat1'] . ' / ' . $inventory[$i][0]['stat2'] . ' / ' . $inventory[$i][0]['stat3'] . ' / ' . $inventory[$i][0]['stat4'] . ' / ' . $inventory[$i][0]['stat5'] . ' / ' . $inventory[$i][0]['stat6'] . '</td>
								  <td>' . $inventory[$i][0]['special'] . '</td>
								  <td>' . $inventory[$i]['num'] . '</td></tr>';
						}
					?>
            	</table>
               </div>
               <div class="tab-pane fade" id="base">
                <table class="table table-condensed width center">
					<tr>
						<td colspan="8" style="background-color:#FFCCA2"><strong>인벤토리</strong></td>
					</tr>
					<tr>
						<td class="warning">이름</td>
						<td class="warning">타입</td>
						<td class="warning">공격력</td>
						<td class="warning">방어력</td>
						<td class="warning">내구력</td>
						<td class="warning">사용레벨</td>
					</tr>
					<?
						for( $i=0; $i<count($inventory); $i++ )
						{
							if( $inventory[$i]['table_name'] != 'base_item' )
								continue;
							
							echo '<tr><td>' . $inventory[$i][0]['name'] . '</td>
								  <td>' . $inventory[$i][0]['type'] . '</td>
								  <td>' . $inventory[$i][0]['low_power'] . ' ~ ' . $inventory[$i][0]['max_power'] . '</td>
								  <td>' . $inventory[$i][0]['min_defense'] . ' ~ ' . $inventory[$i][0]['max_defense'] . '</td>
								  <td>' . $inventory[$i][0]['durability'] . 'HP</td>
								  <td>' . $inventory[$i][0]['level'] . '</td></tr>';
						}
					?>
				</table>
               </div>
			</div>
          </div>
        
        <!-- 인벤토리 닫기 -->
		</div>
    </div>
    </div>
    <!-- 종합 현황 / 인벤토리 -->
    
    <!-- 스킬관리 시작 -->
	<div class="tab-pane fade width" id="skills">
    <div class="panel panel-default" style="width:1000px">
      <div class="panel-body">
        <table class="table table-condensed width center">
        	<tr style="background-color:#EED3FE">
            	<td colspan="8"><strong>스킬관리</strong></td>
            </tr>
            <tr class="warning">
            	<td width="80px">배치순서</td>
                <td width="80px">스킬타입</td>
                <td width="150px">이름</td>
    			<td width="100px">멘탈소모량</td>
                <td width="300px">스킬설명</td>
                <td width="100px">효과</td>
                <td width="100px">지정단축키</td>
                <td width="100px">지속시간</td>
            </tr>
            <tr>
            	<td>1</td>
                <td>버프</td>
                <td>노블레스의 가호</td>
    			<td>50</td>
                <td>헬레나 행성의 성스러운 여신 노블레스의 가호를 받을 수 있는 기술이다.</td>
                <td>체력 +20</td>
                <td>Q</td>
                <td>2턴동안 지속</td>
            </tr>
            <tr>
            	<td>2</td>
                <td>발동</td>
                <td>함선 화력지원</td>
    			<td>200</td>
                <td>함선의 강력한 화력지원을 받을 수 있다. 현재 함선 공격력의 1% 데미지를 입힌다.</td>
                <td>함선 공격력의 1%</td>
                <td>W</td>
                <td>즉시시전</td>
            </tr>
            <tr>
            	<td>3</td>
                <td>-</td>
                <td>스킬없음</td>
    			<td>-</td>
                <td>스킬없음</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr class="danger">
            	<td>특수</td>
                <td>발동</td>
                <td>전술핵 투하</td>
    			<td>1000</td>
                <td>[직업군]의 사령관만이 쓸 수 있는 궁극의 특수스킬이다. 이 핵을 맞게 된 적기지는 50% 이상의 건물이 파괴된다.</td>
                <td>기지의 50% 파괴</td>
                <td>4</td>
                <td>5초간 전술핵<br />유도시간 소요</td>
            </tr>
            <tr>
				<td colspan="8">
                	<div class="has-success"><br />
                        <Form class="form-inline" role="form" method="post" action="">
						<div class="radio">
                        <strong>스킬선택&nbsp;</strong>
						<label>
						<input type="radio" name="optionsRadios" id="normalskill1" value="option1" checked>
						노블레스의 가호
						</label>&nbsp;
                        <label>
						<input type="radio" name="optionsRadios" id="normalskill2" value="option1">
						함선 화력지원
						</label>
                        <label>&nbsp;
						<input type="radio" name="optionsRadios" id="normalskill3" value="option1">
						3번 스킬
						</label>
                        <label>&nbsp;
                        </div><br /><br />
                        배치순서&nbsp;
                        <select class="form-control" id="turn">
                        <option value="1">1번배치</option><option value="2">2번배치</option><option value="3">3번배치</option>
                        </select>
                        단축키 변경&nbsp;
                        <select class="form-control" id="shortcut">
                        <option value="1">1번키</option><option value="2">2번키</option><option value="3">3번키</option>
                        <option value="1">Q키</option><option value="2">W키</option><option value="3">E키</option>
                        </select>
                        <button type="submit" class="btn btn-default">스킬상태 변경</button>
                        </Form>
                    </div>
                 </td>
           </tr>
         </table>
      	</div>
   </div>
   </div>
    <!-- 스킬관리 닫기 -->
</div>    

	</div>     
    <!-- 개인룸 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>
	<script src="js/privateroom.js"></script>

  </body>
</html>