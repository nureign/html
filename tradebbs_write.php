<?
	/*
		tradebbs_write.php (거래게시판 - 글쓰기부분)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

	@session_start();
	
	$id = $_SESSION['id'];

	if( !isset($id) )
	{
		echo ("<div align='center'>로그인을 하시기 바랍니다.</div>");
		exit;
	}
	
*/

?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 거래게시판 글쓰기 시작 -->
	<div class="col-xs-10">
	<h2 align="center">거래게시판 커뮤니티</h2><br />
    <div align="right" class="width" style="margin-right:70px;"><a href="./tradebbs_list.php"><button type="button" class="btn btn-warning">게시판으로 돌아가기</button></a></div><br />
    <form role="form" action="javascript:;" method="post">
	<table class="table table-bordered" style="width:900px;">
    	<tr align="center">
        	<td style="background-color:#F3F3F3;" align="center" width="100px">제목</td>
            <td width="350px"><input type="text" class="form-control" placeholder="제목을 적어주세요" maxlength="30" id="subject"></td>
            <td style="background-color:#F3F3F3;" align="center" width="100px">닉네임</td>
            <td align="center" width="150px">엘노트</td>
        </tr>
        <tr align="center">
			<td style="background-color:#F3F3F3;" align="center" width="100px">물품선택</td>
            <td>
                <select class="form-control" id="item_choose">
                  <option value="">내가 가지고 있는 1번 물품</option>
                  <option value="">2번물품</option>
                  <option value="">새살쏙쏙연고</option>
                  <option value="">샘다수 물병</option>
                  <option value="">전설의 엑스칼리버 +8</option>
                </select>
            </td>
			<td style="background-color:#F3F3F3;" align="center" width="100px">희망금액</td>
            <td>
                <select class="form-control" id="valuetype">
                  <option value="ruby">루비</option>
                  <option value="titanium">티타늄</option>
                  <option value="palladium">팔라듐</option>
                </select>
                <input type="text" class="form-control" placeholder="금액" maxlength="10" id="howmuch">
        <tr>
        	<td colspan="4" style="text-align:left;">
            	<textarea class="form-control" rows="8"></textarea><br>
                <div align="center"><button type="submit" class="btn btn-default">글쓰기</button></div>
            </td>
        </tr>
    </table></form><br />
	</div>     
    <!-- 거래게시판 글쓰기 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>