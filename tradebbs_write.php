<?
	/*
		tradebbs_write.php (거래게시판 - 글쓰기부분)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

	@session_start();
	
	$id = $_SESSION['id'];
	$howmuch = $_POST['howmuch'];
	$valuetype = $_POST['valuetype'];
	$item_choose = $_POST['item_choose'];
	$sellbuy = $_POST['sellbuy']; //팝니다 삽니다
	

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
	{	//no	item_name	item_type	subject	nickname	price_type	price	today	admin
		//echo $item_choose."<br>".$sellbuy."<br>".$subject."<br>".$content."<br>".$name."<br>".$valuetype."<br>".$howmuch."<br>".$notice;
		//exit;
		
		$mysqli->query("insert into `bbs_trade` (item_name, item_type, subject, content, nickname, price_type, price, admin) Values('$item_choose', '$sellbuy', '$subject', '$content', '$name', '$valuetype', '$howmuch', '$notice')");
		echo "<script>alert('Done!'); history.back(-1);</script>";
		exit;
	}

?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 거래게시판 글쓰기 시작 -->
	<div class="col-xs-10">
	<h2 align="center">거래게시판 커뮤니티</h2><br />
    <div align="right" class="width" style="margin-right:70px;"><a href="./tradebbs_list.php"><button type="button" class="btn btn-warning">게시판으로 돌아가기</button></a></div><br />
    <form role="form" action="./tradebbs_write.php" method="post">
	<table class="table table-bordered" style="width:900px;">
    	<tr align="center">
        	<td style="background-color:#F3F3F3;" align="center" width="100px">제목</td>
            <td width="350px">
            <input type="text" class="form-control" placeholder="제목을 적어주세요" maxlength="30" name="subject">
            <? if($watching['admin'] == '1')
				{
					echo "<input type='checkbox' id='inlineCheckbox1' name='notice' value='1'>공지";
				}
			?>
            </td>
            <td style="background-color:#F3F3F3;" align="center" width="100px">작성자</td>
            <td align="center" width="150px"><?=$watching['name']?></td>
        </tr>
        <tr align="center">
			<td style="background-color:#F3F3F3;" align="center" width="100px">물품선택<br />판구매여부</td>
            <td>
                <select class="form-control" name="item_choose">
                  <option value="이 작업">이 작업 해야함</option>
                  <option value="샘다수 물병">샘다수 물병</option>
                  <option value="전설의 엑스칼리버 +8">전설의 엑스칼리버 +8</option>
                </select>
                <select class="form-control" name="sellbuy">
                  <option value="팝니다">판매</option>
                  <option value="삽니다">구매</option>
                </select>
            </td>
			<td style="background-color:#F3F3F3;" align="center" width="100px">희망금액</td>
            <td>
                <select class="form-control" name="valuetype">
                  <option value="루비">루비</option>
                  <option value="티타늄">티타늄</option>
                  <option value="팔라듐">팔라듐</option>
                </select>
                <input type="text" class="form-control" placeholder="금액" maxlength="10" name="howmuch">
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
    <!-- 거래게시판 글쓰기 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>