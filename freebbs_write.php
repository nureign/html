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
		echo "<script>alert('Logout, Please You should try Log-in again'); history.back(-1);</script>";
		exit;
	}
	
	$qqqq = $mysqli->query("select * from project_members WHERE id = '$id'");
	$watching = $qqqq->fetch_array();
	$watching['name'];
	$watching['admin'];
	$name = $watching['name'];
	
	$subject = $_POST['subject'];
	$content = $_POST['content_field'];
	$admin = $_POST['checking'];
	$notice = $_POST['notice'];
	
	if ($notice == '1')
	{
	}
	else
	{
		$notice = '0';
	}
	
	if ((!isset($subject) and !isset($content)) or (!isset($subject)) or (!isset($content)))
	{
		//아무것도 안함
	}
	else
	{
		$mysqli->query("insert into `bbs_free` (subject, content, nickname, admin) Values('$subject', '$content', '$name', '$notice')");
		echo "<script>alert('Done!'); history.back(-1);</script>";
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
    <form role="form" action="./freebbs_write.php" method="post">
	<table class="table table-bordered" style="width:900px;">
    	<tr align="center">
        	<td style="background-color:#F3F3F3;" align="center" width="100px">제목</td>
            <td width="350px"><input type="text" class="form-control" placeholder="제목을 적어주세요" maxlength="30" name="subject">
			<? if($watching['admin'] == '1')
				{
					echo "<input type='checkbox' id='inlineCheckbox1' name='notice' value='1'>공지";
				}
			?>
			</td>
            <td style="background-color:#F3F3F3;" align="center" width="100px">작성자</td>
            <td align="center" width="150px"><?=$watching['name']?></td>
        </tr>
        <tr>
        	<td colspan="4" style="text-align:left;">
            	<?
					if ($watching['admin'] == '1')
					{
						echo "<input type='hidden' name='checking' value=".$watching['admin']." />";
					}
				?>
            	<textarea class="form-control" rows="8" name="content_field"></textarea><br>
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