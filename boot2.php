<!DOCTYPE html>
 
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>������</title>
    <!--�ʱ�ȭ-->
        <style>
            
            *{margin: 0; padding:0;}
            body{font-family: 'Times New Roman',serif;}
            li{list-style: none;}
            a{text-decoration:none;}
            img{border: 0;}
 
        </style>  
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css" media="screen" title="no title" />
    <link rel="stylesheet" href="./css/font-awesome.css" type="text/css" media="screen" title="no title" /> 
 
    <!--�α������α׷�--> 
    <!--��Ʈ����-->
    <style>
        @font-face {
            font-family: 'AAA';
            src: local('nanumgothic'),
                   url('nanumgothic.eot') ,
                   url('nanumgothic.ttf'),
                   url('nanumgothic.woff');
}
        *{
        font-family:'AAA';
}
    </style>
    
    <!--���-->
    <style>
        #main_header{
            width: 960px;
            margin: 0 auto; 
            height: 160px;
            position: relative;
}
        #main_header >#title{
            position: absolute;
            left: 20px; top: 30px;
}
    </style>
    <!--������-->
    <style>
        #content{
            width:960px;
            margin: 0 auto; 
            overflow: hidden;
}
        #content > #main_section{
            width: 500px;
            float: left
 
        }
        #content > #main_aside{
            width: 320px;
            float: right;
} 
    </style>
   
    <!--Ǫ�ͼ���-->
    <style>
        #main_footer{
            width: 960px;
            margin: 0 auto;
            margin-bottom:10px; 
            box-sizing: border-box;
            padding: 10px;
            border: 1px solid black; 
            text-align:center;
} 
    </style>  
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script> 
   
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">�׽�Ʈ ����</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Ȩ</a></li>
        <li><a href="#">����</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">�����<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">�˻�</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">����</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">����<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <header id="main_header">
        <hgroup id="title">
            <h3>�׽�Ʈ ������</h3>
            <h4>�׽�Ʈ</h4>
        </hgroup>
    </header>
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
    60%
  </div>
  <br/>
  </div>
  <div class="progress">
  <div class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
    <span class="sr-only">45% Complete</span>
	45% ��ȭ�Ϸ�
  </div>
</div>
    <div id="content">
	<div class="alert alert-success" role="alert">���������� ��ȭ�� �Ϸ�Ǿ����ϴ�!</div>
<ul class="nav nav-pills nav-stacked">
  <li class="active">
    <a href="#">
      <span class="badge pull-right">42</span>
      Home
    </a>
  </li>
  ...
</ul>
    </div>
    <br/>
 
    <br />
 <div class="panel panel-danger" align="center"><div class="alert alert-danger" role="alert" align="center">�丮�п�</div>�̰��� ���ĸ�Ÿ �丮��!</div>
    <br />
 
        <footer id="main_footer"> 
            <h5>-</h5>
            <h5>copyright@���� All rights reserved.</h5>
        </footer>


 <div class="btn-group-vertical">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
  <div class="btn-group">
    <button type="button" class="btn btn-default">Middle</button>
  </div>
    <div class="btn-group">
    <button type="button" class="btn btn-default">Middle</button>
  </div>
</div>
<?
	phpinfo();
?>
</body>
</html>