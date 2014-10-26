<?
	/*
		Bank.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
	include_once "./logic/bank_initial.php";
?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 개인룸 시작 -->
	<div class="col-xs-10">

	<!-- 위에 표시 -->
    <div class="panel panel-warning width">
		<div class="panel-heading" style="background-color:#FF9396"><strong><font color="white">고블린은행</font></strong></div>
		<div class="panel-body">
        <table class="table center" style="width:930px;">
        	<tr>
            	<td width="80px">
            	<td class="right" width="270px"><img src="./images/goblinbank.jpg" alt="..." width="240px" height="200px"></td>
                <td align="left">
                	<h4 align="center">정직하지만 때론 탐욕스러운 고블린 은행!</h4><br />
					저 고블린 은행 은행장이 직접 모시러 나왔습니다. 겔겔.. <br />
                    오늘은 얼마나 많은 루비를 맡기시러 오셨나요? 아니, 혹시 루비를 출금하러 오셨나요?<br />
                    그러나 아시다시피 출금에는 대가가 따르죠..겔겔..<br />
                    매일매일 출금에 따른 세금이 다르니 저렴할때 오시는것도 하나의 방법이겠지요. 겔겔..<br />
                    세금으로 어디에 쓰냐고 물으신다면...<br />
                    요즘 먹고 살기 힘든건 다 매한가지 아니겠습니까? 겔겔..<br />
                    아무쪼록 편하게 이용하다 가시기 바랍니다.오늘도 은행을 찾아주셔서 감사합니다..겔겔..
                   
                </td>
            </tr>
        </table>
		</div>
	</div>
    <!-- 위에 표시 닫기 -->

	<!-- 현재 출금세율 비율 -->
	<div class="alert alert-danger width center" role="alert">
    	<strong>현재 출금세율 비율</strong> : 30% / <strong>전산오류 무사고 시간</strong> : 0시간 0분
    </div>
    <!-- 현재 출금세율 비율 -->
    
	<!-- 은행 핵심기능 시작 -->
    <div class="panel panel-default width">
      <div class="panel-body">
      	<!-- 입출금 영역 -->
        <table class="table center" style="width:930px;">
        	<tr>
            	<td colspan="4"><strong><?=$name?>님의 개인루비통장 현황입니다.</strong><br />현재 소유중인 루비 : <span id="ruby"><?=$ruby?></span><br />은행에 맡긴 루비 : <span id="bank"><?=$bank?></span></td>
            </tr>
            <tr>
            	<td class="success" colspan="2">입금내역서</td>
                <td width="50px"></td>
                <td class="danger" colspan="2">출금내역서</td>
            </tr>
            <tr>
            	<td colspan="2" align="left" style="padding-left:100px;" id="depositlist">
			<?		for($i=0; $i<count($deposit); $i++)
						echo '[' . $deposit[$i]['date'] . '] ' . $deposit[$i]['amount'] . ' 루비 입금<br>';	?>
                </td>
                <td colspan="2" align="left" style="padding-left:100px;" id="withdrawlist">
			<?		for($i=0; $i<count($withdraw); $i++)
						echo '[' . $withdraw[$i]['date'] . '] ' . $withdraw[$i]['amount'] . ' 루비 출금' . ( ($withdraw[$i]['type'] == '전산오류') ? ' <b>전산오류</b>' : '' ) . ' (세금: '.$withdraw[$i]['tax'].' 루비)<br>';	?>
                </td>
            </tr>
            <tr>
            	<td colspan="2" align="center">
					<!--<label class="control-label">입금할 루비량</label>-->
                    <div class="input-group has-success">
                      <input type="text" class="form-control" id="rubyin">
					  <span class="input-group-btn">
						<button type="button" class="btn btn-success" id="deposit">루비 입금</button>
					  </span>
                    </div>
                </td>
				<td></td>
                <td colspan="2" align="center">
					<!--<label class="control-label" >출금할 루비량</label>-->
                    <div class="input-group has-error">
                      <input type="text" class="form-control" id="rubyout">
					  <span class="input-group-btn">
	                      <button type="button" class="btn btn-danger" id="withdraw">루비 출금</button>
					  </span>
                    </div>
                </td>
            </tr>
         </table>
        <!-- 입출금 닫기 -->
        
        <!-- 루비 부자 상위 5명 -->
        <table class="table table-condensed center" style="width:700px;" id="depositlist_top5">
        	<tr>
            	<td colspan="4" class="danger">루비 부자 상위 5명</td>
            </tr>
			<?php
				for($i=0; $i<count($deposit_top5); $i++)
					echo '<tr><td>'.(($i==0)?'<span class="glyphicon glyphicon-thumbs-up"></span>':($i+1).'위').'</td><td>'.$deposit_top5[$i]['name'].'</td><td>'.$deposit_top5[$i]['intro'].'</td><td>'.$deposit_top5[$i]['bank'].'</td></tr>';
			?>
        </table>
        <!-- 루비 부자 상위 5명 닫기 -->
        
        <!-- 전산오류 자주 걸린 상위 5명 -->
        <table class="table table-condensed center" style="width:700px;" id="withdrawlist_top5">
        	<tr>
            	<td colspan="4" class="warning">전산오류 베스트 5명</td>
            </tr>
			<?php
				for($i=0; $i<count($withdraw_top5); $i++)
					echo '<tr><td>'.(($i==0)?'<span class="glyphicon glyphicon-thumbs-up"></span>':($i+1).'위').'</td><td>'.$withdraw_top5[$i]['name'].'</td><td>'.$withdraw_top5[$i]['intro'].'</td><td>1</td></tr>';
			?>
        </table>
        <!-- 전산오류 자주 걸린 상위 5명 닫기 -->
    </div>
    </div>
    <!-- 은행 핵심기능 닫기 -->

	</div>     
    <!-- 개인룸 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>
	<script src="js/bank.js"></script>
  </body>
</html>