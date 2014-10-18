<?
	/*
		Quest.php
	*/
	
	include_once "./common/header.php";
	include_once "./common/nav.php";
	include_once "./common/db_conn.php";
?>

<!-- 윗 상단 로우 전체 시작 -->
<div class="row" align="center">
	<div class="col-xs-1"><!--여백--></div>

    <!-- 가운데 퀘스트 시작 -->
	<div class="col-xs-10">

<!-- 앞에 설명부분 시작 -->
<div class="panel panel-warning width">
	<div class="panel-heading">
    	퀘스트
    </div>
	<div class="panel-body">
		<table class="table" align="center" width="650px">
        	<tr>
                <td>
                <h4 align="center">!퀘스트!</h4>
				퀘스트의 방은 오랜 역사를 자랑하는 장소입니다.<br /><br />
				이미 수많은 젊은 청년들이 퀘스트의 방을 거쳐서 훌륭한 인재로 거듭났었습니다.<br /><br />
                조금은 낡고 음산한 기운이 나오는 곳이지만, 퀘스트를 담당하는 신관에게 말을 걸어 봅니다.<br />
                </td>
            </tr>
        </table>
	</div>
</div>
<!-- 앞에 설명부분 닫기 -->

<!-- 메뉴부분 시작 -->
<div class="bs-example bs-example-tabs width" align="center">
	<ul class="nav nav-tabs nav-justified" role="tablist">
      <li class="active"><a href="#newquest" role="tab" data-toggle="tab">신규 퀘스트</a></li>
      <li><a href="#continuequest" role="tab" data-toggle="tab">진행중인 퀘스트 목록</a></li>
      <li><a href="#completequest" role="tab" data-toggle="tab">완료한 퀘스트 목록</a></li>
    </ul>
</div>
<!-- 메뉴부분 닫기 -->

<!-- 마이탭컨텐츠 시작 -->
<div id="myTabContent" class="tab-content width">
	<!-- 신규 퀘스트 --><br />
	<div class="tab-pane fade in active" id="newquest">

	<table class="table table-hover width">
         <tr class="center">
         	<td class="warning" width="100px"><strong>타입</strong></td>
            <td width="200px">스토리 퀘스트</td>
            <td class="warning" width="100px"><strong>퀘스트 이름</strong></td>
            <td width="200px">새로운 시작</td>
            <td width="300px"></td>
            <td class="warning" width="100px"><button type="submit" class="btn btn-default btn-xs">퀘스트 수행</button></td>
         </tr>
         <tr class="center">
         	<td class="warning" colspan="6">설명</td>
         </tr>
         <tr>
         	<td colspan="6" class="center">
            	내가 이 행성의 새로운 기지를 소유하게 되다니...<br />앞으로 험난한 일들이 많겠지만, 일단 기지를 둘러볼 필요성이 있겠군!
            	커맨드센터와 은행, 편의점, 전통시장을 둘러보고 와야겠다.</td>
         </tr>
         <tr class="center">
			<td class="warning" colspan="6">아이템 수집 또는 해야할 미션</td>
         </tr>
         <tr>
         	<td colspan="6" class="center">1. 커맨드센터를 방문하여 확인증을 발급 받아온다.<br />
            	2. 은행을 방문하여 1,000 루비를 저금하고 온다.<br />
                3. 편의점과 전통시장을 방문하여 아이템을 구매해본다.<br />
            </td>
         </tr>     	
	</table>
	</div>
    <!-- 신규 퀘스트 닫기 -->
    
	<!-- 진행중인 퀘스트 -->
	<div class="tab-pane fade width" id="continuequest">
        <table class="table table-hover width">
             <tr class="center">
                <td class="info" width="100px"><strong>타입</strong></td>
                <td width="200px">경험치 퀘스트</td>
                <td class="info" width="100px"><strong>퀘스트 이름</strong></td>
                <td width="200px">고블린전사 100마리 제거</td>
                <td class="info" width="100px"><strong>진행도</strong></td>
                <td width="150px">50 / 100</td></tr>
             <tr class="center">
                <td class="info" colspan="6"><strong>설명</strong></td>
             </tr>
             <tr>
                <td colspan="6" class="center">
                    고블린전사가 곧곧에서 출몰하고 있다네.<br />이들은 일반 고블린과는 달리 전사의 피가 흐르고 있어서 무기를 들고 약탈을 한다네.<br />
                    지금 당장 행성 곧곧에서 나오고 있는 고블린전사를 100마리 잡아서 증명서를 가지고 오게나.<br /><br />
                    <strong>보상</strong> : 경험치 +100 / 루비 +100</td>
             </tr>
             <tr class="center">
                <td class="info" colspan="6"><strong>아이템 수집 또는 해야할 미션</strong></td>
             </tr>
             <tr>
                <td colspan="6" class="center">고블린전사 제거증명서 (50/100)<br /><br />
                </td>
             </tr>   
             
             <tr class="center">
                <td class="info" width="100px"><strong>타입</strong></td>
                <td width="200px">명예 퀘스트</td>
                <td class="info" width="100px"><strong>퀘스트 이름</strong></td>
                <td width="200px">명예 기본기</td>
                <td class="info" width="100px"><strong>진행도</strong></td>
                <td width="150px">0 / 1</td></tr>
             <tr class="center">
                <td class="info" colspan="6"><strong>설명</strong></td>
             </tr>
             <tr>
                <td colspan="6" class="center">
                    연구소에서 명예기본기 수업이 열린다네<br />연구소에 있는 명예기본기 수업을 듣고 수강증을 가지고 오게나!<br /><br />
                    <strong>보상</strong> : 명예 +5 / 루비 +10</td>
             </tr>
             <tr class="center">
                <td class="info" colspan="6"><strong>아이템 수집 또는 해야할 미션</strong></td>
             </tr>
             <tr>
                <td colspan="6" class="center">명예수업 증명서(기본) (0/1)<br /><br />
                </td>
             </tr>
        </table>
    </div>
	<!-- 진행중인 퀘스트 닫기 -->
                    
    <!-- 완료한 퀘스트 -->
	<div class="tab-pane fade width" id="completequest">
	<table class="table table-hover width">
         <tr class="center">
         	<td class="success" width="100px"><strong>타입</strong></td>
            <td class="success" width="100px"><strong>퀘스트 이름</strong></td>
            <td class="success" width="100px"><strong>보상내역</strong></td>
            <td class="success" width="100px"><strong>보상받기</strong></td>
         </tr> 
         <tr class="center">
         	<td width="100px">튜토리얼</td>
            <td width="100px">모험을 떠나볼까</td>
            <td width="100px">루비 +1</td>
            <td width="100px"><button type="submit" class="btn btn-default btn-xs">보상받기</button></td>
         </tr>     	
	</table>
    </div>
    <!-- 완료한 퀘스트 닫기 -->

</div>
<!-- 마이탭컨텐츠 닫기 -->

	</div>
    <!-- 가운데 퀘스트 닫기 -->

	<div class="col-xs-1"><!-- 공백 --></div>
</div>
<!-- 윗 상단 로우 전체 닫기 -->

	<?
		include_once "./common/footer.php";
	?>
  </body>
</html>