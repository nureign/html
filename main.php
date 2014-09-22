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
            <li><a href="./worldview.php">세계관</a></li>
            <li><a href="./character.php">종족</a></li>
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
	<div class="col-md-1">
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

    <div class="row">
      <div class="col-xs-8 col-sm-6">
		<img data-src="holder.js/300x300" src="./images/char1.gif" alt="...">
      </div>
      <div class="col-xs-4 col-sm-6">
        <ol class="breadcrumb">
            <li class="active">캐릭터 이름</a></li>
            <li>모에모에 (#1653)</a></li>
        </ol>
		<ol class="breadcrumb">
            <li class="active">등급(레벨)</a></li>
            <li>견습(Lv.10)</a></li>
        </ol>
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
       <br />
       <div class="panel panel-default">
		<table class="table table-condensed" align="center">
			<tr class="active">
				<td class="active" align="center">세력</td>
				<td colspan="4" align="center" class="success">엘프(모에)</td>
			</tr>
		</table>
        </div>
      <div class="panel panel-default">
		<!-- Default panel contents -->
			<div class="panel-heading">스테이터스</div>
				<!-- Table -->
                <table class="table table-condensed" align="center">
                    <tr class="danger">
                    <td class="danger" align="center">지구력</td>
                    <td class="danger" align="center">순발력</td>
                    <td class="danger" align="center">습득력</td>
					<td class="danger" align="center">근성</td>
                    </tr>
                    </tr>
                    <tr class="warning">
                    <td class="warning" align="center">30</td>
                    <td class="warning" align="center">45</td>
                    <td class="warning" align="center">57</td>
					<td class="warning" align="center">12</td>
                    </tr>
                    <tr class="danger">
                    <td class="danger" align="center">섹시</td>
                    <td class="danger" align="center">도움</td>
					<td class="danger" align="center">명예</td>
					<td class="danger" align="center">골드</td>
                    </tr>
					<tr class="warning">
                    <td class="warning" align="center">80</td>
                    <td class="warning" align="center">60</td>
                    <td class="warning" align="center">10,000</td>
					<td class="warning" align="center">754,210</td>
                    </tr>
                </table>
			</div>
        
      </div>
    </div>

        
	</div>
    
    
    
    
    
	<div class="col-md-2">
    	<div class="panel panel-default">
		<!-- Default panel contents -->
			<div class="panel-heading">대기중인 시간</div>
				<!-- Table -->
                <table class="table table-condensed" align="center">
                    <tr class="active">
                    <td class="active" align="center">요리하기</td>
                    <td class="success" align="center">5/10(+20)</td>
                    </tr>
                    <tr class="danger">
                    <td class="warning" align="center">미정</td>
                    <td class="danger" align="center">10</td>
                    </tr>
                    <tr class="info">
                    <td class="info" align="center">미정2</td>
                    <td class="active" align="center">20</td>
                    </tr>
                </table>
			</div>
    	<div class="panel panel-default">
		<!-- Default panel contents -->
			<div class="panel-heading">레시피 진행도</div>
				<!-- Table -->
                <table class="table table-condensed" align="center">
                    <tr class="active">
                    <td class="active" align="center">한식</td>
                    <td class="success" align="center">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%
						</div>
                    </td>
                    </tr>
                    <tr class="danger">
                    <td class="warning" align="center">중식</td>
                    <td class="danger" align="center">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%
						</div>
                    </td>
                    </tr>
                    <tr class="info">
                    <td class="info" align="center">양식</td>
                    <td class="active" align="center">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%
						</div>
                    </td>
                    </tr>
                    <tr class="success">
                    <td class="info" align="center">기타</td>
                    <td class="active" align="center">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%
						</div>
                    </td>
                    </tr>
                </table>
			</div>
    	<div class="panel panel-default">
		<!-- Default panel contents -->
			<div class="panel-heading">미정인 메뉴</div>
              <!-- Table -->
              <table class="table">
                ...
              </table>
			</div>
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