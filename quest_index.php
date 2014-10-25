<?
	/*
		quest_index.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
?>

<style type="text/css">
body {

	background-image: url(images/bgleft.gif), url(images/bgright.gif); 
	background-repeat: repeat-y; 
	background-position: top left, top right; 
}
</style>

<!-- 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 퀘스트 소개 시작 -->
	<div class="col-xs-10">
        <div class="alert center" role="alert" style="background-color:#600; width:950;"><font color="#FFFFFF" size="+3">퀘스트</font></div>
        <img src="./images/quest.jpg" width="1050" height="434" alt="..." style="text-align:center;">
		<div>
        <br />
        <h1>다양한 퀘스트 종류</h1>
        <br />
        <h4 align="left" style="margin-left:100px;">
        	스토리 퀘스트를 비롯하여 자원 퀘스트, 명예퀘스트 등 여러가지 퀘스트들이 존재합니다.<br />
            퀘스트를 수행하면서 어려운 부분도 있지만 결과적으로 보상이 있는 만큼 여러가지 도전을 할 수 있습니다.<br />
            퀘스트가 어렵다면 잠시 미루었다가 조금 더 강해지고 도전하는 방법도 좋은 방법입니다.</h4>
        <br />
        <h4 align="left" style="margin-left:100px;">
        	하지만 때로는 외계행성의 외계인들에게도 범접할 수 있겠지만 모험을 하다보면 다른 사람들이 운영하고 있는<br />
            전초기지에도 워프를 하게 될 수 있습니다. 재도약 하는데는 다소 시간이 걸리므로 상대편 기지를 탐사해보는것도<br />
            나쁘지 않은 방법이 될 수 있습니다.</h4><br /><br />
        </div>
        <img src="./images/quest_2.jpg" width="1050" height="438" alt="..." style="text-align:center;"><br /><br />
	</div>
    <!-- 퀘스트 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->
</div></div>
	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>