<?
	/*
		freebbs_read.php (자유토론 게시판 - 읽기부분)
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

?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 자유토론 읽기 시작 -->
	<div class="col-xs-10">
	<h2 align="center">자유토론 커뮤니티</h2><br />
    <div align="right" class="width" style="margin-right:70px;"><a href="./freebbs_list.php"<button type="button" class="btn btn-warning">게시판으로 돌아가기</button></a></div><br />
	<table class="table table-bordered" style="width:900px;">
    	<tr align="center" style="background-color:#F3F3F3;">
        	<td align="center" width="100px">23423번 내용</td>
            <td width="350px">천제의 퀘스트 어뜩케 하나용?ㅠ</td>
            <td align="center" width="150px">갤럭시슝슝</td>
            <td align="center" width="100px">14-10-25 19:25</td>
        </tr>
        <tr>
        	<td colspan="4" style="padding-left:50px; padding-right:50px; text-align:left;">
            	<br /><br />사실 천체의 퀘스트? 천제의 퀘스트? 그거 잘 모르겠어요. 지금 레벨은 20인데 너무 퀘스트 달렸나봐요 어케하죠?<br /><br /><br />
            </td>
        </tr>
        <tr>
        	<td width="50px" align="center">닉네임은닉넴</td>
            <td colspan="3" width="850px">한줄댓글 입니당... 제가 봤을 땐 조금 더 고렙이 되셔야 할듯여</td>
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