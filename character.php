<?
	/*
		character.php
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

    <!-- 종족 시작 -->
	<div class="col-xs-10">

	<table class="table width center">
    	<tr>
        	<td><div class="alert" role="alert" style="background-color:#D66175"><font color="#FFFFFF" size="+3">종족</font></div></td>
        </tr>
        <tr>
        	<td>
            	<img src="./images/character_0.jpg" alt="..." width="650px" height="300px"><br /><br />
            	<div style="text-align:left; margin-left:50px;">
                에스트렐라에서는 인류연합군이 태양계 밖으로 자원을 얻기 위해 진출하면서 만나게 되는
                외계행성 외계인들과의 전투에서부터 시작됩니다.<br />
                인류연합군과 외계인들의 특성에 대해 알아볼 수 있습니다.
                또한 인류연합군에서 직책에 대해서도 설명을 엿볼수 있습니다.
                </div>
            </td>
        </tr>
    </table>
    
    <!-- 메뉴부분 시작 -->
    <div class="bs-example bs-example-tabs width" align="center">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#human" role="tab" data-toggle="tab">인류연합군</a></li>
          <li><a href="#alien" role="tab" data-toggle="tab">외계행성 외계인</a></li>
        </ul>
    </div>
    <!-- 메뉴부분 닫기 -->


      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="human">
        
        <table class="table width center">
        	<tr>
            	<td width="300px"><img src="./images/glen.jpg" alt="..." width="300px" height="400px"><br /><h6>어린시절 글랜의 모습</h6></td>
                <td align="left"><h3 align="center">인류 연합군이란...</h3><br />
                	사진 찍는것을 유난히 좋아했던 애니는 글랜의 모습을 어렸을적부터 많이 담아왔었다.<br />
                	오히려 사진 찍히기를 싫어하는 그녀는 어렸을적에 찍은 사진이 거의 없다고 볼 수 있다.<br />
                    이 사진은 사진 찍기를 좋아하는 애니가 몰래 글랜의 모습을 찍어서 소중하게 보관하고 있던 것을<br />
                    글랜에게 생일선물로 담아서 줬던 소중한 사진이였다.
                    그래서 그런지 이사진을 글랜에게 받아내는것이 어려웠다고 한다.
                    <br />인류연합군의 중추적인 역할을 기대해 볼 수 있는
                    사람이 누가 될 것인지에 대해 다양한 시각들이 존재한다. 인류 연합군은 지구의 고갈된 자원을 충당시키기 위해
                    외계행성으로부터 자원을 탐사하고 채취하여 인류가 온전히 지속될 수 있도록 노력하는 중이다.<br />
                    다만 외계행성에서 만나게 되는 외계인과의 적대적인 관계가 있기에 외계행성의 자원과 섬멸을 목적을 두는 종족이 인류다.
                    몇십년간의 지속적인 발전으로 인류는 차원이동기술을 가지게 되었고, 다양한 과학기술의 진보로 차례차례 외계종족을 섬멸해 가고 있다.
                </td>
            </tr>
        </table>
        
        </div>
        
        <div class="tab-pane fade" id="alien">
        
        <table class="table width center">
        	<tr>
            	<td width="300px"><img src="./images/alien.jpg" alt="..." width="300px" height="300px"><br /><h6>외계행성 블랙벌레</h6></td>
                <td align="left"><h3 align="center">외계행성 외계인</h3><br />
                    사람들이 외계행성이라고 불리게 된것은 마땅한 명명법을 생각하기에는 너무 갑작스럽게 벌어진 일들이 많아서이다.
                    따라서 그냥 그대로 부르기 쉽게 외계행성이라고 명명하게 되었고, 그 종족 전체를 인류가 부르기 편한 외계인으로 부르게 되었다.
                    현재 보고 있는 사진은 우리의 적인 외계행성의 외계인들 중에서 흔하고도 흔한 벌레다.<br />
                	재미있는 사실은 이들은 벌레의 형태도 있고, 인간형태도 있다.
                    크기도 재각각이여서 예측을 할 수 없는 형태들이 많으며 그들이 인류에게 행하는 행위들은 가히 상상을 할 수가 없다.
                    그 이유가 인류가 행하는 자원탐사 자체에 불만을 가진것인지, 우리 인류를 새로운 식량으로 생각하는지는 몰라도
                    그들은 인류에게 있어서 적임은 확실하다는 점이다. 그들은 계속해서 우리의 기지를 공략할 것이고, 언젠간 지구로까지 올지도 모른다.
                    외계인들의 공격은 주로 차원이동기술이 많이 활용된다. 따라서 적이 어디로 나타날지 모르기 때문에 항상 주의를 기울여야 한다.
                    언제나 그렇듯, 이 우주에는 우리보다 지적수준이 하등인 생명체도 있지만 지적수준이 매우 높은 고등생명체 또한 다수 존재한다.
                    이들로부터 기지를 지키고, 행성을 보호하며 자원을 획득하는것이 우리가 짊어질 숙명과도 같은 것이다.
                </td>
            </tr>
        </table>
        
        </div>
        




	</div>
    <!-- 종족 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 로우 전체 닫기 -->
</div></div>
	<?
		include_once "./common/footer.php";
	?>

  </body>
</html>