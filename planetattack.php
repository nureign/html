<?
	/*
		planetattack.php (행성공략 시작)
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";

	@session_start();
	
	$id = $_SESSION['id'];
/*
	if( !isset($id) )
	{
		echo ("<div align='center'>로그인을 하시기 바랍니다.</div>");
		exit;
	}
*/
?>
<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 행성공략 본격 시작 -->
	<div class="col-xs-10">
	<h2 align="center">행성공략 전투시작!</h2><br />
	<table class="table table-bordered" style="width:900px;">
    	<tr align="center" style="background-color:#F3F3F3;">
        	
	</div>     
    <!-- 행성공략 이제 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>