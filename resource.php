<?
	/*
		Resource.php
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

    <!-- 자원 시작 -->
	<div class="col-xs-10">

	<table class="table width center">
    	<tr>
        	<td>
            <div class="alert" role="alert" style="background-color:#FA8B74;"><font color="#FFFFFF" size="+3">자원</font></div>
       		</td>
    	<tr>
			<td>
            <img src="./images/resource.jpg" alt="..." width="700px" height="300px">
			</td>
        </tr>
        <tr>
        	<td align="left" style="padding-left:30px;">
            	<h3 align="center">루비, 티타늄 그리고 팔라듐...</h3>
            	<h4>에스트렐라에서는 자원의 종류가 여러개가 있습니다.
                보통 화폐단위로는 루비라는 것을 사용하며, 루비로 케릭터와 관련된 장비들을 구매하거나 업그레이드에 사용할 수 있습니다.
                실질적으로 많이 활용되는 가치자원이 있는데, 티타늄과 팔라듐이 존재합니다. 이 자원들은 굉장히 구하기 힘들기 때문에
                보통은 일반자원들을 화폐교환소에서 교환하여 사용을 하게 됩니다.
                플레이어가 가지고 있는 기지를 관리하여 생산능력을 끌어올릴 수도 있으니 결과적으로 플레이어 마음먹기 달려있습니다.
                기지에서 생산된 자원으로 유닛생산과 업그레이드에 활용되기에 루비와 티타늄과 같은 광물을 많이 모으시기 바랍니다.</h4>
            </td>
        </tr>
    </table>
	</div>
    <!-- 자원 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->
</div></div>
	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>