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
		echo "<script>alert('Logout, Please You should try Log-in again'); history.back(-1);</script>";
		exit;
	}
//no	item_name	item_type	subject	nickname	price_type	price	today	admin

?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 거래게시판 시작 -->
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
        <?
		//no	item_name	item_type	subject	nickname	price_type	price	today	admin
		$result = $mysqli->query("SELECT * FROM bbs_trade WHERE admin < 1 order by no DESC limit 10") or trigger_error($mysqli->error.$sql);
		$result_notice = $mysqli->query("SELECT * FROM bbs_trade WHERE admin = 1 order by no DESC") or trigger_error($mysqli->error.$sql);
		
		while ($showme_n = $result_notice->fetch_array())
		{
			$number = $showme_n['no'];
			$showme_n['no'] = "공지";
			echo "<tr>
					<td align='center' width='100px'>".$showme_n['no']."</td>
					<td align='center' width='150px'>-</td>
					<td><a href='./tradebbs_read.php?no=".$number."'>".$showme_n['subject']."</a></td>
					<td align='center' width='150px'>".$showme_n['nickname']."</td>
					<td align='center' width='150px'>".$showme_n['today']."</td>
				  </tr>
				  ";
		}
		
		while ($showme = $result->fetch_array())
		{
			$number = $showme['no'];
			if ($showme['item_type'] == '팝니다')
			{
				$category = "<span style='color:#A60000; font-size:small;'>[팝니다]&nbsp;</span>";
			}
			else
			{
				$category = "<span style='color:#474BFE; font-size:small;'>[삽니다]&nbsp;</span>";
			}
				
			echo "<tr>
					<td align='center' width='100px'>".$showme['no']."</td>
					<td align='center' width='150px'>".$showme['item_name']."</td>
					<td>".$category."<a href='./tradebbs_read.php?no=".$number."'>".$showme['subject']."</a></td>
					<td align='center' width='150px'>".$showme['nickname']."</td>
					<td align='center' width='150px'>".$showme['today']."</td>
				  </tr>
				  ";
		}
		?>
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
				<a href="#" onClick="search_info()"><button type="button" class="btn btn-default">검색</button></a>
                <a href="./tradebbs_write.php"><button type="button" class="btn btn-info">글쓰기</button></a>
            </form>
            
            </td>
         </tr>
      </td>
    </table><br />
	</div>     
    <!-- 거래게시판 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>