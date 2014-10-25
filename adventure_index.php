<?
	/*
		adventure_index.php
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

    <!-- 모험 시작 -->
	<div class="col-xs-10">
        <div class="alert center" role="alert" style="background-color:#000B66; width:950;"><font color="#FFFFFF" size="+3">모험</font></div>
        <img src="./images/adventure.jpg" width="1050" height="700" alt="..." style="text-align:center;">
		<div>
        <br />
        <h1>인류의 모험, 그 속에서 펼쳐지는 에피소드</h1>
        <br />
        <h4 align="left" style="margin-left:100px;">
        	에스트렐라에서의 경험할 수 있는 모험은 다양한 행성들을 만나볼 수 있습니다.<br />
            인류의 자원탐사 전초기지에서 가장 가까운 갤슈아 행성부터 인류를 공격하기 시작한 외계인들의 행성까지<br />
            그 모든것이 에스트렐라에서만 경험해 볼 수 있습니다.</h4>
        <br />
        <h4 align="left" style="margin-left:100px;">
        	하지만 때로는 외계행성의 외계인들에게도 범접할 수 있겠지만 모험을 하다보면 다른 사람들이 운영하고 있는<br />
            전초기지에도 워프를 하게 될 수 있습니다. 재도약 하는데는 다소 시간이 걸리므로 상대편 기지를 탐사해보는것도<br />
            나쁘지 않은 방법이 될 수 있습니다.</h4><br /><br />
        </div>
        <img src="./images/adventure_2.jpg" width="1050" height="700" alt="..." style="text-align:center;"><br /><br />
	</div>
    <!-- 모험 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->
</div></div>
	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>