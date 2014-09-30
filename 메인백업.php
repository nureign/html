<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Chef Webgame</title>
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="./css/font-awesome.css" type="text/css" media="screen" title="no title" /> 
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script> 
        <!-- Custom styles for this template -->
    <link href="navbar-static-top.css" rel="stylesheet">
</head>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">The Chef Korea</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">소개</a></li>
            <li><a href="#about">세계관</a></li>
            <li><a href="#contact">종족</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">특징<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">던전</a></li>
                <li><a href="#">식재료</a></li>
                <li><a href="#">레시피</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">스폐셜</li>
                <li><a href="#">이벤트</a></li>
                <li><a href="#">프리미엄 혜택</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">커뮤니티<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">자유토론</a></li>
                <li><a href="#">종족모임</a></li>
                <li><a href="#">거래게시판</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">설정<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">내정보</a></li>
                <li><a href="#">보안설정</a></li>
                <li><a href="#">미정</a></li>
              </ul>
            </li>
            <li><a href="./">도움말</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>  

    <!-- Carousel
    ================================================== -->
<div class="row" align="center">
	<div class="col-md-1"></div>
	<div class="col-md-2">
		<div class="btn-group-vertical">
			<div class="btn-group">
          		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Action <span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div> <!--btn-group del-->
			<div class="btn-group">
            	<button type="button" class="btn btn-default">요리하기</button>
			</div>
            <div class="btn-group">
            	<button type="button" class="btn btn-default">편의점</button>
          	</div>
            <div class="btn-group">
            	<button type="button" class="btn btn-default">테스트</button>
         	</div>
            <div class="btn-group">
            	<button type="button" class="btn btn-default">상점</button>
        	</div>
            <div class="btn-group">
            	<button type="button" class="btn btn-default">마을밖으로</button>
         	</div>
            <div class="btn-group">
            	<button type="button" class="btn btn-default">Middle</button>
         	</div>
            <div class="btn-group">
            	<button type="button" class="btn btn-default">Middle</button>
          	</div>  
		</div> <!--btngroup vertical del-->
	</div> <!-- col-md-3 closed -->
	<div class="col-md-6">
		<img data-src="holder.js/300x300" src="/images/char1.gif" alt="...">
        <div class="input-group">
  			<span class="input-group-addon"><span class="label label-danger">체력</span></span>
  				<div class="progress, form-control">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
					100%
					</div>
				</div><span class="input-group-addon">5000/5000</span>
		</div>
        <div class="input-group">
  			<span class="input-group-addon"><span class="label label-warning">멘탈</span></span>
  				<div class="progress, form-control">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
					99%
					</div>
				</div><span class="input-group-addon">1980/2000</span>
		</div>
	</div>
	<div class="col-md-2">
    	<div class="panel panel-default">
		<!-- Default panel contents -->
			<div class="panel-heading">레시피 숙련도</div>
              <!-- Table -->
              <table class="table">
                ...
              </table>
			</div>
		</div>
	</div>
	<div class="col-md-1">
	</div>    
      <!-- FOOTER -->
      <footer><br /><br />
        <p align="center">&copy; 2014 The Chef Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>