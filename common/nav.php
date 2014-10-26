<!--
		Doc name : 공통 메뉴 부분
        Date : 2014.09.19
-->
<body>
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
          <a class="navbar-brand" href="javascript:;" id="index">Estrella Korea</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="./introduce.php">소개</a></li>
            <!--li class="active"-->
            <li><a href="./worldview.php">세계관</a></li>
            <li><a href="./character.php">종족</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">특징<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="./resource.php">자원</a></li>
                <li><a href="./adventure_index.php">모험</a></li>
                <li><a href="./quest_index.php">퀘스트</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">스폐셜</li>
                <li><a href="#" onClick="message()">이벤트</a></li>
                <li><a href="#" onClick="message()">프리미엄 혜택</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">커뮤니티<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="./freebbs_list.php">자유토론</a></li>
                <li><a href="./tradebbs_list.php">거래게시판</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">설정<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#" onClick="message()">내정보</a></li>
                <li><a href="#" onClick="message_secure()">보안설정</a></li>
              </ul>
            </li>
            <li><a href="./" onClick="message()">도움말</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
