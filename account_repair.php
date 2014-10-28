<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?
	@session_start();
	$password = $_POST['account_password'];
	$password2 = $_POST['account_password2'];
	$nowid = $_SESSION['id'];
	
	if (!isset($nowid))
	{
		echo "<script>alert('로그아웃 되었습니다. 다시 로그인해주세요.'); history.back(-1);</script>";
	}
	
	if (!isset($password) or !isset($password2))
	{
		exit();
	}
	if ($password == $password2)
	{
		include_once "./common/db_conn.php";
		
		$real_pass = md5($password);
		$mysqli->query("set names utf8");
		$mysqli->query ("update project_members set password='$real_pass' where id='$nowid'");
		
		echo "<script>alert('패스워드가 변경되었습니다'); history.back(-1);</script>";
	}
	else
	{
		echo "<script>alert('패스워드를 확인해주세요.'); history.back(-1);</script>";
	}


?>
</body>
</html>