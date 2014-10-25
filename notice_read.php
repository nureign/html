<?
	/*
		notice_read.php (공지사항 읽기)
	*/
	
	include_once "./common/header.php";
	include_once "./common/db_conn.php";

?>
	<h2 style="margin-left:300px;">에스트렐라 공지 / 업데이트</h2>
<?   
	$whatisyournumber = stripslashes($_GET[notice_no]);

	if ($whatisyournumber == '')
	{
		echo ("공지사항이 선택되지 않았습니다. <br />");
	}
	else
	{
		
		$result = $mysqli->query("SELECT * FROM notice WHERE no = '$whatisyournumber'"); 
		$row = $result->fetch_array();
	}
	
?>      
    <br />
	<table class="table table-bordered" style="width:700px; margin-left:100px;">
    	<tr align="center" style="background-color:#F3F3F3;">
        	<td align="center" width="100px"><?=$row['no'];?>번</td>
            <td width="350px"><?=$row['subject'];?></td>
            <td align="center" width="200px"><?=$row['today'];?></td>
        </tr>
        <tr>
        	<td colspan="4" style="padding-left:50px; padding-right:50px; text-align:left;">
            	<br /><br />
                
                <?=$row['display'];?>
                
                <br /><br /><br />
            </td>
        </tr>
    </table>
	</div>     
    <!-- 공지사항 읽기 닫기 -->

  </body>
</html>