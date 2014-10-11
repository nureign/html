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
    <!--<link href="navbar-static-top.css" rel="stylesheet">-->
</head>

<?
	include_once "./common/nav.php";
?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active" align="center">
          <img src="images/test.gif" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>이 세상의 원천에는 자원이 있다!</h1>
              <p>궁극적으로 더 나은 생활을 위해서는 자원개발이 필수일지도 모릅니다.<br />자원을 찾고 종족을 위해 플레이어가 직접 되어보세요.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">지금 바로 가입하기</a></p>
            </div>
          </div>
        </div>
        <div class="item" align="center">
          <img src="images/test.gif" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>새로운 신규 이벤트!</h1>
              <p>신규회원의 특전을 진행합니다.<br />매일 오후8시부터 10시동안 펼쳐지는 2시간 경험치 이벤트!<br />20% 경험치가 빠르게 오르기 때문에 순위권을 노려보는 사용자들에게 최고의 선물!<br />자세한 사항은 공지사항을 참고하세요!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">이벤트 확인하기</a></p>
            </div>
          </div>
        </div>
        <div class="item" align="center">
          <img src="images/test.gif" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>계정을 안전하게 지키는 방법!</h1>
              <p>에스트렐라 코리아에서는 절대로 운영자가 유저분들의 비밀번호를 요구하지 않습니다.<br />보다 더 안전한 방법을 위해 조만간 제공될 OTP 기능을 사용할 수 있도록 준비중에 있습니다.<br />자세한 사항은 별도의 공지사항을 참고해주시기 바랍니다!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">보안센터로 이동</a></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->
    <br />
    
<div class="row" align="center">
  <div class="col-md-2"></div>
  <div class="col-md-4"><div class="well">공지 / 업데이트 안내<br /><br />
  <ol>
  <li>(2014.08.24 정규 업데이트)</li>
  <li>(2014.08.26 보안 업데이트)</li>
  <li>고객센터 휴무 안내</li>
  <li>던전 3종 추가 업데이트</li>  
  <li>게임 이름 테스트 안내</li>
  <li>종족 밸런스 수정 (V1.2)</li>
</ol></div></div>
  <div class="col-md-4">
  	<div class="well">에스트렐라 세계로 출발<br /><br />
	<form role="form">
		<div class="form-group">
			<div class="input-group input-group-sm">
				<span class="input-group-addon">메일계정</span>
				<input type="text" class="form-control" placeholder="Enter E-mail" id="email">
			</div>
			<div class="input-group input-group-sm">
				<span class="input-group-addon">비밀번호</span>
				<input type="password" class="form-control" placeholder="Password" id="password">
			</div>
			<br />
			<div class="btn-group btn-group-justified">
				<div class="btn-group">
					<button type="button" class="btn btn-default" onclick="location.href='./join_member.php';">회원가입</button>
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-default" id="login">로그인</button>
				</div>
			</div>
		</div>
	</form>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>    
    
      <!-- FOOTER -->
      <footer>
        <p align="center">&copy; 2014 The Estrella Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>