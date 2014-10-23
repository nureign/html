<?
	/*
		Promotion.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 진급 시작 -->
	<div class="col-xs-10">

	<!-- 위에 표시 -->
    <div class="panel panel-warning width">
		<div class="panel-heading" style="background-color:#FF8000"><strong><font color="white">진급!</font></strong></div>
		<div class="panel-body">
        <table class="table center" style="width:930px;">
        	<tr>
            	<td class="left" width="400px"><img src="./images/promotion.jpg" alt="..." width="400px" height="200px"></td>
                <td align="left">
                	<h4 align="center">명예스러운 공로를 인정하고자 진급을 할 수 있습니다!</h4><br />
					그대의 공로를 인정하기 위해 상급부대에서!!<br />당신의 명예에 걸맞는 직책을 주고자 합니다.<br />
                    재미있는 사실은 원하는 직책으로 본인이 선택해서 갈 수 있다는 점이죠<br />
                    일정한 명예수치와 당신의 능력에 따라 진급할 수 있는 직책이 다르니<br />
                    잘 생각해서 원하는 직책으로 갈 수 있도록 심사숙고 후에 결정하시기 바랍니다.
                   
                </td>
            </tr>
        </table>
		</div>
	</div>
    <!-- 위에 표시 닫기 -->

	<!-- 현재 출금세율 비율 -->
	<div class="alert alert-danger width center" role="alert">
    	<strong>현재 명예수치</strong> : 1000 / <strong>현재 직책</strong> : 견습
    </div>
    <!-- 현재 출금세율 비율 -->
    
	<!-- 진급표시 -->
    <div class="panel panel-default width">
      <div class="panel-body">
        <table class="table center" style="width:930px;">
        	<tr class="warning center">
            	<td>신규직책</td>
                <td>필요 스테이터스</td>
                <td>필요명예</td>
                <td>특수제공스킬</td>
                <td>설명</td>
                <td>선택</td>
            </tr>
            <tr>
            	<td width="100px">유도탄꼬맹이</td>
                <td width="200px">20 / 10 / 10 / 10 / 20 / 10</td>
                <td>500</td>
                <td>구걸</td>
                <td width="300px">직책답지 않은 직책을 받았으나 귀여운 구걸 스킬로 상대방에게 일정 루비를 갈취할 수 있다</td>
                <td>
                	<form class="form-inline" role="form" method="post" action="promotion_select.php">
                        <input type="hidden" id="skill_no" value="" />
                        <button type="submit" class="btn btn-default">직책 선택</button>
                    </form>
                </td>
             </tr>
         </table>
    </div>
    </div>
    <!-- 진급표시 닫기 -->

	</div>     
    <!-- 진급 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>