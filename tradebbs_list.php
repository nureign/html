<?
	/*
		tradebbs_list.php (거래게시판 - 리스트부분)
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

    <!-- 자유토론 시작 -->
	<div class="col-xs-10">
	<h2 align="center">거래게시판 커뮤니티</h2><br />
	<table class="table table-bordered" style="width:900px;">
    	<tr align="center" style="background-color:#F3F3F3;">
        	<td>번호</td>
            <td>아이템이름</td>
            <td>제목</td>
            <td>케릭명</td>
            <td>날짜</td>
        </tr>
        <tr>
        	<td align="center" width="100px">공지</td>
            <td align="center" width="100px">-</td>
            <td width="350px">에스트렐라 거래게시판 입니다.</td>
            <td align="center" width="150px">어스GM</td>
            <td align="center" width="100px">14-10-25 19:25</td>
        </tr>
        <tr>
        	<td align="center" width="100px">공지</td>
            <td align="center" width="100px">-</td>
            <td width="350px">게시판 이용규칙 (V1.0)</td>
            <td align="center" width="150px">어스GM</td>
            <td align="center" width="100px">14-10-25 20:00</td>
        </tr>
        <tr>
        	<td align="center" width="100px">1198</td>
            <td align="center" width="100px">새살쏙쏙연고</td>
            <td><span style="color:#A60000; font-size:small;">[팝니다] </span><a href="./tradebbs_read.php">저렴하게 팔아요!! 컨텍하세여!</a></td>
            <td align="center" width="150px">훗샤광</td>
            <td align="center" width="100px">14-10-22 22:00</td>
        </tr>
        <tr>
        	<td align="center" colspan="5">
            <form class="form-inline" role="form">
				<div class="form-group">
                    <select class="form-control">
                      <option>제목</option>
                      <option>내용</option>
                      <option>케릭명</option>
                    </select>
				</div>
				<div class="form-group">
                <input type="text" class="form-control" i	d="whatareuwant" placeholder="무엇을 찾으시겠어요?">
                </div>
				<button type="submit" class="btn btn-default">검색</button>
                <a href="./tradebbs_write.php"><button type="button" class="btn btn-info">글쓰기</button></a>
            </form>
            
            </td>
         </tr>
      </td>
    </table><br />
	</div>     
    <!-- 자유토론 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>