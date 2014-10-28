<?
	/*
		tradebbs_read.php (거래게시판 - 읽기부분)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

	@session_start();
	
	$id = $_SESSION['id'];
	$no = $_GET['no'];
	$number = $_POST['bbs_no'];
	$comments = $_POST['one_comment'];

	if( !isset($id) )
	{
		echo "<script>alert('Logout, Please You should try Log-in again'); history.back(-1);</script>";
		exit;
	}

	$wwww = $mysqli->query("select * from project_members WHERE id = '$id'");
	$help = $wwww->fetch_array();
	
	// 읽은 번호를 가지고 거래게시판에서 해당 정보를 다 뽑아낸다.
	$qqqq = $mysqli->query("select * from bbs_trade WHERE no = '$no'");
	$watching = $qqqq->fetch_array();
	$watching['no'];
	$watching['item_name'];
	$watching['item_type'];
	$watching['subject'];
	$wathcing['nickname'];
	$watching['price'];
	$watching['price_type'];
	$watching['today'];
	$watching['admin'];
	
	if ($watching['item_type'] == '팝니다')
	{
		$category = "<span style='color:#A60000; font-size:small;'>[팝니다]&nbsp;</span>";
	}
	else
	{
		$category = "<span style='color:#474BFE; font-size:small;'>[삽니다]&nbsp;</span>";
	}
	
	
	$myname = $help['name'];
	
	if ($watching['admin'] == '1')
	{
		$watching['no'] = "공지";
	}
	
	$bbs_no = $watching['no']; //여기서 바뀌어버림 글자가...
	
	/*
		type	no	nickname	content	today
	*/
	$ccccd = $mysqli->query("select * from bbs_comment WHERE type = '거래' and no = '$no'");
	$comment = $ccccd->fetch_array();

	if (!isset($comments))
	{
	}
	else
	{
		$trading = "거래";
		//echo $trading."<br>".$number."<br>".$myname."<br>".$comments;
		//exit;
		$mysqli->query("insert into bbs_comment (type, no, nickname, content) Values('$trading', '$number', '$myname', '$comments')");
		echo "<script>alert('Comment Done!2'); history.back(-1);</script>";
		exit;
	}

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
        	<td align="center" width="100px"><?=$watching['no']?>번 내용</td>
            <td width="350px"><?=$category?><?=$watching['subject']?></td>
            <td align="center" width="150px"><?=$watching['nickname']?></td>
            <td align="center" width="150px"><?=$watching['today']?></td>
        </tr>
        <tr align="center">
            <? if ($watching['no'] == '공지')
			{
				echo "<td colspan='2'>-</td>";
			} else{?>
            <td colspan="2">물품 : <?=$watching['item_name']?></td><? }?>
            <? if ($watching['no'] == '공지')
			{
				echo "<td colspan='2'>-</td>";
			} else{?>
            <td colspan="2">희망금액 : <?=$watching['price']?> <?=$watching['price_type']?></td><? } ?>
        </tr>
        <tr>
        	<td colspan="4" style="padding-left:50px; padding-right:50px; text-align:left;">
            	<br /><br />
                
               <?=$watching['content']?>
                
                <br /><br /><br />
            </td>
        </tr>
        <?
			if ($comment['nickname'] != '')
			{
				$comment_result = $mysqli->query("SELECT * FROM bbs_comment WHERE type='거래' and no='$no' order by today ASC") or trigger_error($mysqli->error.$sql);
				while ($display_comment = $comment_result->fetch_array())
				{
					echo "
							<tr>
							<td width='50px' align='center'>".$display_comment['nickname']."</td>
							<td colspan='2' width='800px'>".$display_comment['content']."</td>
							<td width='150px' align='center'>".$display_comment['today']."</td>
							</tr>
						";
				}
			}
			else
			{
				echo "
						<tr>
						<td colspan='4' align='center'>댓글이 없습니다.</td>
						</tr>
					";
			}
		?>
        <tr>
        	<td colspan="4" align="center">
			<form class="form-inline" role="form" action="./tradebbs_read.php" method="post">
				<div class="form-group">
                <input type="text" class="form-control" placeholder="한줄댓글 작성" maxlength="50" style="width:550px;" name="one_comment">
                <input type="hidden" name="bbs_no" value="<?=$no?>" />
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