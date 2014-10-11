<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estrella Webgame</title>
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css" media="screen" title="no title" />
    <!--<link rel="stylesheet" href="./css/font-awesome.css" type="text/css" media="screen" title="no title" /> -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script> 
    <!-- Custom styles for this template -->
    <!--<link href="navbar-static-top.css" rel="stylesheet">-->
</head>

<?
	include_once "./common/nav.php";
?>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">


<div class="panel panel-default">
  <div class="panel-body">


<div class="panel panel-default" align="center">
  <div class="panel-body">
    <img src="images/join_member0.png" class="img-responsive">
    <img src="images/join_member3.png" class="img-responsive">
  </div>
</div>

<div class="panel panel-success">
  <div class="panel-heading">
    <h3 class="panel-title" align="center">성공적으로 가입되었습니다.</h3>
  </div>
  <div class="panel-body">
	<table class="table table-condensed" style="text-align:center">
        <tr>
            <td class="active">회원번호</td>
            <td id="account_no"></td>   
        </tr>
        <tr>
            <td class="active">이메일 계정</td>
            <td id="account_email"></td>   
        </tr>
        <tr>
            <td class="active">케릭터 이름</td>
            <td id="account_name"></td>    
        </tr>
		<tr>
            <td class="active">가입일자</td>
            <td id="account_joindate"></td>    
        </tr>
    </table>
  </div>
</div>

  <form action="./" method="post" class="form-group">
    <div class="form-group">
    <div class="col-lg-offset-2 col-lg-8" align="center">
      <button type="submit" class="btn btn-default">게임시작하기</button>
    </div>
  </div>
	</form>












  </div>
</div>



  
  </div>
  <div class="col-md-3"></div>
</div>

      <!-- FOOTER -->
      <footer>
        <p align="center">&copy; 2014 Estrella Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/md5.js"></script>
	<script src="js/join_member.js"></script>
	<script src="js/join_member_end.js"></script>
  </body>
</html>