<?
	/*
		planetattack.php (행성공략 시작)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

	@session_start();
	
	$id = $_SESSION['id'];
/*
	if( !isset($id) )
	{
		echo ("<div align='center'>로그인을 하시기 바랍니다.</div>");
		exit;
	}
*/
?>
<style>
body {

	background-image: url(images/planetready_bg_left.gif), url(images/planetready_bg_right.gif); 
	background-repeat: repeat-y; 
	background-position: top left, top right; 
}
</style>

<audio src="./sounds/planetready_bg.mp3" preload autoplay></audio>

<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 행성공략 본격 시작 -->
	<div class="col-xs-10">
        <div class="panel panel-default width center">
			<div class="panel-body center">
            	<div class="alert alert-danger alert-dismissible" role="danger">
                 <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                   <strong>행성공략</strong> - 워프준비 5, 4, 3, 2, 1, 0
                </div>
                <table class="table table-bordered center" style="width:930px;">
                    <tr align="center" style="background-color:#FDEACC;">
                    	<td colspan="4" height="30px">
                        	<span style="color:#6C0; font-size:20px;"><strong>부관</strong> : <span style="font-size:16px;">[워프결과보고]</span>
                             작전 완료, 행성 조사 완료</span>
                        </td>
                    </tr>
                    <tr>
                    	<td class="danger"><strong>발견한 행성</strong></td>
                        <td>Jpub-3X 행성</td> <!-- 또는 이름모를 유저 행성 -->
                        <td class="danger"><strong>타입</strong></td>
                        <td>외계인</td> <!-- 또는 유저 -->
                    </tr>
                    <tr>
                    	<td class="danger"><strong>적 지휘관</strong></td>
                        <td>에스피스</td> <!-- 유저이름(갤럭시슝슝) -->
                        <td class="danger"><strong>등급</strong></td>
                        <td>3등급 외계인</td>
                     </tr>
                     <tr>
                     	<td class="danger"><strong>적의 메시지</strong></td>
                        <td colspan="3">(번역불가)</td> <!-- 또는 유저면 유저의 말 적어주기(기지말) -->
                     </tr>
                     <tr>
                     	<td class="danger"><strong>적 규모</strong></td>
                        <td colspan="3">정찰 불가능</td>
                     </tr>
                     <tr style="background-color:#FEABAB;">
                     	<td colspan="4"><h5 style="color:#0000A0;">모에모에님! 전투에 돌입할까요?</h5></td>
                     </tr>
                     <tr align="center">
                     	<td colspan="4">  
                        	<!-- 케릭터 현황 -->
                        	<table width="850px">
                            	<tr>
                                	<td width="300px">              
                                    <!-- 체력부분 열기 -->
                                    <div class="input-group">
                                    <span class="input-group-addon"><span class="label label-danger">체력</span></span>
                                        <div class="progress, form-control" style="background-color:#FEE;">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$hp_per?>%;" id="hp_per"><?=$hp_per?>%</div>
                                        </div>
                                        <span class="input-group-addon" id="hp_text"><?=$hp?> / <?=$maxhp?></span>
                                    </div>
                                    <!-- 체력부분 닫기 -->
                                    <!-- 멘탈부분 열기 -->
                                    <div class="input-group">
                                    <span class="input-group-addon"><span class="label label-warning">멘탈</span></span>
                                        <div class="progress, form-control" style="background-color:#FFE7D9;">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$mental_per?>%;" id="mental_per"><?=$mental_per?>%</div>
                                        </div>
                                        <span class="input-group-addon" id="mental_text"><?=$mental?> / <?=$mental?></span>
                                    </div>
                                    <!-- 멘탈부분 닫기 -->
                                    </td>
                                    <td width="20px"></td>
                                	<td>
                                    
                                    <table width="500px" class="table table-bordered center">
                                    	<tr>
                                        	<td colspan="6" style="background-color:#FEEFFE">모에모에님의 장착 아이템</td>
                                        </tr>
                                    	<tr>
                                        	<td>광선검</td>
                                            <td>엘릭건</td>
                                            <td>러브 티셔츠</td>
                                            <td>러브바지</td>
                                            <td>전투화</td>
                                            <td>지식의 책</td>
                                        </tr>
                                    </table>
                                    
                                    </td>
                                </tr>
                            </table>
                            <!-- 케릭터 현황 닫기 -->
                		</td>
                     </tr>
					<tr>
                    	<td colspan="4" style="background-color:#FFC">나의 준비된 유닛</td>
                    </tr>
                    <tr align="center">
                    	<table  align="center" style="width:600px;">
                        	<tr align="center">
                                <td><img src="./images/base_g_unit1.gif" alt="..." width="100px" height="100px"></td>
                                <td><img src="./images/base_g_unit2.gif" alt="..." width="100px" height="100px"></td>
                                <td><img src="./images/base_m_unit3.gif" alt="..." width="100px" height="100px"></td>
                                <td><img src="./images/base_m_unit2.gif" alt="..." width="100px" height="100px"></td>
                                <td><img src="./images/base_m_unit2.gif" alt="..." width="100px" height="100px"></td>
                            </tr>
                            <tr align="center">
                                <td><img src="./images/base_g_unit1.gif" alt="..." width="100px" height="100px"></td>
                                <td><img src="./images/base_g_unit2.gif" alt="..." width="100px" height="100px"></td>
                                <td><img src="./images/base_m_unit3.gif" alt="..." width="100px" height="100px"></td>
                                <td><img src="./images/base_m_unit2.gif" alt="..." width="100px" height="100px"></td>
                                <td><img src="./images/base_m_unit2.gif" alt="..." width="100px" height="100px"></td>
                            </tr>
                        </table>
                    </tr>
                    <tr>
                    	<td><br />
                            <form class="form-inline" role="form">
                        	<table align="center" style="width:600px;">
                            	<tr align="center">
                                	<td>1번</td>
                                    <td>
                                    <select class="form-control" id="one_unit">
                                      <option>패스루트</option>
                                      <option>일반병사</option>
                                      <option>겔겔겔</option>
                                      <option>기계유닛</option>
                                      <option>헤헤헤유닛</option>
                                    </select>
                                    </td>
                                    <td>2번</td>
                                    <td>
                                    <select class="form-control" id="two_unit">
                                      <option>패스루트</option>
                                      <option>일반병사</option>
                                      <option>겔겔겔</option>
                                      <option>기계유닛</option>
                                      <option>헤헤헤유닛</option>
                                    </select>
                                    </td>
                                    <td>3번</td>
                                    <td>
                                    <select class="form-control" id="three_unit">
                                      <option>패스루트</option>
                                      <option>일반병사</option>
                                      <option>겔겔겔</option>
                                      <option>기계유닛</option>
                                      <option>헤헤헤유닛</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr align="center">
                                	<td>4번</td>
                                    <td>
                                    <select class="form-control" id="four_unit">
                                      <option>패스루트</option>
                                      <option>일반병사</option>
                                      <option>겔겔겔</option>
                                      <option>기계유닛</option>
                                      <option>헤헤헤유닛</option>
                                    </select>
                                    </td>
                                    <td>5번</td>
                                    <td>
                                    <select class="form-control" id="five_unit">
                                      <option>패스루트</option>
                                      <option>일반병사</option>
                                      <option>겔겔겔</option>
                                      <option>기계유닛</option>
                                      <option>헤헤헤유닛</option>
                                    </select>
                                    </td>
                                    <td colspan="2">.</td>
                                </tr>
							</table>
                         </td>
                    </tr>
                    <tr>
                    	<td><br />
                        	<table align="center" style="width:650px;">
                            	<tr>
                                	<td>아이템장착&nbsp;</td>
                                    <td>1번</td>
                                    <td>
                                    <select class="form-control" id="one_item">
                                      <option>새살쏙쏙연고</option>
                                      <option>마술피리</option>
                                      <option>행성폭격 무전기</option>
                                      <option>레알의 레알</option>
                                      <option>온리유 수정구슬</option>
                                    </select>
                                    </td>
                                    <td>&nbsp;2번</td>
                                    <td>
                                    <select class="form-control" id="two_item">
                                      <option>새살쏙쏙연고</option>
                                      <option>마술피리</option>
                                      <option>행성폭격 무전기</option>
                                      <option>레알의 레알</option>
                                      <option>온리유 수정구슬</option>
                                    </select>
                                    </td>
                                    <td>&nbsp;3번</td>
                                    <td>
                                    <select class="form-control" id="three_item">
                                      <option>새살쏙쏙연고</option>
                                      <option>마술피리</option>
                                      <option>행성폭격 무전기</option>
                                      <option>레알의 레알</option>
                                      <option>온리유 수정구슬</option>
                                    </select>
                                    </td>
                                </tr>
                            </table>
                         </td>
                     </tr>
                     <tr>
                     	<td colspan="4"><br /><a href="./planetready.php"><button type="button" class="btn btn-warning">재도약 (300루비 소모)</button></a>&nbsp;
                        				<button type="submit" class="btn btn-danger">공격!</button>
                        </td>
                     </tr>  
                </table>
                </form>
			</div>
		</div>
	
        	
	</div>     
    <!-- 행성공략 이제 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>