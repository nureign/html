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
	<!-- Custom styles for this template -->
	<!--<link href="./css/navbar-static-top.css" rel="stylesheet">-->
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
    <img src="images/join_member2.png" class="img-responsive">
  </div>
</div>



<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-3 control-label">이메일계정</label>
    <div class="col-lg-9">
      <div class="input-group">
      <input type="email" class="form-control" id="inputEmail1" placeholder="Email" required>
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" onclick="SendAuthMail()">인증번호 보내기</button>
      </span>
      </div>
    </div>
  </div>
  <div class="form-group">
  <label for="emailcheck" class="col-lg-3 control-label">인증번호</label>
  <div class="col-lg-9">
    <div class="input-group">
      <input type="text" class="form-control" id="inputCode1">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" id="AuthConfirm">확인</button>
      </span>
    </div><!-- /input-group -->
    인증이 완료되었습니다. / 인증이 불일치 합니다.
  </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-3 control-label">비밀번호</label>
    <div class="col-lg-9">
    <input type="password" class="form-control" id="inputPassword1" placeholder="최소8자~ 영문숫자 포함">
    </div>
    </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-3 control-label">비밀번호 재입력</label>
    <div class="col-lg-9">
      <input type="password" class="form-control" id="inputPassword2" placeholder="최소8자~ 영문숫자 포함">
    </div>
    </div>
  <div class="form-group">
    <label for="username" class="col-lg-3 control-label">케릭터 이름</label>
    <div class="col-lg-9">
	  <div class="input-group">
      <input type="text" class="form-control" id="username" placeholder="케릭터 이름">
	  <span class="input-group-btn">
	    <button class="btn btn-default" type="button" id="NameCheck">중복 확인</button>
	  </span>
	  </div>
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="status" class="col-lg-3 control-label">스테이터스</label>
    <div class="col-lg-9" align="center">
    
    <table class="table table-condensed" style="text-align:center">
    <tr>
        <td class="active">근력</td>
        <td class="active">민첩</td>
        <td class="active">지력</td>
    </tr>
    <tr>
        <td id="stat1"></td>
        <td id="stat2"></td>
        <td id="stat3"></td>
    </tr>
    <tr>
        <td class="active">예지력</td>
        <td class="active">행운</td>
        <td class="active">매력</td>
    </tr>
    <tr>
        <td id="stat4"></td>
        <td id="stat5"></td>
        <td id="stat6"></td>   
    </tr>
	</table>
	<button class="btn btn-default" type="button" id="statusroll">다시 배정하기</button>
    </div>
  </div>
  
  <div class="form-group">
    <label for="username" class="col-lg-3 control-label">성향</label>
    <div class="col-lg-9">
      <select class="form-control" id="tendency">
          <option>무기성애자</option>
          <option>책략가</option>
          <option>앞을 내다 보는 자</option>
          <option>건축가</option>
          <option>달변가</option>
      </select>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" id="agree3"> 아직 미정인 것을 동의합니다.
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-8" align="center">
      <button type="button" id="join" class="btn btn-default">가입하기</button>
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
	<script src="js/statusroll.js"></script>
  </body>
</html>