<?
	/*
		tradebbs_read.php (거래게시판 - 읽기부분)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

/*	$id = $_POST['id'];

	if( !isset($id) )
		exit;
*/


/*
	로그인이 되어 있지 않은지 반드시 체크해야 함
	
	로그인이 되어 있지 않은지 반드시 체크해야 함
	
	로그인이 되어 있지 않은지 반드시 체크해야 함
	
	로그인이 되어 있지 않은지 반드시 체크해야 함
	
	로그인이 되어 있지 않은지 반드시 체크해야 함
	
	로그인이 되어 있지 않은지 반드시 체크해야 함
	
	- 비회원은 읽기 쓰기 모두 못하게....
	
*/

?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 자유토론 읽기 시작 -->
	<div class="col-xs-10">
	<h2 align="center">거래게시판 커뮤니티</h2><br />
    <div align="right" class="width" style="margin-right:70px;"><a href="./tradebbs_list.php"<button type="button" class="btn btn-warning">게시판으로 돌아가기</button></a></div><br />
	<table class="table table-bordered" style="width:900px;">
    	<tr align="center" style="background-color:#F3F3F3;">
        	<td align="center" width="100px">1198번 내용</td>
            <td width="350px">
            <span style="color:#A60000; font-size:small;">[팝니다] </span>저렴하게 팔아요!! 컨텍하세여!
            </td>
            <td align="center" width="150px">훗샤광</td>
            <td align="center" width="100px">14-10-22 22:00</td>
        </tr>
        <tr align="center">
        	<td colspan="2">물품 : 새살쏙쏙연고</td>
            <td colspan="2">희망금액 : 500 루비</td>
        </tr>
        <tr>
        	<td colspan="4" style="padding-left:50px; padding-right:50px; text-align:left;">
            	<br /><br />
                
                정말 저렴하게 판매하는 훗샤광의 판매처입니다!! 믿음거래! 안전거래! 새살쏙쏙연고를 500루비에 팔아요!ㅠㅠ<br />
                구매하실분은 #134 번으로 연락주세요! 제가 접속해 있으면 바로 거래 가능요!!
                
                <br /><br /><br />
            </td>
        </tr>
        <tr>
        	<td width="50px" align="center">크로스</td>
            <td colspan="3" width="850px">줄서봅니다~ 저 구매해도 될까요? 근데 좀 비싸서.. 450루비에 가능한가요?</td>
        </tr>
        <tr>
        	<td width="50px" align="center">에바</td>
            <td colspan="3" width="850px">480루비에 사여! #232 컨택해주세요!</td>
        </tr>
        <tr>
        	<td colspan="4" align="center">
            <form class="form-inline" role="form">
				<div class="form-group">
                <input type="text" class="form-control" placeholder="한줄댓글 작성" maxlength="50" style="width:550px;">
                </div>
				<button type="submit" class="btn btn-default">댓글작성</button>
            </form>
            
            </td>
         </tr>
      </td>
    </table><br />
	</div>     
    <!-- 자유토론 읽기 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>