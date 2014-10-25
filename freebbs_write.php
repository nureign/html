<?
	/*
		freebbs_write.php (자유토론 게시판 - 글쓰기부분)
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

    <!-- 자유토론 글쓰기 시작 -->
	<div class="col-xs-10">
	<h2 align="center">자유토론 커뮤니티</h2><br />
    <div align="right" class="width" style="margin-right:70px;"><a href="./freebbs_list.php"><button type="button" class="btn btn-warning">게시판으로 돌아가기</button></a></div><br />
    <form role="form" action="javascript:;" method="post">
	<table class="table table-bordered" style="width:900px;">
    	<tr align="center">
        	<td style="background-color:#F3F3F3;" align="center" width="100px">제목</td>
            <td width="350px"><input type="text" class="form-control" placeholder="제목을 적어주세요" maxlength="30"></td>
            <td style="background-color:#F3F3F3;" align="center" width="100px">닉네임</td>
            <td align="center" width="150px">갤럭시숑숑</td>
        </tr>
        <tr>
        	<td colspan="4" style="text-align:left;">
            	<textarea class="form-control" rows="8"></textarea><br>
                <div align="center"><button type="submit" class="btn btn-default">글쓰기</button></div>
            </td>
        </tr>
    </table></form><br />
	</div>     
    <!-- 자유토론 글쓰기 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>