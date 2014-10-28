<?
	/*
		Account.php (설정 - 내정보)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	
	@session_start();
	include_once "./common/db_conn.php";
	$nowid = $_SESSION['id'];
	
	if(!isset($nowid))
	{
		echo "<script>alert('Logout, Please You should try Log-in again'); history.back(-1);</script>";
	}
	$qqqq = $mysqli->query("select * from project_members WHERE id = '$nowid'");
	$watching = $qqqq->fetch_array();
	$watching['name'];
?>

<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 내정보 부분 시작 -->
	<div class="col-xs-10">

	<table class="table center" style="width:700px">
    	<tr>
        	<td colspan="2" style="background-color:#FAF2AB;"><h3>내 정보 확인 / 변경</h3></td>
        </tr>
        <tr>
        	<td width="200px">케릭 닉네임</td>
            <td width="300px"><input class="form-control" id="disabledInput" type="text" placeholder="<?=$watching['name'];?>" disabled></td>
        </tr>
        <tr>
        	<td>케릭 번호</td>
            <td><input class="form-control" id="disabledInput" type="text" placeholder="케릭번호 : #<?=$watching['id']?>" disabled></td>
        </tr>
        <tr>
        	<td>로그인 이메일</td>
            <td><input class="form-control" id="disabledInput" type="text" placeholder="<?=$watching['email_address']?>" disabled></td>
        </tr>
        <form role="form" action="./account_repair.php" method="post">
        <tr>
        	<td>패스워드</td>
            <td><input type="password" class="form-control" name="account_password" placeholder="변경할 패스워드를 입력하세요."></td>
        </tr>
        <tr>
        	<td>패스워드 재확인</td>
            <td><input type="password" class="form-control" name="account_password2" placeholder="변경할 패스워드를 재입력하세요."></td>
        </tr>
        <tr>
        	<td></td>
        	<td><button type="submit" class="btn btn-default">패스워드 변경</button></FORM></td>
        </td>
        <tr>
        	<td colspan="2" style="background-color:#FC0;"><h4>보안 등급</h4></td>
        </tr>
        <tr>
        	<td>보안상태</td>
            <td>
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                보통 등급
              </div>
            </div>
			</td>
        </tr>
        <tr>
        	<td colspan="2">※ 보안등급기준은 기본이 보통등급이고, 추후 보안 업데이트가 시행될 시 높음 등급까지 추가될 예정입니다.<br /></td>
        </tr>
    </table>
    <a href="./"><button type="button" class="btn btn-default">초기화면으로 이동</button></a>&nbsp;
    <a href="./main.php"><button type="button" class="btn btn-default">메인화면으로 이동</button></a>
    <br /><br /><br /><br />
	</div>
    <!-- 내정보 부분 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->
</div></div>
	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>