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

<?
	include_once "./common/nav.php";
?> 


<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
  
  <h2>종족</h2>
  <p class="lead">더 쉐프 웹게임에서는 3가지 종족을 선택할 수 있습니다.<br />원래부터 살고 있던 종족인 인간을 선택해서 진행할 수도 있으며, 더 쉐프의 세계에서 원치 않게 낯선 땅에 들어오게 된 안드로이드 종족, 고도의 기술력으로 지구로 공간을 일그러뜨려서 모든 원인의 시작인 이그니스 종족까지.<br />종족별로 특성을 선택하여 셰프의 세계의 주인공이 되어보세요!</p>
  <div class="bs-example bs-example-tabs">
      <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#human" data-toggle="tab">인간</a></li>
        <li><a href="#android" data-toggle="tab">안드로이드</a></li>
        <li><a href="#ignis" data-toggle="tab">이그니스</a></li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="human">
          <dl class="dl-horizontal">
          <dt><img src="images/human.png" class="img-responsive"></dt>
          <dd>인간종족은 시공간의 이상현상으로 인하여 중세시대, 현대시대, 미래시대에서 온 여러가지 시대적 사람들이 함께 모이게 되었다. 인간종족은 원래 지구에서 살아가고 있는 생명체로서</dd>
        </dl>
        </div>
        <div class="tab-pane fade" id="android">
        <dl class="dl-horizontal">
          <dt><img src="images/android.png" class="img-responsive"></dt>
          <dd>이그니스 종족에 의해 공간의 일그러짐 현상으로 본의 아니게 지구에 상륙하게 된 종족을 말한다....</dd>
        </dl>
        </div>
        <div class="tab-pane fade" id="ignis">
        <dl class="dl-horizontal">
          <dt><img src="images/char1.gif" class="img-responsive"></dt>
          <dd>사람들이 이그니스라고 부르는 어원은 수십년전 스페인 지역에서 외계종족이 눈부신 섬광을 일으키며 등장했다고 해서 이그니스라고 부르게 되었다. 그렇다. 이그니스 종족은 외계종족을 의미하는 것이고 그들이 왜 오게 되었는지는 인간들은 전혀 이해를 할 수 없었다.</dd>
        </dl>
        </div>
      </div>
    </div>
    
</div>
  <div class="col-md-3"></div>
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